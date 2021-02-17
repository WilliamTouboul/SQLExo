//PARTIE1
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1-Créer une base de données languages.
mysql> CREATE DATABASE languages;
Query OK, 1 row affected (0.00 sec)

//ex2-Créer une base de données webDevelopment avec l’encodage UTF-8.
mysql> CREATE DATABASE webDevelopment CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex3-Créer une base de données frameworks avec l’encodage UTF-8 si elle n’existe pas.
mysql> CREATE DATABASE IF NOT EXISTS frameworks CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex4-Créer une base de données languages avec l’encodage UTF-8 si elle n’existe pas.
mysql> CREATE DATABASE IF NOT EXISTS languages CHARACTER SET utf8;
Query OK, 1 row affected, 1 warning (0.00 sec)

//ex5-Supprimer la base de données languages.
mysql> DROP DATABASE languages;
Query OK, 0 rows affected (0.01 sec)

//ex6-Supprimer la base de données frameworks si elle existe.
mysql> DROP DATABASE IF EXISTS frameworks;
Query OK, 0 rows affected (0.00 sec)

//ex7-Supprimer la base de données languages si elle existe.
mysql> DROP DATABASE IF EXISTS languages;
Query OK, 0 rows affected, 1 warning (0.00 sec)

//PARTIE2
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1
//Dans la base de données webDevelopment, créer la table languages avec les colonnes :
//id (type INT, auto-incrémenté, clé primaire)
//language (type VARCHAR)

mysql> USE webdevelopment;
Database changed
mysql> CREATE TABLE languages (id INT PRIMARY KEY AUTO_INCREMENT, languages VARCHAR(100));
Query OK, 0 rows affected (0.01 sec)


//ex2
//Dans la base de données webDevelopment, créer la table tools avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//tool (type VARCHAR)

mysql> CREATE TABLE tool (id INT PRIMARY KEY AUTO_INCREMENT, tool VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex3
//Dans la base de données webDevelopment, créer la table frameworks avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//name (type VARCHAR)

mysql> CREATE TABLE frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex4
//Dans la base de données webDevelopment, créer la table libraries avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//library (type VARCHAR)

mysql> CREATE TABLE libraries (id INT PRIMARY KEY AUTO_INCREMENT, library VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex5
//Dans la base de données webDevelopment, créer la table ide avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//ideName (type VARCHAR)

mysql> CREATE TABLE ide (id INT PRIMARY KEY AUTO_INCREMENT, ideName VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex6
//Dans la base de données webDevelopment, créer, si elle n'existe pas, la table frameworks avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//name (type VARCHAR)

mysql> CREATE TABLE IF NOT EXISTS frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected, 1 warning (0.00 sec)

//ex7-Supprimer la table tools si elle existe.
mysql> DROP TABLE IF EXISTS tool;
Query OK, 0 rows affected (0.00 sec)

//ex8-Supprimer la table libraries.
mysql> DROP TABLE libraries;
Query OK, 0 rows affected (0.00 sec)

//ex9-Supprimer la table ide.
mysql> DROP TABLE ide;
Query OK, 0 rows affected (0.00 sec)

//TP-Creer une table.
mysql> CREATE DATABASE codex;
Query OK, 1 row affected (0.00 sec)

mysql> USE CODEX
Database changed

mysql> CREATE TABLE clients (
    -> id INT PRIMARY KEY AUTO_INCREMENT,
    -> lastname VARCHAR(100),
    -> firstname VARCHAR(100),
    -> birthDate DATE,
    -> address VARCHAR(100),
    -> firstPhoneNumber INT,
    -> secondPhoneNumber INT,
    -> mail VARCHAR(100));
Query OK, 0 rows affected (0.01 sec)

//PARTIE3
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1-Dans la base de données webDevelopment, ajouter à la table languages une colonne versions (VARCHAR).
mysql> use webdevelopment
Database changed
mysql> ALTER TABLE languages
    -> ADD versions VARCHAR(100);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex2-Dans la base de données webDevelopment, ajouter à la table frameworks une colonne version (INT).
mysql> ALTER TABLE frameworks
    -> ADD versions INT;
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex3-Dans la base de données webDevelopment, dans la table languages renommer la colonne versions en version.
mysql> ALTER TABLE frameworks
    -> CHANGE versions version INT;
Query OK, 0 rows affected (0.00 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0