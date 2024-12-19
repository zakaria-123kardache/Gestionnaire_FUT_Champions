-- Active: 1734463728931@@127.0.0.1@3306@my_database
CREATE DATABASE GestionPlayer;

DROP DATABASE GestionPlayer;


USE GestionPlayer;

CREATE TABLE club (
  id INT PRIMARY KEY AUTO_INCREMENT  ,
  name VARCHAR(100),
  logo_url VARCHAR(200)
);

CREATE TABLE nationalites (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  flag_url VARCHAR(200)
);

CREATE TABLE STQ (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    Rating INT,
    pace INT,
    Shooting INT,
    dribling INT,
    physical INT,
    passing INT,
    defending INT
);

CREATE TABLE STQ_GK(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    Rating INT,
    diving INT,
    handling INT,
    kicking INT,
    reflexes INT,
    speed INT,
    positioning INT
);

CREATE TABLE player (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    photo VARCHAR(200),
    position VARCHAR(200),
    -- position ENUM('GK', 'CM','ST','LW')DEFAULT 'CM',
    id_club INT, 
    id_STQ_GK INT, 
    id_nationalites INT, 
    id_STQ INT,
    FOREIGN KEY (id_club) REFERENCES club (id), 
    FOREIGN KEY (id_STQ_GK) REFERENCES STQ_GK (id), 
    FOREIGN KEY (id_nationalites) REFERENCES nationalites (id), 
    FOREIGN KEY (id_STQ) REFERENCES STQ (id)
);


INSERT INTO player (name, photo, position)
VALUES ('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW'),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST'),
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM'),
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST'),
('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB'),
('Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB'),
('Neymar Jr', 'https://cdn.sofifa.net/players/190/871/25_120.png', 'LW'),
('Mohamed Salah', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'RW'),
('Joshua Kimmich', 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM'),
('Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK'),
('Luka Modrić', 'https://cdn.sofifa.net/players/177/003/25_120.png', 'CM'),
('Vinicius Junior', 'https://cdn.sofifa.net/players/238/794/25_120.png', 'LW'),
('Brahim Diáz', 'https://cdn.sofifa.net/players/231/410/25_120.png', 'LW'),
('Karim Benzema', 'https://cdn.sofifa.net/players/165/153/25_120.png', 'ST'),
('Erling Haaland', 'https://cdn.sofifa.net/players/239/085/25_120.png', 'ST'),
('NGolo Kanté', 'https://cdn.sofifa.net/players/215/914/25_120.png', 'CDM'),
('Alphonso Davies', 'https://cdn.sofifa.net/players/234/396/25_120.png', 'LB'),
('Yassine Bounou', 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK'),
('Bruno Fernandes', 'https://cdn.sofifa.net/players/212/198/25_120.png', 'CM'),
('Jadon Sancho', 'https://cdn.sofifa.net/players/233/049/25_120.pn', 'LW'),
('Arnold', 'https://cdn.sofifa.net/players/231/281/25_120.png', 'RB'),
('Achraf Hakimi', 'https://cdn.sofifa.net/players/235/212/25_120.png', 'RB'),
('En-Nesyri', 'https://cdn.sofifa.net/players/235/410/25_120.png', 'ST'),
('Mazraoui', 'https://cdn.sofifa.net/players/236/401/25_120.png', 'LB'),
('Saibari', 'https://cdn.sofifa.net/players/259/480/25_120.png', 'CM'),
('Donnarumma', 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK');

INSERT INTO club (name, logo_url)
VALUES
("Paris Saint-Germain", "https://cdn.sofifa.net/meta/team/591/120.png"),
('PSV', 'https://cdn.sofifa.net/meta/team/682/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
('Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png');

INSERT INTO nationalites (name, flag_url)
VALUES
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Italy', 'https://cdn.sofifa.net/flags/it.png');

INSERT INTO STQ (Rating ,pace, shooting, passing, defending, dribling, physical) VALUES 
(85,85, 92, 91, 35, 95, 65),
(85,84, 94, 82, 34, 87, 77),
(85,74, 86, 93, 64, 88, 78),
(85,75, 60, 70, 92, 72, 86),
(85,82, 55, 73, 86, 70, 86),
(85,91, 83, 86, 37, 94, 61),
(85,97, 89, 80, 39, 92, 77),
(85,93, 87, 81, 45, 90, 75),
(85,70, 75, 88, 84, 84, 81),
(85,89, 90, 78, 92, 50, 88),
(85,74, 78, 89, 72, 90, 65),
(85,91, 88, 85, 39, 94, 61),
(85,85, 74, 78, 31, 85, 56),
(85,81, 82, 77, 86, 38, 83),
(85,88, 84, 75, 90, 50, 85);


INSERT INTO STQ_GK (Rating, diving, handling, kicking, reflexes, speed, positioning) VALUES 
(85, 89, 90, 78, 92, 50, 88),
(85, 81, 82, 77, 86, 38, 83),
(85, 88, 84, 75, 90, 50, 85);



SHOW TABLES;
SELECT * FROM nationalites ;

