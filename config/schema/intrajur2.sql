
CREATE TABLE `companys` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`company_name` VARCHAR(255) NOT NULL,
	`description` TEXT,
	`cnpj` VARCHAR(14),
	`cpf` VARCHAR(11),
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`role_name` VARCHAR(255) NOT NULL,
	`description` TEXT,
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`filial_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(150) NOT NULL,
	`password` VARCHAR(150) NOT NULL,
	`photo` VARCHAR(255),
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`role_id` INT NOT NULL,
	`company_id` INT NOT NULL,
	`filial_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `filials` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`filial_name` VARCHAR(255) NOT NULL,
	`description` TEXT,
	`matriz` BOOL NOT NULL,
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`company_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `clients` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`client_name` VARCHAR(255) NOT NULL,
	`razao_social` VARCHAR(255),
	`cpf` VARCHAR(11),
	`cnpj` VARCHAR(14),
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`user_id` INT NOT NULL,
	`filial_id` INT NOT NULL,
	`company_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `modules` (
	`id` INT AUTO_INCREMENT,
	`module_name` VARCHAR(150) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `screen` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`screenName` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `permissions` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`permissions` SMALLINT NOT NULL,
	`roles_id` INT NOT NULL,
	`permissions_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `filials_modules` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`filial_id` INT NOT NULL,
	`module_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `representatives` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`representatives_name` VARCHAR(255) NOT NULL,
	`type` ENUM('curador(a)','guardiã(o)','mãe','pai','procurador(a)','tutor(a)') NOT NULL,
	`client_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `adresses` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` ENUM('Albergue','Cobrança','Comercial','Residencial','Correspondência','Domiciliar') NOT NULL,
	`CEP` VARCHAR(8) NOT NULL,
	`address` VARCHAR(255) NOT NULL,
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`number` VARCHAR(50) NOT NULL DEFAULT 'SN',
	`state` ENUM('Acre-AC','Alagoas-AL','Amapá-AP','Amazonas-AM','Bahia-BA','Ceará-CE','Distrito Federal-DF',
		'Espírito Santo-ES','Goiás-GO','Maranhão-MA','Mato Grosso-MT','Mato Grosso do Sul-MS',
		'Minas Gerais-MG','Pará-PA','Paraíba-PB','Paraná-PR','Pernambuco-PE','Piauí-PI','Rio de Janeiro-RJ',
		'Rio Grande do Norte-RN','Rio Grande do Sul-RS','Rondônia-RO','Roraima-RR','Santa Catarina-SC',
		'São Paulo-SP','Sergipe-SE','Tocantins-TO') NOT NULL,
	`city` VARCHAR(150) NOT NULL,
	`neighborhood` VARCHAR(150) NOT NULL,
	`complement` VARCHAR(255),
	`client_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `phones` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(150) NOT NULL ,
	PRIMARY KEY (`id`)
);

ALTER TABLE `roles` ADD CONSTRAINT `roles_fk0` FOREIGN KEY (`filial_id`) REFERENCES `filials`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk1` FOREIGN KEY (`company_id`) REFERENCES `companys`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk2` FOREIGN KEY (`filial_id`) REFERENCES `filials`(`id`);

ALTER TABLE `filials` ADD CONSTRAINT `filials_fk0` FOREIGN KEY (`company_id`) REFERENCES `companys`(`id`);

ALTER TABLE `clients` ADD CONSTRAINT `clients_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `clients` ADD CONSTRAINT `clients_fk1` FOREIGN KEY (`filial_id`) REFERENCES `filials`(`id`);

ALTER TABLE `clients` ADD CONSTRAINT `clients_fk2` FOREIGN KEY (`company_id`) REFERENCES `companys`(`id`);

ALTER TABLE `permissions` ADD CONSTRAINT `permissions_fk0` FOREIGN KEY (`roles_id`) REFERENCES `roles`(`id`);

ALTER TABLE `permissions` ADD CONSTRAINT `permissions_fk1` FOREIGN KEY (`permissions_id`) REFERENCES `screen`(`id`);

ALTER TABLE `filials_modules` ADD CONSTRAINT `filials_modules_fk0` FOREIGN KEY (`filial_id`) REFERENCES `filials`(`id`);

ALTER TABLE `filials_modules` ADD CONSTRAINT `filials_modules_fk1` FOREIGN KEY (`module_id`) REFERENCES `modules`(`id`);

ALTER TABLE `representatives` ADD CONSTRAINT `representatives_fk0` FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`);

ALTER TABLE `adresses` ADD CONSTRAINT `adresses_fk0` FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`);

