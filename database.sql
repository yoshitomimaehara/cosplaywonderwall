CREATE DATABASE cosplaywonderwall;

USE cosplaywonderwall;

CREATE TABLE login(
  username VARCHAR(100),
  password VARCHAR(100) NOT NULL
)ENGINE = INNODB;

CREATE TABLE profile(
  idProfile VARCHAR(100),
  nickname  VARCHAR(100) NOT NULL,
  facebook  VARCHAR(100),
  twitter   VARCHAR(100),
  instagram VARCHAR(100),
  birthday  CHAR(5),
  ask VARCHAR(100),
  username VARCHAR(100) NOT NULL,
  CONSTRAINT pk_profile
  PRIMARY KEY(idProfile),
  CONSTRAINT fk_user
  FOREIGN KEY(username)
  REFERENCES login(username)
)ENGINE = INNODB;