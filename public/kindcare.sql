DROP TABLE Parents
DROP TABLE Volunteers;

CREATE TABLE Parents (
	id INT PRIMARY KEY AUTO_INCREMENT,
	fname VARCHAR(255),
	lname VARCHAR(255),
	email VARCHAR(255),
	city VARCHAR(255),
	state VARCHAR(255),
	about VARCHAR(255)
);

CREATE TABLE Volunteers (
	id INT PRIMARY KEY AUTO_INCREMENT,
	fname VARCHAR(255),
	lname VARCHAR(255),
	email VARCHAR(255),
	city VARCHAR(255),
	state VARCHAR(255),
	about VARCHAR(255)
);

/*
INSERT INTO Customers
	(fname, lname, email, about, certifications)
VALUES
	


INSERT INTO Volunteers
	(fname, lname, email, age, disability, need)
VALUES
*/