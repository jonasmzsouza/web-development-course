-- 
-- DML - commands
--

--
-- SELECT: GROUP BY
--
SELECT
	*
FROM
	tb_student
GROUP BY
	ds_interest
;

SELECT
	ds_interest, count(*) AS total_by_interest
FROM
	tb_student
GROUP BY
	ds_interest
;

SELECT
	*
FROM
	tb_student
WHERE
	nm_state = 'Arizona'
;