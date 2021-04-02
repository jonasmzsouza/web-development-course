-- 
-- DDL - commands
-- 

ALTER TABLE tb_course ADD COLUMN amount_hours VARCHAR(5) NOT NULL;

ALTER TABLE tb_course CHANGE amount_hours nr_duration INT(5) NOT NULL;

ALTER TABLE tb_course DROP nr_duration;

ALTER TABLE tb_course ADD COLUMN nr_duration INT(5) NULL;