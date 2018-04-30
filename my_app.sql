CREATE DATABASE IF NOT EXISTS my_app;

CREATE USER IF NOT EXISTS 'my_app'@'localhost' IDENTIFIED BY 'my_app';

GRANT DELETE, INSERT, SELECT, UPDATE ON my_app.* TO 'my_app'@'localhost';
FLUSH PRIVILEGES;

USE my_app;

CREATE TABLE IF NOT EXISTS person (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
type INT(1) UNSIGNED NOT NULL DEFAULT 0,
is_active TINYINT(1) NOT NULL DEFAULT 1
);

INSERT INTO person (username, password, type) VALUES ('admin', MD5('admin'), 1);