# Library-Management System - CodeIgniter-Oracle

## Objective:
The aim of this project is to design and implement an online library system, which will enable users to search for books and browse information about books, thesis and journals. 

## Features:
The following features will be covered in our project:-
*	Maintain book, theses, journal information.
* Maintain tile, author, publisher, subject etc. information.
*	Searching facility.
*	Retrieval operations like:-.
  *	List of all books with specific title.
  *	List of all books with specific author name.
  *	List of all books classified under specific sub-subject.
  *	List of all books with any combination of title, subject and author.
  *	List of all books published by a certain publisher.
  *	List of all books published in a certain date.
  *	Retrieve the overdue subscribers.
  *	Retrieve transaction history of any specific period.
*	Maintain user database.
*	Maintain library administrator’s activities database.
*	Notifying user about any information through message/email. 
*	Maintain whole library system through an online application from anywhere.
	

## Users and scope of their activities:
There are two types of users in the CSE library Management application – one is the librarian and other is general users. We are going to illustrate their functionality step by step. 

### Librarian 
1.  Librarian is the admin of this web application. He has all kinds of administrative privileges in this application like adding books, issuing books, deactivating account etc. To use the librarian account, one has to use the username and password provided, Entering these information in the log in field and choosing librarian type, one can enter into the librarian account.
2.  The librarian can send messages to the users. Besides, the librarian can send due notification to all the users who currently have due. 
3.  The librarian can see the transaction history. Here he has to enter two dates from where to which date he wants to see the history.
4.  The librarian has the privilege of deactivating / activating any user account. 
5.  The Librarian can search any of the items stored in the. Here he can choose by which term he wants to search –  category/author/publisher. 
6.  The librarian has the privilege of adding items (Books/ Articles/ Journals) in the library. 
7.  The librarian can also remove any item. 
8.  The Librarian can issue a book to any specific user. 
9.  Librarian can also maintain the database by when a user retuns a book to the Library.

### General Users  
Any user like a student or teacher can use the library first by registering himself. For this he has to provide  necessary information. Then an e-mail will be sent to his mail id with an activation link. By clicking that link he can be the member of the library. 
1.     In his account the user can see his account info, edit his account, change his password and see his due status. Moreover he can download the available soft copy of the books by clicking the “Download Soft Copy” link and selecting the desired book. 
2.     Both type of users, the librarian and the general users can search for any specific book. 


## Platform:
* **Database:** Oracle
* **Framework:** Code Igniter



