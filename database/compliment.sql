CREATE DATABASE `survey`;
USE survey;


CREATE TABLE `compliment_get`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `classfellow_name` VARCHAR(100) NOT NULL,
    `message` VARCHAR(1000) NOT NULL,
    PRIMARY KEY(id)
) AUTO_INCREMENT = 1;


CREATE TABLE `users`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `password` VARCHAR(200) NOT NULL,
    `user_type` VARCHAR(50) NOT NULL DEFAULT 'user',
    PRIMARY KEY (id)
) AUTO_INCREMENT = 1;


-- password 4e0f2a10acead1fa2c5252c52c412b49 === Ali Raza Mujahid 
INSERT INTO users (first_name, last_name, email, password, user_type) VALUES ('Ali Raza', 'Mujahid', 'razadeveloper816@gmail.com', '4e0f2a10acead1fa2c5252c52c412b49', 'admin');