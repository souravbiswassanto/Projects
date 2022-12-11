CREATE TABLE advertisement(
	id INT NOT NULL AUTO_INCREMENT,
	Book_Name VARCHAR(100) NOT NULL,
	modifiedBook_Name VARCHAR(100) NOT NULL,
	Authors_Name VARCHAR(100) NOT NULL,
	Catagory VARCHAR(100) NOT NULL,
	Books_Condition VARCHAR(100) NOT NULL,
	Name VARCHAR(100) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	Phone VARCHAR(100) NOT NULL,
	Location VARCHAR(100) NOT NULL,
	Division VARCHAR(100) NOT NULL,
	Details VARCHAR(1000) NOT NULL,
	Price VARCHAR(100) NOT NULL,
	Image VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
)

INSERT INTO advertisement(Book_Name,Authors_Name,Catagory,Books_Condition,Name,Email,Phone,Location,Price,Image)
VALUES
('Introduction to Algorithms','Thomas H. Coremen','Engineering','Used','Sourav','sourav.cse4.bu@gmail.com','01881178367','Rupatoli','100','images/1.jpg'),
('Introduction to Algorithms','Thomas H. Coremen','Engineering','Used','Samiul','samiul.cse1.bu@gmail.com','01881178367','Rupatoli Housing','100','images/1.jpg'),
('Introduction to Algorithms','Thomas H. Coremen','Engineering','Used','Faizul','faizul.cse4.bu@gmail.com','01783311066','Kathaltola','100','images/1.jpg'),
('Introduction to Algorithms','Thomas H. Coremen','Engineering','Used','Sohag','sohag.cse4.bu@gmail.com','01881178367','University of Barisal','100','images/1.jpg');

CREATE TABLE account(
	id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Phone VARCHAR(100) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    Division VARCHAR(100) NOT NULL,
    Image VARCHAR(100),
    PRIMARY KEY(id)
)