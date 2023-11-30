CREATE TABLE tb_golongan (
	gol_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	gol_kode VARCHAR(10) NOT NULL,
	gol_nama VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(gol_id),
	UNIQUE KEY(gol_kode)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) DEFAULT NULL,
	user_alamat TEXT,
	user_hp VARCHAR(25),
	user_pos VARCHAR(5),
	user_role TINYINT(2),
	user_aktif TINYINT(2),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);
CREATE TABLE tb_pelanggan (
	pel_id INT(11) NOT NULL AUTO_INCREMENT,
	pel_id_gol TINYINT(3) NOT NULL,
	pel_no VARCHAR(20) NOT NULL,
	pel_nama VARCHAR(50),
	pel_alamat TEXT,
	pel_hp VARCHAR(20),
	pel_ktp VARCHAR(50),
	pel_seri VARCHAR(50),
	pel_meteran INT(11),
	pel_aktif ENUM('Y','N'),
	pel_id_user INT(11),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pel_id),
	UNIQUE KEY(pel_no),
	FOREIGN KEY (pel_id_gol) REFERENCES tb_golongan(gol_id),
	 FOREIGN KEY (`pel_id_user`) REFERENCES `tb_users`(`user_id`)
);



INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktif`, `created_at`, `updated_at`) VALUES (NULL, 'admin1@gmail.com', PASSWORD('admin'), 'Administrator', 'Berastagi', '0812', '1', '1', '1', current_timestamp(), NULL);