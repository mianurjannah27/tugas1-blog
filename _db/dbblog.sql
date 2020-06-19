create table tb_category(
	cat_id INT(11) NOT NULL AUTO_INCREMENT,
	cat_name VARCHAR (100) NOT NULL,
	cat_text VARCHAR (100) NOT NULL,
	primary KEY (cat_id)
)
create table tb_post(
	post_id INT (11) NOT NULL AUTO_INCREMENT,
	post_date DATE NOT NULL,
	post_slug VARCHAR (25) NOT NULL,
	post_title VARCHAR (100) NOT NULL,
	post_text TEXT NOT NULL,
	post_cat_id INT(11),
	primary key (post_id),
	foreign key (post_cat_id) references tb_category(cat_id)
	);
create table tb_photos(
	photo_id INT (11) NOT NULL AUTO_INCREMENT,
	photo_date DATE NOT NULL,
	photo_title VARCHAR (100) NOT NULL,
	photo_text TEXT NOT NULL,
	photo_post_id INT(11),
	primary key (photo_id),
	foreign key (photo_post_id) references tb_post(post_id)
	);

create table tb_album(
	album_id INT (11) NOT NULL AUTO_INCREMENT,
	album_name VARCHAR (100) NOT NULL,
	album_text TEXT NOT NULL,
	album_photo_id INT(11),
	primary key (album_id),
	foreign key (album_photo_id) references tb_photos(photo_id)
	);