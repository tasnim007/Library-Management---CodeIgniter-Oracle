CREATE OR REPLACE FUNCTION func_is_asking_book_available(in_title IN VARCHAR2,in_edition_no IN INTEGER)
	RETURN INTEGER
	AS
	flag INTEGER:=0;
	temp_book_id INTEGER:=0;
	BEGIN
		SELECT edition.book_id INTO temp_book_id
		from edition
		where edition_no=in_edition_no AND edition.no_of_available_copy>0 AND edition.book_id IN 
															( 
																SELECT book.book_id
																FROM book
																WHERE book.title=in_title
															);
		IF SQL%FOUND 
			THEN 
				flag:=1;
		END IF;
		RETURN(flag);
		EXCEPTION
		WHEN NO_DATA_FOUND THEN
		RETURN(flag);
	END;
	/


CREATE OR REPLACE PROCEDURE proc_borrow(in_title IN VARCHAR2,in_edition_no IN INTEGER,in_user_id IN INTEGER,out_flag OUT INTEGER)
	AS
	temp_book_id INTEGER:=0;
	temp_accession_id INTEGER:=0;
	
	BEGIN
		out_flag:=func_is_asking_book_available(in_title,in_edition_no);
		IF out_flag=1
			THEN 
				SELECT book.book_id INTO temp_book_id
				FROM book
				WHERE book.title=in_title;


				SELECT accession.accession_id INTO temp_accession_id
				FROM accession
				WHERE accession.book_id=temp_book_id AND accession.edition_no=in_edition_no AND accession.is_available=1 
						AND accession.accession_id = (select max(accession.accession_id) from accession); 
													
				UPDATE accession
				SET accession.is_available=0
				WHERE accession.accession_id=temp_accession_id;
				
				UPDATE edition
				SET edition.no_of_available_copy=edition.no_of_available_copy-1
				WHERE edition.edition_no=in_edition_no AND edition.book_id=temp_book_id;
				
				insert INTO issue(accession_id,user_id,issue_date,return_date)
				values(temp_accession_id,in_user_id,SYSDATE,SYSDATE+15);
				
				update users
				set users.borrowed_book=users.borrowed_book+1
				where users.user_id=in_user_id;
		END IF;
	END;
	/




CREATE OR REPLACE FUNCTION func_is_book_found(in_title IN VARCHAR2,in_publisher IN VARCHAR2,in_subject_name IN VARCHAR2)
	RETURN INTEGER
	AS
	flag INTEGER:=0;
	temp_book_id INTEGER:=0;
	BEGIN
		SELECT book.book_id INTO temp_book_id
		FROM book
		WHERE book.title=in_title AND book.publisher=in_publisher AND  book.subject_name=in_subject_name;
		IF SQL%FOUND 
			THEN 
				flag:=1;
		END IF;
		RETURN(flag);
		EXCEPTION
		WHEN NO_DATA_FOUND THEN
		RETURN(flag);
	END;
	/

CREATE OR REPLACE FUNCTION func_is_edition_found(in_book_id IN INTEGER,in_edition_no IN INTEGER)
	RETURN INTEGER
	AS
	flag INTEGER:=0;
	temp_edition INTEGER:=0;
	BEGIN
		SELECT edition.book_id INTO temp_edition
		FROM edition
		WHERE edition.book_id=in_book_id AND edition.edition_no=in_edition_no;
		IF SQL%FOUND 
			THEN 
				flag:=1;
		END IF;
		RETURN(flag);
		EXCEPTION
		WHEN NO_DATA_FOUND THEN
		RETURN(flag);
	END;
	/

	
--*****************************--
-- ** 3 cases:
--		1. book new
--		2. book exist, edition new
--		3. same book is available


--//*** [function.oci-execute]: OCI_NO_DATA : First u have to insert data into location manually, else you will get error.

--*****************************--
		

