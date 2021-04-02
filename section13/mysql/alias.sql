SELECT
	*
FROM
	tb_product AS p LEFT JOIN tb_technical_description AS td ON (p.id_product = td.id_product)
;


SELECT
	p.id_product,
	p.nm_product,
	p.vl_product,
	td.ds_technical_description 
FROM
	tb_product AS p LEFT JOIN tb_technical_description AS td ON (p.id_product = td.id_product)
WHERE
	p.vl_product >= 500
ORDER BY
	p.vl_product ASC
;