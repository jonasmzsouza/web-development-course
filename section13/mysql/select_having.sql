-- 
-- DML - commands
--

--
-- SELECT: HAVING (grouping filters)
--
SELECT
	nm_state, count(*) AS total_records_by_state
FROM
	tb_student
GROUP BY
	nm_state
HAVING
	total_records_by_state >= 5
;

SELECT
	nm_state, count(*) AS total_records_by_state
FROM
	tb_student
GROUP BY
	nm_state
HAVING
	nm_state IN('OK', 'Arizona')
;

SELECT
	nm_state, count(*) AS total_records_by_state
FROM
	tb_student
GROUP BY
	nm_state
HAVING
	nm_state IN('OK', 'Arizona') AND total_records_by_state > 4
;

SELECT
	nm_state, count(*) AS total_records_by_state
FROM
	tb_student
WHERE
	ds_interest != 'Song'
GROUP BY
	nm_state
HAVING
	total_records_by_state > 3
;