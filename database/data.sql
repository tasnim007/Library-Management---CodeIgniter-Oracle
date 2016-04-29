INSERT INTO users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth) 
VALUES('ahmed','1234','ahmed','s','abc@gmail.com',3,2,'Dhaka','123',sysdate);
INSERT INTO users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth) 
VALUES('imtiaj','1234','imtiaj','s','xyz@gmail.com',3,2,'Dhaka','123',sysdate);
INSERT INTO users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth) 
VALUES('sayeed','1234','sayeed','s','pqr@gmail.com',3,2,'Dhaka','123',sysdate);
INSERT INTO users(user_name,password,name,user_type,email_address,lvl,trm,address,phone_number,date_of_birth) 
VALUES('tasnim','1234','tasnim','t','bcd@gmail.com',3,2,'Dhaka','123',sysdate);

INSERT INTO librarian(librarian_id,user_name,password,name,email_address,phone_number,date_of_birth) 
VALUES(1,'admin','1234','abc','bcd@gmail.com','123',sysdate);

INSERT INTO location(almira_id,row_id,column_id) VALUES(1,1,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(1,1,2);
INSERT INTO location(almira_id,row_id,column_id) VALUES(1,2,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(1,2,2);
INSERT INTO location(almira_id,row_id,column_id) VALUES(2,1,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(2,1,2);
INSERT INTO location(almira_id,row_id,column_id) VALUES(2,2,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(2,2,2);
INSERT INTO location(almira_id,row_id,column_id) VALUES(3,1,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(3,1,2);
INSERT INTO location(almira_id,row_id,column_id) VALUES(3,2,1);
INSERT INTO location(almira_id,row_id,column_id) VALUES(3,2,2);



INSERT INTO book(title,publisher,subject_name) VALUES('Teach Yourself C','Mcgraw-Hill','C');
INSERT INTO book(title,publisher,subject_name) VALUES('Teach Yourself C++','Mcgraw-Hill','C++');
INSERT INTO book(title,publisher,subject_name) VALUES('Teach Yourself JAVA','Mcgraw-Hill','Java');
INSERT INTO book(title,publisher,subject_name) VALUES('Teach Yourself Python','Mcgraw-Hill','Python');
INSERT INTO book(title,publisher,subject_name) VALUES('Database Systems: The Complete Book','Prentice Hall','Database');
INSERT INTO book(title,publisher,subject_name) VALUES('DATABASE SYSTEM CONCEPTS','Mcgraw-Hill','Database');
INSERT INTO book(title,publisher,subject_name) VALUES('Concrete Mathematics','Pearson-Education','concrete');
INSERT INTO book(title,publisher,subject_name) VALUES('Computer Networks','Prentice-Hall','Networking');


INSERT INTO author(author_name) VALUES('knuth');
INSERT INTO author(author_name) VALUES('graham');
INSERT INTO author(author_name) VALUES('patashink');
INSERT INTO author(author_name) VALUES('schield');
--INSERT INTO author(author_name) VALUES('balaguruswami');
INSERT INTO author(author_name) VALUES('tanenbaum');
--INSERT INTO author(author_name) VALUES('turley');
--INSERT INTO author(author_name) VALUES('cormen');
--INSERT INTO author(author_name) VALUES('leiserson');
--INSERT INTO author(author_name) VALUES('rivest');
--INSERT INTO author(author_name) VALUES('stein');


INSERT INTO book_author(book_id,author_id) VALUES(1,4);
INSERT INTO book_author(book_id,author_id) VALUES(2,4);
INSERT INTO book_author(book_id,author_id) VALUES(3,4);
INSERT INTO book_author(book_id,author_id) VALUES(4,4);
INSERT INTO book_author(book_id,author_id) VALUES(7,1);
INSERT INTO book_author(book_id,author_id) VALUES(7,2);
INSERT INTO book_author(book_id,author_id) VALUES(7,3);
INSERT INTO book_author(book_id,author_id) VALUES(8,5);



INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(1,4,121,2,2,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(1,5,122,2,1,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(1,6,123,2,2,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(2,2,131,2,1,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(3,8,141,2,2,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(4,4,151,2,1,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(5,1,161,2,2,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(6,3,171,2,2,'14-JUN-11','14-JUN-12');
INSERT INTO edition(book_id,edition_no,ISBN,no_of_copy,no_of_available_copy,publish_date,arrival_date)
VALUES(6,5,171,2,1,'14-JUN-11','14-JUN-12');

 
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,4,1);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,4,1); 
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,5,1);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,5,1);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,6,1);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(1,6,1);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(2,2,2);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(2,2,2);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(3,8,3);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(3,8,3);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(4,4,10);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(4,4,10);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(5,1,7);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(5,1,7);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(6,3,5);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(6,3,5);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(6,5,6);
INSERT INTO accession(book_id,edition_no,location_id) VALUES(6,5,6); 