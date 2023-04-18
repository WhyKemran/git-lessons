CREATE DATABASE users;

CREATE TABLE users
(
    id INT(11) auto_increment PRIMARY KEY,
    first_name VARCHAR(256) NOT NULL,
    last_name VARCHAR(256) NOT NULL,
    gender CHAR(1) NOT NULL,
    email VARCHAR (256) NOT NULL unique,
    password VARCHAR(256) NOT NULL
);

CREATE TABLE comments
(
    id INT(11) auto_increment PRIMARY KEY,
    name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    com TEXT NOT NULL
);