-- 
-- DML - commands
--

--
-- SELECT: aggregation functions
--
SELECT
	MIN(vl_investment)
FROM
	tb_course
WHERE
	st_active = true
;

SELECT
	MAX(vl_investment)
FROM
	tb_course
WHERE
	st_active = true
;

SELECT
	AVG(vl_investment)
FROM
	tb_course
WHERE
	st_active = true
;

SELECT
	SUM(vl_investment)
FROM
	tb_course
WHERE
	st_active = true
;

SELECT
	count(*)
FROM
	tb_course
WHERE
	st_active = true
;