CREATE OR REPLACE PROCEDURE proc_input_book(in_title IN VARCHAR2,in_publisher IN VARCHAR2,in_subject_name IN VARCHAR2,in_edition_no IN INTEGER,in_ISBN IN VARCHAR2,in_publish_date IN date,in_almira_id IN INTEGER,in_row_id IN INTEGER,in_column_id IN INTEGER,out_flag OUT INTEGER )
	AS
	temp_book_id INTEGER:=0;
	temp_book_id_for_existing_book INTEGER:=0;
	temp_author_id INTEGER:=0;
	temp_location_id INTEGER:=0;
	--out_flag integer := 0;
	
	BEGIN
	
	out_flag := 0;	--//**out_flag := 0 means book already exists. we don't have to input authors. This is initial assumption.
	
	IF func_is_book_found(in_title,in_publisher,in_subject_name)=0	--//**if book is new
		THEN
			INSERT INTO book(title,publisher,subject_name) 
			VALUES(in_title,in_publisher,in_subject_name);
			
			SELECT book.book_id INTO temp_book_id
			FROM book
			WHERE book.book_id = (SELECT max(book.book_id) FROM book); 
					
			INSERT INTO edition(book_id,edition_no,ISBN,publish_date,arrival_date) 
			VALUES(temp_book_id,in_edition_no,in_ISBN,in_publish_date,sysdate);
				
			SELECT location.location_id INTO temp_location_id
			FROM location
			WHERE location.almira_id=in_almira_id AND location.column_id=in_column_id AND location.row_id=in_row_id;
			
			INSERT INTO accession(book_id,edition_no,location_id)
			VALUES(temp_book_id,in_edition_no,temp_location_id);
			
			out_flag := temp_book_id;	--//**out_flag := temp_book_id  means we have to input authors of this book
			

	ELSE
		SELECT book.book_id INTO temp_book_id_for_existing_book
		FROM book
		WHERE book.title=in_title AND book.publisher=in_publisher AND  book.subject_name=in_subject_name;
		
		IF func_is_edition_found(temp_book_id_for_existing_book,in_edition_no)=0	--//**if edition is new
			THEN 
				INSERT INTO edition(book_id,edition_no,ISBN,publish_date,arrival_date) 
				VALUES(temp_book_id_for_existing_book,in_edition_no,in_ISBN,in_publish_date,sysdate);

				SELECT location.location_id INTO temp_location_id
				FROM location
				WHERE location.almira_id=in_almira_id AND location.column_id=in_column_id AND location.row_id=in_row_id;
				
				INSERT INTO accession(book_id,edition_no,location_id)
				VALUES(temp_book_id_for_existing_book,in_edition_no,temp_location_id);
				
		ELSE	--//**if exact copy of the book is available before
			update edition
			set edition.no_of_copy=edition.no_of_copy + 1,edition.no_of_available_copy=edition.no_of_available_copy + 1
			WHERE edition.book_id=temp_book_id_for_existing_book AND edition.edition_no=in_edition_no;
			
			SELECT book.book_id INTO temp_book_id_for_existing_book
			FROM book
			WHERE book.title=in_title AND book.publisher=in_publisher AND  book.subject_name=in_subject_name;
					
			SELECT location.location_id INTO temp_location_id
			FROM location
			WHERE location.almira_id=in_almira_id AND location.column_id=in_column_id AND location.row_id=in_row_id;
			
			INSERT INTO accession(book_id,edition_no,location_id)
			VALUES(temp_book_id_for_existing_book,in_edition_no,temp_location_id);
		END IF;	
	END IF;

	END;
	/


--**************************//*************************--
	
CREATE OR REPLACE FUNCTION func_is_author_found(in_author_name IN VARCHAR2)
	RETURN INTEGER
	AS
	flag INTEGER:=0;
	temp_author_id INTEGER:=0;
	BEGIN
		SELECT author.author_id INTO temp_author_id
		FROM author
		WHERE author.author_name=in_author_name;
		IF SQL%FOUND 
			THEN 
				flag:=1;
		END IF;
		RETURN(flag);
		EXCEPTION
		WHEN NO_DATA_FOUND THEN
		RETURN(flag);
	END;
	/
	
SELECT func_is_author_found('knuthe') from dual;


CREATE OR REPLACE PROCEDURE proc_input_author(in_author_name IN VARCHAR2,in_book_id IN INTEGER)
	AS
	temp_book_id INTEGER:=0;
	temp_book_id_for_existing_book INTEGER:=0;
	temp_author_id INTEGER:=0;	--**
	temp_location_id INTEGER:=0;
	
	BEGIN
	
	IF func_is_author_found(in_author_name)=0	--if author is new
		THEN
			INSERT INTO author(author_name)	
			VALUES(in_author_name);
			
			SELECT author.author_id INTO temp_author_id
			FROM author
			WHERE author.author_name = in_author_name; 
			
			INSERT INTO book_author(book_id,author_id)
			VALUES(in_book_id,temp_author_id);

	ELSE
			SELECT author.author_id INTO temp_author_id		--if author exist due to his another book
			FROM author
			WHERE author.author_name = in_author_name; 
			
			INSERT INTO book_author(book_id,author_id)
			VALUES(in_book_id,temp_author_id);
		
	END IF;

	END;
	/
	
	
	

CREATE OR REPLACE FUNCTION func_is_book_available_new(in_accession_id IN INTEGER)
	RETURN INTEGER
	AS
	flag INTEGER:=0;
	temp_accession_id INTEGER:=0;
	BEGIN
		SELECT accession.accession_id INTO temp_accession_id
		from accession
		where accession_id = in_accession_id AND is_available = 1;
		IF SQL%FOUND 
			THEN 
				flag:=1;
		END IF;
		RETURN(flag);
		EXCEPTION
		WHEN NO_DATA_FOUND THEN
		RETURN(flag);
	END;
	/
	
select func_is_book_available_new(7) from dual;	

CREATE OR REPLACE PROCEDURE proc_borrow_new(in_book_id IN INTEGER,in_edition_no IN INTEGER,in_user_id IN INTEGER,in_accession_id IN INTEGER,out_flag OUT INTEGER)
	AS
	temp_book_id INTEGER:=0;
	temp_accession_id INTEGER:=0;
	
	BEGIN
		out_flag:=0;
		out_flag:=func_is_book_available_new(in_accession_id);
		IF out_flag=1
			THEN 
												
				UPDATE accession
				SET accession.is_available=0
				WHERE accession.accession_id=in_accession_id;
				
				UPDATE edition
				SET edition.no_of_available_copy=edition.no_of_available_copy-1
				WHERE edition.edition_no=in_edition_no AND edition.book_id=in_book_id;
				
				insert INTO issue(accession_id,user_id,issue_date,return_date,is_returned)
				values(in_accession_id,in_user_id,SYSDATE,SYSDATE+15,0);
				
				update users
				set users.borrowed_book=users.borrowed_book+1
				where users.user_id=in_user_id;
				
				
		END IF;
	END;
	/


	