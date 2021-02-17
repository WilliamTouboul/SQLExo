//PARTIE1
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1
mysql> CREATE DATABASE languages;
Query OK, 1 row affected (0.00 sec)

//ex2
mysql> CREATE DATABASE webDevelopment CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex3
mysql> CREATE DATABASE IF NOT EXISTS frameworks CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex4
mysql> CREATE DATABASE IF NOT EXISTS languages CHARACTER SET utf8;
Query OK, 1 row affected, 1 warning (0.00 sec)

//ex5
mysql> DROP DATABASE languages
    -> ;
Query OK, 0 rows affected (0.01 sec)

//ex6
mysql> DROP DATABASE IF EXISTS frameworks;
Query OK, 0 rows affected (0.00 sec)

//ex7
mysql> DROP DATABASE IF EXISTS languages;
Query OK, 0 rows affected, 1 warning (0.00 sec)

//PARTIE2
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1
mysql> USE webdevelopment;
Database changed
mysql> CREATE TABLE languages (id INT PRIMARY KEY AUTO_INCREMENT, languages VARCHAR(100));
Query OK, 0 rows affected (0.01 sec)

//ex2
mysql> CREATE TABLE tool (id INT PRIMARY KEY AUTO_INCREMENT, tool VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)

//ex3
mysql> CREATE TABLE frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)

//ex4
mysql> CREATE TABLE libraries (id INT PRIMARY KEY AUTO_INCREMENT, library VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)

//ex5
mysql> CREATE TABLE ide (id INT PRIMARY KEY AUTO_INCREMENT, ideName VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)

//ex6
mysql> CREATE TABLE IF NOT EXISTS frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected, 1 warning (0.00 sec)

//ex7
mysql> DROP TABLE IF EXISTS tool;
Query OK, 0 rows affected (0.00 sec)

//ex8
mysql> DROP TABLE libraries;
Query OK, 0 rows affected (0.00 sec)

//ex9
mysql> DROP TABLE ide;
Query OK, 0 rows affected (0.00 sec)

//TP
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


