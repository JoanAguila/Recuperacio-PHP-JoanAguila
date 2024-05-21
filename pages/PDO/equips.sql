DROP TABLE heroes;
DROP TABLE equips;
DROP TABLE jugadors;
DROP TABLE users;

CREATE TABLE equips (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    ciudad VARCHAR(100),
    estadio VARCHAR(100)
);


CREATE TABLE jugadors (
    id VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(100),
    edad VARCHAR(50),
    posicion VARCHAR(50),
    equipo_id INT,
    FOREIGN KEY (equipo_id) REFERENCES equips(id)
);


CREATE TABLE users (
    username VARCHAR(25) NOT NULL PRIMARY KEY,
    password varchar(50) NOT NULL
);

INSERT INTO users(username, password)
VALUES ("prova",md5("prova"));

INSERT INTO equips (nombre, ciudad, estadio) VALUES ('Barcelona', 'Barcelona', 'Camp Nou');
INSERT INTO equips (nombre, ciudad, estadio) VALUES ('Real Madrid', 'Madrid', 'Santiago Bernabéu');
INSERT INTO equips (nombre, ciudad, estadio) VALUES ('Manchester United', 'Manchester', 'Old Trafford');


INSERT INTO jugadors (id, nombre, edad, posicion, equipo_id) VALUES ('1', 'Lionel Messi', '34', 'Delantero', 1);
INSERT INTO jugadors (id, nombre, edad, posicion, equipo_id) VALUES ('2', 'Karim Benzema', '33', 'Delantero', 2);
INSERT INTO jugadors (id, nombre, edad, posicion, equipo_id) VALUES ('3', 'Marcus Rashford', '26', 'Delantero', 3);
