db structure

name : db_tugasrancang
table name : tb_user

NAMA, VARCHAR (100) NULL YES
EMAIL, VARCHAR(100)
PASSWORD, VARCHAR(64)


CREATE TABLE `db_tugasrancang`.`levels` (`id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(65535) NOT NULL , `content` TEXT NOT NULL , `requirements` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
