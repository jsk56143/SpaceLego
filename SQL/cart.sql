USE `merchandise`;

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`ProductCount` int NOT NULL DEFAULT '0',
	PRIMARY KEY (`ID`)	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
