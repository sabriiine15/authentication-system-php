CREATE DATABASE hajar_db;
USE hajar_db;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255)
);