-- 
-- DDL - commands
-- 

CREATE DATABASE db_web_course;

CREATE TABLE tb_courses(
	id_course INT NOT NULL,
	fl_img_course VARCHAR(100) NOT NULL,
	nm_course CHAR(50) NOT NULL,
	ds_summary TEXT NULL,
	dt_register DATETIME NOT NULL,
	st_active BOOLEAN DEFAULT true,
	vl_investment FLOAT(8,2) DEFAULT 0
);

CREATE TABLE tb_student (
	id_student INT NOT NULL,
	nm_student VARCHAR(255) NOT NULL,
	nr_age INT(2) NOT NULL,
 	ds_interest VARCHAR(255) NULL,
	ds_email VARCHAR(255) NULL,
	nm_state VARCHAR(50) NOT NULL
);
