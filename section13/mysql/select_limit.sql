-- 
-- DML - commands
--

--
-- SELECT: limiting return
--
SELECT
	*
FROM
	tb_student
LIMIT
	25
;

SELECT
	*
FROM
	tb_student
ORDER BY
	id_student DESC
LIMIT
	25
;

SELECT
	*
FROM
	tb_student
LIMIT
	4
OFFSET
	10
;

SELECT
	*
FROM
	tb_student
LIMIT
	10,  4
;