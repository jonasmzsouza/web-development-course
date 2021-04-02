-- 
-- DML - commands
-- 

UPDATE
	tb_student
SET
	nm_student = 'John'
WHERE
	id_student = 13
;

UPDATE
	tb_student
SET
	ds_interest = 'sport'
WHERE
	nr_age >= 34
;

UPDATE
	tb_student
SET
	nm_student = 'John', nr_age = 33, ds_email = 'john@gmail.com'
WHERE
	id_student = 13
;