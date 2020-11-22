USE `merchandise`;

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`UserName` char(50) NOT NULL DEFAULT '',
	`Password` char(50) NOT NULL DEFAULT '',
	`Email` char(60) NOT NULL DEFAULT '',
	`CreditCardNo` char(16) NOT NULL DEFAULT '',
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
INSERT INTO `account` VALUES (1, 'user1', 'pass1', 'user1@email.com', 9845672340134976);
INSERT INTO `account` VALUES (2, 'user2', 'pass2', 'user2@email.com', 001122334455667788);
INSERT INTO `account` VALUES (3, 'user3', 'pass3', 'user3@email.com', 1234567890254678);
commit;