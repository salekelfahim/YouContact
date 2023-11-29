CREATE DATABASE youcontact

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    passwordd VARCHAR(50),
    datte DATE
)ENGINE=INNODB;
CREATE TABLE contacts (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    num INT,
    adress VARCHAR(250),
    datte DATE,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users (id)
)ENGINE=INNODB

INSERT INTO users (nom, prenom, email, passwordd, datte) 
VALUES('John', 'Doe', 'john.doe@example.com', 'password123', '2023-01-01'),
('Jane', 'Smith', 'jane.smith@example.com', 'pass456', '2023-02-15'),
('Bob', 'Johnson', 'bob.johnson@example.com', 'securePass', '2023-03-20'),
('Alice', 'Williams', 'alice.williams@example.com', '1234pass', '2023-04-10'),
('Charlie', 'Brown', 'charlie.brown@example.com', 'brown123', '2023-05-05');

INSERT INTO contacts (nom, prenom, email, num, adress, datte, id_user) 
VALUES ('Friend1', 'Contact1', 'contact1@example.com', 123456789, '123 Main St, City1', '2023-01-05', 1),
('Friend2', 'Contact2', 'contact2@example.com', 987654321, '456 Oak St, City2', '2023-02-10', 2),
('Colleague1', 'Contact3', 'contact3@example.com', 555666777, '789 Pine St, City3', '2023-03-15', 3),
('Family1', 'Contact4', 'contact4@example.com', 111222333, '101 Cedar St, City4', '2023-04-20', 4),
('Neighbor1', 'Contact5', 'contact5@example.com', 999888777, '202 Elm St, City5', '2023-05-25', 5)

