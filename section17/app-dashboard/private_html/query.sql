CREATE DATABASE dashboard COLLATE utf8_unicode_ci;

USE dashboard;

CREATE TABLE tb_sales(
	id_sale INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dt_sale DATETIME DEFAULT CURRENT_TIMESTAMP,
	vl_total_sale FLOAT(10,2) NOT NULL
);

CREATE TABLE tb_customers(
	id_customer INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	st_active_customer BOOLEAN DEFAULT true
);

CREATE TABLE tb_contacts(
	id_contact INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tp_contact INT NOT NULL
);

CREATE TABLE tb_expenses(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dt_expense DATETIME DEFAULT CURRENT_TIMESTAMP,
	vl_total_expense FLOAT(10,2) NOT NULL
);

INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-04-15', 150.20);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-04-16', 255.36);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-04-18', 70.95);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-05-01', 35.00);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-05-11', 2047.12);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-05-19', 122.85);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-05-23', 957.14);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-06-01', 333.55);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-06-02', 100.33);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-06-03', 1853.12);
INSERT INTO tb_sales(dt_sale, vl_total_sale)VALUES('2021-06-04', 47.47);

-- true/1 = active | false/0 = inactive
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(false);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(false);
INSERT INTO tb_customers(st_active_customer)VALUES(false);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(true);
INSERT INTO tb_customers(st_active_customer)VALUES(false);
INSERT INTO tb_customers(st_active_customer)VALUES(true);

-- 1 = complaint | 2 = suggestion | 3 = compliments
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(3);
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(3);
INSERT INTO tb_contacts(tp_contact)VALUES(2);
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(3);
INSERT INTO tb_contacts(tp_contact)VALUES(3);
INSERT INTO tb_contacts(tp_contact)VALUES(3);
INSERT INTO tb_contacts(tp_contact)VALUES(1);
INSERT INTO tb_contacts(tp_contact)VALUES(2);
INSERT INTO tb_contacts(tp_contact)VALUES(2);
INSERT INTO tb_contacts(tp_contact)VALUES(1);

INSERT INTO tb_expenses(dt_expense, vl_total_expense)VALUES('2021-04-20', 93.47);
INSERT INTO tb_expenses(dt_expense, vl_total_expense)VALUES('2021-05-01', 350.27);
INSERT INTO tb_expenses(dt_expense, vl_total_expense)VALUES('2021-05-04', 108.12);
INSERT INTO tb_expenses(dt_expense, vl_total_expense)VALUES('2021-05-20', 15.66);
INSERT INTO tb_expenses(dt_expense, vl_total_expense)VALUES('2021-06-03', 83.55);