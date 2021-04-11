CREATE TABLE tb_status(
	id_status INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	ds_status VARCHAR(25) NOT NULL
);

INSERT INTO tb_status(ds_status)VALUES('pending');
INSERT INTO tb_status(ds_status)VALUES('accomplished');

CREATE TABLE tb_task(
	id_task INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_status INT NOT NULL DEFAULT 1,
	FOREIGN KEY(id_status) REFERENCES tb_status(id_status),
	ds_task TEXT NOT NULL,
	dt_register DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)