Для работы необходимо создать БД на MySQL

CREATE DATABASE test_base;

CREATE TABLE `test_base`.`wherefrom` ( `id` INT NOT NULL AUTO_INCREMENT , `name` INT NOT NULL , `coordinates` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `test_base`.`destination` ( `id` INT NOT NULL AUTO_INCREMENT , `name` INT NOT NULL , `coordinates` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `test_base`.`orders` ( `id` INT NOT NULL AUTO_INCREMENT , `dest_id` INT NOT NULL , `wherefrom_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO destination(name, coordinates) VALUES ('lubyanka', 80);
INSERT INTO destination(name, coordinates) VALUES ('polyanka', 180);
INSERT INTO destination(name, coordinates) VALUES ('rublevka', 5000);
INSERT INTO wherefrom(name, coordinates) VALUES ('Red Square', 5000);

ALTER TABLE orders ADD CONSTRAINT fk_orders_destination FOREIGN KEY (dest_id) REFERENCES destination(id);
ALTER TABLE orders ADD CONSTRAINT fk_orders_wherefrom FOREIGN KEY (wherefrom_id) REFERENCES wherefrom(id);

INSERT INTO orders(dest_id, wherefrom_id) VALUES (1,1);
INSERT INTO orders(dest_id, wherefrom_id) VALUES (2,1);
INSERT INTO orders(dest_id, wherefrom_id) VALUES (3,1);
