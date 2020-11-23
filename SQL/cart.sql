USE `merchandise`;

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`UserID` int NOT NULL DEFAULT '0',
	`ProductID` int NOT NULL DEFAULT '0',
	PRIMARY KEY (`ID`),
	FOREIGN KEY (`UserID`) REFERENCES `account` (`ID`),
	FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
