DROP DATABASE tb_product;
DROP DATABASE tb_technical_description;
DROP DATABASE tb_image;
DROP DATABASE tb_customer;
DROP DATABASE tb_order;
DROP DATABASE tb_order_product;

DROP DATABASE db_virtual_store;

CREATE DATABASE db_virtual_store;

CREATE TABLE tb_product(
	id_product INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nm_product VARCHAR(200) NOT NULL,
	vl_product FLOAT(8,2) NOT NULL
);

CREATE TABLE tb_technical_description(
	id_technical_descriptions INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_product INT NOT NULL,
	ds_technical_descriptions TEXT NOT NULL,
	FOREIGN KEY(id_product) REFERENCES tb_products(id_product)
);

CREATE TABLE tb_image(
	id_image INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_product INT NOT NULL,
	FOREIGN KEY(id_product) REFERENCES tb_products(id_product),
	url_image VARCHAR(200) NOT NULL
);

CREATE TABLE tb_customer(
	id_customer INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nm_customer VARCHAR(100) NOT NULL,
	nr_age INT(3) NOT NULL
);

CREATE TABLE tb_order(
	id_order INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_customer INT NOT NULL,
	FOREIGN KEY(id_customer) REFERENCES tb_customer(id_customer),
	dt_Order DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_order_product(
	id_order INT NOT NULL,
	id_product INT NOT NULL,
	FOREIGN KEY(id_order) REFERENCES tb_order(id_order),
	FOREIGN KEY(id_product) REFERENCES tb_product(id_product)
);