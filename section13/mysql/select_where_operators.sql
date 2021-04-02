-- 
-- DML - commands
--

SELECT id_course, nm_course FROM tb_course;

SELECT * FROM tb_course;

--
-- Comparison Operator: = < <= > >=
--
SELECT 
	id_course, nm_course 
FROM
	tb_course
WHERE
	vl_investment < 600.00
;

SELECT
	*
FROM
	tb_student
WHERE
	ds_interest = 'Song'
;

--
-- Logical Operator: AND OR
--
SELECT
	id_course, nm_course
FROM
	tb_course
WHERE
	vl_investment < 600.00 OR nr_duration > 30
;


SELECT
	*
FROM
	tb_student
WHERE
	ds_interest = 'Song' AND nr_age > 3 AND nm_state = 'Arizona'
;

--
-- SELECT: BETWEEN Operator
--
SELECT
	*
FROM
	tb_student
WHERE
	nr_age BETWEEN 18 AND 25
;

--
-- SELECT: IN Operator
--
SELECT
	*
FROM
	tb_student
WHERE
	ds_interest IN ('Health', 'Informatics')
;


SELECT
	*
FROM
	tb_student
WHERE
	ds_interest NOT IN ('Health', 'Informatics')
;

--
-- SELECT: LIKE Operator 
-- wildcards % (character set) or _ (one or more characters)
--
SELECT
	*
FROM
	tb_student
WHERE
	nm_student LIKE '%e'
;

SELECT
	*
FROM
	tb_student
WHERE
	nm_student LIKE '%e%'
;

SELECT
	*
FROM
	tb_student
WHERE
	nm_student LIKE '___lie'
;

SELECT
	*
FROM
	tb_student
WHERE
	nm_student LIKE '%tt_'
;