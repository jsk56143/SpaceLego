CREATE DATABASE `data_credit_card` DEFAULT CHARACTER SET utf8mb4;

USE `data_credit_card`;

DROP TABLE IF EXISTS `creditCard`;
CREATE TABLE `creditCard` (
	`CreditCardNo` char(16) NOT NULL DEFAULT '',
	`Amount` decimal (5,2) NOT NULL DEFAULT '',
	PRIMARY KEY (`CreditCardNo`),	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
INSERT INTO `data_credit_card` VALUES (98456723401349761, 1000.00);
INSERT INTO `data_credit_card` VALUES (001122334455667788, 500.00);
INSERT INTO `data_credit_card` VALUES (1234567890254678, 100.00);

set autocommit=@old_autocommit;