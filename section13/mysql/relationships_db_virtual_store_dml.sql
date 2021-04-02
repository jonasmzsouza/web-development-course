INSERT INTO 
	tb_product(nm_product, vl_product)
VALUES
	('Dell Inspiron Ultra Thin Intel Core i7 Notebook, 16GB RAM and 240GB SSD', 3500.00)
;

INSERT INTO 
	tb_product(nm_product, vl_product)
VALUES
	('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrated', 1475.54)
;

INSERT INTO 
	tb_product(nm_product, vl_product)
VALUES
	('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi 13MP Camera', 629.99)
;


INSERT INTO 
	tb_technical_description(id_product, ds_technical_descriptions)
VALUES
	(1, 'The new Inspiron Dell offers a sleek design and infinite display that expands your senses while maintaining sophistication and compact measurements ...')
;

INSERT INTO 
	tb_technical_description(id_product, ds_technical_descriptions)
VALUES
	(2, 'The Samsung Smart TV has a 40 "screen and offers Full HD resolution, images twice as good as standard HD TVs ...')
;

INSERT INTO 
	tb_technical_description(id_product, ds_technical_descriptions)
VALUES
	(3, 'Get out of sameness. The LG smartphone is more fun, fast, easy, full of selfies and with an incredible 5.3 "HD screen ...')
;


INSERT INTO
	tb_image(id_product, url_image)
VALUES
	(1, 'notebook_1.jpg'),
	(1, 'notebook_2.jpg'),
	(1, 'notebook_3.jpg')
;

INSERT INTO
	tb_image(id_product, url_image)
VALUES
	(2, 'smarttv_1.jpg'),
	(2, 'smarttv_3.jpg')
;

INSERT INTO
	tb_image(id_product, url_image)
VALUES
	(3, 'smartphone_1.jpg')
;


INSERT INTO
	tb_customer(nm_customer, nr_age)
VALUES
	('Jonas', 32)
;

INSERT INTO
	tb_order(id_customer)
VALUES
	(1)
;

INSERT INTO
	tb_order_product(id_order, id_product)
VALUES
	(1, 2)
;

INSERT INTO
	tb_order_product(id_order, id_product)
VALUES
	(1, 3)
;

INSERT INTO
	tb_order(id_customer)
VALUES
	(1)
;

INSERT INTO
	tb_order_product(id_order, id_product)
VALUES
	(2, 3)
;

INSERT INTO
	tb_customer(nm_customer, nr_age)
VALUES
	('John', 30)
;

INSERT INTO
	tb_order(id_customer)
VALUES
	(2)
;

INSERT INTO
	tb_order_product(id_order, id_product)
VALUES
	(3, 1)
;

INSERT INTO 
	tb_product(nm_product, vl_product)
VALUES
	('Seagate Expansion 1TB USB 3.0 Portable External Hard Drive', 274.90)
;