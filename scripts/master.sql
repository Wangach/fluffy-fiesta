CREATE TABLE `f2users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `password` VARCHAR(1000) NOT NULL , `phone` INT NOT NULL , `alias` VARCHAR(100) NOT NULL , `favteam` VARCHAR(100) NOT NULL , `uno` INT NOT NULL , `login` INT NOT NULL DEFAULT '0' , `regdate` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;