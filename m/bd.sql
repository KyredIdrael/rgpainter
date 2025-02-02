CREATE DATABASE bd_rgpainter;
USE bd_rgpainter;

CREATE TABLE rgp_tb_user(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(64) NOT NULL, UNIQUE (username),
    password char(128) NOT NULL
);

CREATE TABLE rgp_tb_image(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(96) NOT NULL, UNIQUE (name),
    imgpath VARCHAR(256) NOT NULL,
    category char(10) NOT NULL
)
