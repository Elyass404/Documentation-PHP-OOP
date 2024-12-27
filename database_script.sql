-- Active: 1733760231294@@127.0.0.1@3306
CREATE DATABASE orm_project;
use orm_project

CREATE table players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    nationality VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    club VARCHAR(255) NOT NULL

)
