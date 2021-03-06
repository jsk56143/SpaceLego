CREATE DATABASE IF NOT EXISTS `merchandise` DEFAULT CHARACTER SET utf8mb4;

USE `merchandise`;

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`Name` char(60) NOT NULL DEFAULT '',
	`Price` decimal(5,2) NOT NULL DEFAULT '0',
	`Size` char(1) NOT NULL DEFAULT '',
	`Image` char(80) NOT NULL DEFAULT '',
	`Theme` char(20) NOT NULL DEFAULT '',
	PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

set autocommit=0;
INSERT INTO `product` VALUES (1, 'Squidman Escape', 10.00, 'S', 'https://images.brickset.com/sets/AdditionalImages/5969-1/5969-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (2, 'Freeze Ray Frenzy', 20.00, 'S', 'https://images.brickset.com/sets/AdditionalImages/5970-1/5970-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (3, 'Gold Heist', 45.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/5971-1/5971-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (4, 'Hyperspeed Pursuit', 70.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/5973-1/5973-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (5, 'Undercover Cruiser', 50.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/5983-1/5983-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (6, 'Galactic Enforcer', 130.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/5974-1/5974-0000-xx-23-1.jpg', 'Space Police');
INSERT INTO `product` VALUES (7, 'Alien Jet', 10.00, 'S', 'https://images.brickset.com/sets/large/5617-1.jpg?200712310227', 'Mars Mission');
INSERT INTO `product` VALUES (8, 'MT-21 Mobile Mining Unit', 45.00, 'M', 'https://images.brickset.com/sets/large/7646-1.jpg?200805090103', 'Mars Mission');
INSERT INTO `product` VALUES (9, 'ETX Alien Infiltrator', 65.00, 'M', 'https://images.brickset.com/sets/images/7648-1.jpg?200712060152', 'Mars Mission');
INSERT INTO `product` VALUES (10, 'MX-41 Switch Fighter', 95.00, 'M', 'https://images.brickset.com/sets/images/7647-1.jpg?200712060152', 'Mars Mission');
INSERT INTO `product` VALUES (11, 'MB-01 Eagle Command Base', 180.00, 'L', 'https://images.brickset.com/sets/small/7649-1.jpg?200805090315', 'Mars Mission');
INSERT INTO `product` VALUES (12, 'MX-81 Hypersonic Operations Aircraft', 200.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/7644-1/7644-0000-xx-23-1.jpg', 'Mars Mission');
INSERT INTO `product` VALUES (13, 'Mini Mech', 6.00, 'S', 'https://images.brickset.com/sets/images/30230-1.jpg?201212020705', 'Galaxy Squad');
INSERT INTO `product` VALUES (14, 'Space Insectoid', 10.00, 'S', 'https://images.brickset.com/sets/images/30231-1.jpg?201212020705', 'Galaxy Squad');
INSERT INTO `product` VALUES (15, 'Space Swarmer', 18.00, 'S', 'https://images.brickset.com/sets/AdditionalImages/70700-1/70700_alt1.jpg', 'Galaxy Squad');
INSERT INTO `product` VALUES (16, 'Swarm Interceptor', 36.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/70701-1/70701_alt1.jpg', 'Galaxy Squad');
INSERT INTO `product` VALUES (17, 'Hive Crawler', 62.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/70708-1/70708_alt1.jpg', 'Galaxy Squad');
INSERT INTO `product` VALUES (18, 'Galactic Titan', 127.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/70709-1/70709_alt1.jpg', 'Galaxy Squad');
INSERT INTO `product` VALUES (19, 'U-Wing Fighter', 5.00, 'S', 'https://images.brickset.com/sets/images/30496-1.jpg?201701030431', 'Star Wars');
INSERT INTO `product` VALUES (20, 'Droid Gunship', 70.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/75042-1/75042_alt1.jpg', 'Star Wars');
INSERT INTO `product` VALUES (21, 'Droid Tri-Fighter', 57.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/75044-1/75044_alt1.jpg', 'Star Wars');
INSERT INTO `product` VALUES (22, 'Sandcrawler', 383.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/75059-1/75059_alt1.jpg', 'Star Wars');
INSERT INTO `product` VALUES (23, 'Imperial Star Destroyer', 284.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/75055-1/75055_alt1.jpg', 'Star Wars');
INSERT INTO `product` VALUES (24, 'Death Star', 434.00, 'L', 'https://images.brickset.com/sets/images/10188-1.jpg?200807260532', 'Star Wars');
INSERT INTO `product` VALUES (25, 'Alien Striker', 11.00, 'S', 'https://images.brickset.com/sets/AdditionalImages/7049-1/7049_alt1.jpg', 'Alien Conquest');
INSERT INTO `product` VALUES (26, 'Alien Defender', 13.00, 'S', 'https://images.brickset.com/sets/AdditionalImages/7050-1/7050_alt1.jpg', 'Alien Conquest');
INSERT INTO `product` VALUES (27, 'Tripod Invader', 36.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/7051-1/7051_alt1.jpg', 'Alien Conquest');
INSERT INTO `product` VALUES (28, 'Jet-Copter Encounter', 39.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/7067-1/7067_alt1.jpg', 'Alien Conquest');
INSERT INTO `product` VALUES (29, 'Alien Mothership', 54.00, 'M', 'https://images.brickset.com/sets/AdditionalImages/7065-1/7065_alt1.jpg', 'Alien Conquest');
INSERT INTO `product` VALUES (30, 'Earth Defense HQ', 114.00, 'L', 'https://images.brickset.com/sets/AdditionalImages/7066-1/7066_alt1.jpg', 'Alien Conquest');
commit; 


SET autocommit=0;
