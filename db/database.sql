
/* suppression de la base de donnée */
DROP DATABASE IF EXISTS RESTO_DB_BWB;

/* Création de la base de données*/
CREATE DATABASE IF NOT EXISTS RESTO_DB_BWB;

/* Verification de la base données*/
USE RESTO_DB_BWB;

/* Création de la table USERS */
create table if not exists USERS(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(20),
    password VARCHAR(1024),
    email VARCHAR(320)
);

/* Création de la table CARTES */
create table if not exists CARTES(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_restaurant INT(20),
    nom VARCHAR(20),
    description VARCHAR(1024)
);

/* Création de la table RESTAURANT */
create table if not exists RESTAURANTS(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20),
    adresse VARCHAR(1024),
    tel VARCHAR(10),
    email VARCHAR(320)
);

/* Création de la table MENU */
create table if not exists MENUS(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_carte INT,
    nom VARCHAR(20),
    description VARCHAR(1024),
    url VARCHAR(1024)
);

/* Création de la table PLATS */
create table if not exists PLATS(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_menu INT,
    id_type INT,
    prix FLOAT(4,2),
    nom VARCHAR (20)
);

/* Création de la table TYPES_DE_PLATS */
create table if not exists TYPES_DE_PLATS(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20)
);


/* INSERTION DES DONNÉES - JEU DE TEST */

/* Ajout des entrée dans la table de type plats*/
insert into TYPES_DE_PLATS (nom) VALUES('entrée');
insert into TYPES_DE_PLATS (nom) VALUES('plat');
insert into TYPES_DE_PLATS (nom) VALUES('dessert');

/* Création de la table PLATS */
insert into PLATS (id_type,nom,prix) VALUES(1, 'salade cesar', 12.50);
insert into PLATS (id_type,nom,prix) VALUES(2, 'dolma', 19.90);
insert into PLATS (id_type,nom,prix) VALUES(3, 'tarte au pomme', 5.50);

/* Création de la table MENUS */
insert into MENUS (nom,description) VALUES('Les romains','petit test');

/* Mise a jour des plats avec l'id des menus (on a ajouté les plats au menu)*/
update PLATS SET id_menu = 1 where id = 1;
update PLATS SET id_menu = 1 where id = 2;
update PLATS SET id_menu = 1 where id = 3;