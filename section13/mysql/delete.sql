-- 
-- DML - commands
-- 

DELETE FROM
	tb_student
WHERE
	id_student = 10
;

DELETE FROM
	tb_student
WHERE
	nr_age IN(18,24,30) AND ds_interest = 'Song'
;