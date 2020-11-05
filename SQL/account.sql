CREATE DATABASE `data_account` DEFAULT CHARACTER SET utf8mb4;

USE `data_account`;

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`UserName` char(30) NOT NULL DEFAULT '',
	`Password` char(30) NOT NULL DEFAULT '0',
	`Email` char(60) NOT NULL DEFAULT '',
	`Image` char(80) NOT NULL DEFAULT '',
	`CreditCardNo` char(16) NOT NULL DEFAULT '',
	PRIMARY KEY (`ID`),	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
INSERT INTO `data_account` VALUES (1, `user1`, `pass1`, `user1@email.com`, `https://i.ytimg.com/vi/DrwYZCN2__g/maxresdefault.jpg`, 9845672340134976);
INSERT INTO `data_account` VALUES (2, `user2`, `pass2`, `user2@email.com`, `https://i.imgur.com/YCkjigb.png`, 001122334455667788);
INSERT INTO `data_account` VALUES (3, `user3`, `pass3`, `user3@email.com`, `https://i.pinimg.com/564x/e2/ed/ba/e2edbaaccf19f5a77748044163c6ec94.jpg`, 1234567890254678);
commit;
