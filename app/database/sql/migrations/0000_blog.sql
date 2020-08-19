-- ОСНОВНАЯ ТАБЛИЦА С ПОСТАМИ --
CREATE TABLE articles (
    id TINYINT unsigned NOT NULL auto_increment,
    title VARCHAR(255) NOT NULL, 
    content TEXT NOT NULL,
    date TIMESTAMP(6) NOT NULL, 
    image_name VARCHAR(255),
    primary key (id)
); 