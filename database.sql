DROP DATABASE IF EXISTS proiect;
CREATE DATABASE proiect;
USE proiect;
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(20) NOT NULL,
	  password CHAR(40) NOT NULL
);
INSERT INTO users VALUES(NULL, "teo@mail.com", SHA("teo1234")),
                        (NULL, "antonio@mail.com", SHA("antonio1234"));
