CREATE DATABASE 
 ;
USE ShiMatsch ;

CREATE TABLE nationalites (
id INT PRIMARY KEY AUTO_INCREMENT ,
name VARCHAR(50),
continent VARCHAR(50),
flag VARCHAR(255)
);


CREATE TABLE clubs (
id INT PRIMARY KEY AUTO_INCREMENT ,
name VARCHAR(50),
date_create DATE,
logo VARCHAR(255)
);

CREATE TABLE players(
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50),
photo_url VARCHAR(255),

position VARCHAR(10) CHECK ("GK","CB","LB","RB","CM","CMD","ST","LW","RW"),
Rating INT CHECK(Rating >=1 and Rating < 100),
pace INT CHECK(pace >=1 and pace < 100),
passing INT CHECK(passing >=1 and passing < 100),
shooting INT CHECK(shooting >=1 and shooting < 100),
dribling INT CHECK(dribling >=1 and dribling < 100),
definding INT CHECK(definding >=1 and definding < 100),
physical INT CHECK(physical >=1 and physical < 100),
speed INT CHECK(speed >=1 and speed < 100),
positioning INT CHECK(positioning >=1 and positioning < 100),
reflexes INT CHECK(reflexes >=1 and reflexes < 100),
kicking INT CHECK(kicking >=1 and kicking < 100),
handling INT CHECK(handling >=1 and handling < 100),
diving INT CHECK(diving >=1 and diving < 100),
id_nationalites INT, 
id_club INT,
FOREIGN KEY (id_nationalites) REFERENCES nationalites (id), 
FOREIGN KEY (id_club) REFERENCES club (id)
);

