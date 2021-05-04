CREATE DATABASE db_twitter_clone;

CREATE TABLE tb_user(
    id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nm_user VARCHAR(100) NOT NULL,
    ds_email VARCHAR(150) NOT NULL,
    ds_password VARCHAR(32) NOT NULL
);

CREATE TABLE tb_tweet(
    id_tweet INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    ds_tweet VARCHAR(140) NOT NULL,
    dt_tweet DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_user_follower(
    id_user_followers INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_user_following INT NOT NULL
);