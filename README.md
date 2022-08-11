# myPHPage
 - Template for www.ximuntion.com 
 - This is the first version (1.0) of my webpage, future updates wont be published anymore
 - This can be used as a template for any of you
 - I used MySQL, it needs a: 
	- 📝 database    = db
	- 📝 table	 = users (username, email, password)
	- 📝 table	 = contacts (name, email, message)
 - Also I used w3.css and a bit of bootstrap 5.
 - GOOD LUCK ;D
	
CREATE DATABASE db	

CREATE TABLE users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(500) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) 

CREATE TABLE contacts (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	message VARCHAR(500) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) 
