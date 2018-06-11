DROP DATABASE IF EXISTS proiect;
CREATE DATABASE proiect;
USE proiect;
CREATE TABLE users (
    username VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
	  password CHAR(40) NOT NULL
);
INSERT INTO users VALUES("teo", "teo@mail.com", SHA("teo1234")),
                        ("antonio", "antonio@mail.com", SHA("antonio1234"));
