DROP DATABASE IF EXISTS bibliotheque_php;

DROP USER IF EXISTS 'bibliothequePHP'@'localhost';

CREATE DATABASE bibliotheque_php;
CREATE USER 'bibliothequePHP'@'localhost' IDENTIFIED BY 'root';

GRANT ALL PRIVILEGES ON bibliotheque_php.* TO 'bibliothequePHP'@'localhost';


CREATE TABLE User(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  city VARCHAR(30) NOT NULL,
  city_code CHAR(5) NOT NULL,
  sex CHAR(1) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, email, city, city_code, sex)
VALUES
("mathis", "zia", "mathis@gmail.com", "Rodez", "12000", "H"),
("éric", "mathéo", "mathéo@gmail.com", "plaissance du touch", "31400", "H"),
("andreia", "timothé", "thimothéx@gmail.com", "fort-de france", "971", "H"),
("jean-auriel", "george", "cédric@gmail.com", "Montpelier", "34000", "F"),
("sebastien", "nathan", "aurelien@gmail.com", "lourdes", "41000", "H"),
("astory", "ilyan", "thiago-simon@gmail.com", "sevran", "93270", "H"),
("leo", "Sarah", "robinarthières@gmail.com", "Millau", "12100", "F"),
("clothes", "myke", "inshya@gmail.com", "toulouse", "31000", "H");

CREATE TABLE Book(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(50) NOT NULL,
  synopsis TEXT(1000) NOT NULL,
  release_date DATE NOT NULL,
  category VARCHAR(50),
  PRIMARY KEY (id),
  user_id INT UNSIGNED NULL,
  FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, synopsis, release_date, category)
VALUES
("Dragon ball", "Akira Toryiama", "synopsis", "1987-10-07", "manga"),
("L'heresie d'horus", "Dan Abnett", "synopsis", "2000-02-08", "roman"),
("Civil war", "Mark Millar", "synopsis", "2005-04-06", "comics"),
("Berserk", "Kenturo Miura", "synopsis", "1987-05-11", "manga"),
("Harry Potter", "J.K Rowling", "synopsis", "2005-10-04", "roman"),
("Game of thrones", "Georges.R Martin", "synopsis", "2003-03-01", "roman"),
("Akira", "Katsuhiro Otomo", "synopsis", "1986-02-01", "manga"),
("Seven Deadly Sins", "Nakaba Suzuki", "synopsis", "2005-03-05", "manga"),
("Rage", "Stephen King", "synopsis", "1980-05-04", "roman"),
("Hokuto no Ken", "Buronson, Tetsuo Hara", "synopsis", "1984-05-08", "manga"),
("Le faucheur", "David Gunn", "synopsis", "2010-02-04", "roman"),
("Carbone modifié", "Richard Morgan", "synopsis", "2012-04-03", "roman"),
("Le seigneur des anneaux", "J.R Tolkien", "synopsis", "1970-06-04", "roman"),
("Sun Ken Rock", "Boichi", "synopsis", "2014-02-03", "manga"),
("Saint Seiya", "Masami Kurumada", "synopsis", "1983-01-02", "roman"),
("The Boys", "Garth Ennis", "synopsis", "2011-04-06", "comics"),
("Preacher", " Garth Ennis", "synopsis", "1990-06-07", "comics"),
("Batman - La cour des hiboux", "Greg Capullo", "synopsis", "2015-03-04", "comics"),
("Bleach", "Tite Kubo", "synopsis", "2000-05-07", "manga"),
("Naruto", "Masashi Kishimoto", "synopsis", "2002-03-07", "manga"),
("L'attaque des titans", "Hajime Isayama", "synopsis", "2014-05-09", "manga");