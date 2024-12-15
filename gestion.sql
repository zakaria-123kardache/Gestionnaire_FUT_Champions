CREATE DATABASE GestionPlayer;

USE GestionPlayer;

CREATE TABLE club (
  id INT PRIMARY KEY NOT NULL ,
  nom VARCHAR(100),
  logo_url VARCHAR(200)
);

CREATE TABLE nationalites (
  id INT PRIMARY KEY NOT NULL ,
  name VARCHAR(100),
  flag_url VARCHAR(200)
);

CREATE TABLE STQ (
    id INT PRIMARY KEY NOT NULL ,
    Rating INT,
    pace INT,
    Shooting INT,
    dribling INT,
    physical INT,
    passing INT,
    defending INT
);

CREATE TABLE STQ_GK(
    id INT PRIMARY KEY NOT NULL ,
    Rating INT,
    pace INT,
    Shooting INT,
    dribling INT,
    physical INT,
    passing INT,
    defending INT
);

CREATE TABLE player (
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(100),
    photo VARCHAR(200),
    position ENUM('GK', 'CM','ST','LW')DEFAULT 'CM',
    id_club INT, 
    id_STQ_GK INT, 
    id_nationalites INT, 
    id_STQ INT,
    FOREIGN KEY (id_club) REFERENCES club (id), 
    FOREIGN KEY (id_STQ_GK) REFERENCES STQ_GK (id), 
    FOREIGN KEY (id_nationalites) REFERENCES nationalites (id), 
    FOREIGN KEY (id_STQ) REFERENCES STQ (id)
);