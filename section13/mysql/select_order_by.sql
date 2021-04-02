-- 
-- DML - commands
--

--
-- SELECT: ORDER BY 
-- ASC (ascending) - DESC (descending)
--
SELECT
	*
FROM
	tb_student
WHERE
	nr_age BETWEEN 18 and 60
ORDER BY
	nm_student ASC
;

SELECT
	*
FROM
	tb_student
WHERE
	nr_age BETWEEN 18 and 60
ORDER BY
	nm_student ASC, nr_age DESC, nm_state ASC
;