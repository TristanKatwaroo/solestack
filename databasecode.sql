CREATE TABLE users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
	VALUES ('Tristan', 'Katwaroo', 'katwaroo.tristan@gmail.com', 'Admin', 'test123');
    
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
	VALUES ('John', 'Doe', 'jdoe@gmail.com', 'jdoe2', 'test1234');



CREATE TABLE catalog (
	c_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    c_category varchar(256) not null,
    c_brand varchar(256) not null,
	c_name varchar(256) not null,
	c_genders varchar(256) not null,
	c_sizes varchar(256) not null,
    c_release date not null
);

INSERT INTO catalog (c_category, c_brand, c_name, c_genders, c_sizes, c_release)
VALUES ('Sneakers', 'Adidas', 'adidas Yeezy Boost 350 V2 Black (Non-Reflective)', 'USMen', 'allUSMen', '2019-06-07');

INSERT INTO catalog (c_category, c_brand, c_name, c_genders, c_sizes, c_release)
VALUES ('Sneakers', 'Air Jordan', 'Jordan 1 Retro High Obsidian UNC', 'USMen', 'allUSMen', '2019-08-31');