--
-- LEFT JOIN
--
SELECT
	*
FROM
	tb_customer LEFT JOIN tb_order ON (tb_customer.id_customer = tb_order.id_customer)
;

SELECT
	*
FROM
	tb_product LEFT JOIN tb_image ON (tb_product.id_product = tb_image.id_product)
;


--
-- RIGHT JOIN
--
SELECT
	*
FROM
	tb_product RIGHT JOIN tb_image ON (tb_product.id_product = tb_image.id_product)
;

--
-- INNER JOIN
--
SELECT
	*
FROM
	tb_order INNER JOIN tb_order_product ON (tb_order.id_order = tb_order_product.id_order)
	INNER JOIN tb_product ON (tb_order_product.id_product = tb_product.id_product)
;
