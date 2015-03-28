CREATE DATABASE cosplaywonderwall;

USE cosplaywonderwall;

CREATE TABLE user(
username VARCHAR(100) primary key,
password VARCHAR(100)
);

CREATE TABLE profile(
idProfile VARCHAR(100) primary key,
name VARCHAR(100),
)