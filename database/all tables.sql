CREATE TABLE users(
user_id INTEGER NOT NULL,
user_name VARCHAR2(10) NOT NULL,
password VARCHAR2(10) NOT NULL,
name VARCHAR2(50) NOT NULL,
user_type VARCHAR2(1) NOT NULL,
email_address VARCHAR2(50) NOT NULL,
borrowed_book INTEGER DEFAULT 0,
lvl VARCHAR2(1),
trm VARCHAR2(1),
address VARCHAR2(50) ,
phone_number VARCHAR2(50),
date_of_birth DATE ,
PRIMARY KEY (user_id)
);

CREATE SEQUENCE seq_users START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_users
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
    SELECT seq_users.nextval INTO :new.user_id FROM dual;
END;
/

CREATE TABLE librarian(
librarian_id INTEGER NOT NULL,
user_name VARCHAR2(10) NOT NULL,
password VARCHAR2(10) NOT NULL,
name VARCHAR2(50) NOT NULL,
email_address VARCHAR2(50) NOT NULL,
address VARCHAR2(50) ,
phone_number VARCHAR2(50) ,
date_of_birth DATE ,
PRIMARY KEY (librarian_id)
);



CREATE TABLE location(
location_id INTEGER NOT NULL,
almira_id INTEGER,
column_id INTEGER,
row_id INTEGER,
PRIMARY KEY(location_id)
);



CREATE SEQUENCE seq_location START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_location
BEFORE INSERT ON location
FOR EACH ROW
BEGIN
    SELECT seq_location.nextval INTO :new.location_id FROM dual;
END;
/


CREATE TABLE book(
book_id INTEGER NOT NULL,
title VARCHAR2(150) NOT NULL,
publisher VARCHAR2(150) NOT NULL,    /*not sure*/
subject_name VARCHAR2(50) NOT NULL,
PRIMARY KEY(book_id)
);

CREATE SEQUENCE seq_book START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_book
BEFORE INSERT ON book
FOR EACH ROW
BEGIN
    SELECT seq_book.nextval INTO :new.book_id FROM dual;
END;
/




CREATE TABLE author(
author_id INTEGER NOT NULL,
author_name VARCHAR2(50),
PRIMARY KEY(author_id)
);


CREATE SEQUENCE seq_author START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_author
BEFORE INSERT ON author
FOR EACH ROW
BEGIN
    SELECT seq_author.nextval INTO :new.author_id FROM dual;
END;
/


CREATE TABLE book_author(
book_id INTEGER NOT NULL,
author_id INTEGER NOT NULL,
FOREIGN KEY (book_id) REFERENCES book(book_id),
FOREIGN KEY (author_id) REFERENCES author(author_id)
);

CREATE TABLE edition(
book_id INTEGER NOT NULL,
edition_no INTEGER NOT NULL,
ISBN VARCHAR2(25),
no_of_copy INTEGER DEFAULT 1,
no_of_available_copy INTEGER DEFAULT 1,
publish_date DATE,
arrival_date DATE,
PRIMARY KEY(book_id,edition_no),
FOREIGN KEY (book_id) REFERENCES book(book_id)
);

--
/*accession unique for each book */
--

CREATE TABLE accession( 
accession_id INTEGER NOT NULL,
book_id    INTEGER NOT NULL,   
edition_no INTEGER NOT NULL,
location_id INTEGER NOT NULL,
is_available INTEGER DEFAULT 1,
PRIMARY KEY(accession_id),
FOREIGN KEY (book_id,edition_no) REFERENCES edition(book_id,edition_no),
FOREIGN KEY (location_id) REFERENCES location(location_id)
);

CREATE SEQUENCE seq_accession START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_accession
BEFORE INSERT ON accession
FOR EACH ROW
BEGIN
    SELECT seq_accession.nextval INTO :new.accession_id FROM dual;
END;
/




CREATE TABLE issue(
issue_id INTEGER NOT NULL,
accession_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
due NUMBER(5,2) DEFAULT 0,
issue_date DATE NOT NULL,
return_date DATE NOT NULL,
is_returned INTEGER NOT NULL,	--newly added
PRIMARY KEY (issue_id),
FOREIGN KEY (accession_id) REFERENCES accession(accession_id)
);

CREATE SEQUENCE seq_issue START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_issue
BEFORE INSERT ON issue
FOR EACH ROW
BEGIN
    SELECT seq_issue.nextval INTO :new.issue_id FROM dual;
END;
/


CREATE TABLE borrow_req( 
borrow_req_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
book_id INTEGER NOT NULL,
edition_no INTEGER NOT NULL,
accession_id INTEGER NOT NULL,        
PRIMARY KEY(borrow_req_id),
FOREIGN KEY (user_id) REFERENCES users(user_id),
FOREIGN KEY (book_id,edition_no) REFERENCES edition(book_id,edition_no),
FOREIGN KEY (accession_id) REFERENCES accession(accession_id)
);

CREATE SEQUENCE seq_borrow_req START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_borrow_req
BEFORE INSERT ON borrow_req
FOR EACH ROW
BEGIN
    SELECT seq_borrow_req.nextval INTO :new.borrow_req_id FROM dual;
END;
/







CREATE TABLE unapproved_users(
user_id INTEGER NOT NULL,
user_name VARCHAR2(10) NOT NULL,
password VARCHAR2(10) NOT NULL,
name VARCHAR2(50) NOT NULL,
user_type VARCHAR2(1) NOT NULL,
email_address VARCHAR2(50) NOT NULL,
borrowed_book INTEGER DEFAULT 0,
lvl VARCHAR2(1),
trm VARCHAR2(1),
address VARCHAR2(50) ,
phone_number VARCHAR2(50),
date_of_birth DATE ,
PRIMARY KEY (user_id)
);

CREATE SEQUENCE seq_unapproved_users START WITH 1 INCREMENT BY 1;

CREATE OR REPLACE TRIGGER tr_unapproved_users
BEFORE INSERT ON unapproved_users
FOR EACH ROW
BEGIN
    SELECT seq_unapproved_users.nextval INTO :new.user_id FROM dual;
END;
/