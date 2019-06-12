DROP TABLE IF EXISTS `pobyt`;
DROP TABLE IF EXISTS `hotel`;
DROP TABLE IF EXISTS `gosc`;
DROP TABLE IF EXISTS `uslugi`;
DROP TABLE IF EXISTS `kupno`;


CREATE TABLE `hotel`(
    `idh`          int(10) unsigned NOT NULL ,
    `p_id`         int(10) unsigned,
    `nazwa`        varchar(20),
    `miejsce`      varchar(20),
    `gwiazdki`     int(5) unsigned NOT NULL, 
Primary key(`idh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hotel` VALUES
  (1,5,'Gołębiewski','Wrocław', 5),
  (2,2,'Domowy','Milicz', 2),
  (3,3,'Na wzgórzu','Trzebnica', 4),
  (4,1,'U Basi','Wrocław', 1),
  (5,4,'Noclegowisko','Sułów', 3);




CREATE TABLE `uslugi` (
  `idu`       int(10) unsigned NOT NULL ,
  `h_id`      int(10) unsigned,
  `cena`      int(10) unsigned,
  `nazwa`      varchar(50),

PRIMARY KEY(`idu`),
KEY `h_id` (`h_id`),
CONSTRAINT `fk_uslugi_hotel` FOREIGN KEY (`h_id`) REFERENCES `hotel`  (`idh`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `uslugi` VALUES
(1,2,20,'masaz'),
(2,2,80,'jedzenie'),
(3,2,25,'pralnia'),
(4,2,150,'masaz'),
(5,2,45,'basen'),
(6,2,20,'sauna');
  



CREATE TABLE `gosc` (
  `idg`         int(10) unsigned NOT NULL,
  `telefon`     int(50) unsigned,
  `imie`        varchar(50),
  `nazwisko`    varchar(20),
  `pesel`       int(10) unsigned,
PRIMARY KEY (`idg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `gosc` VALUES
  (1, 12342232, 'Andrzej', 'Nowak' ,122034578),
  (2, 62538264, 'Anita', 'Nowak' ,827354611),
  (3, 92645372, 'Kacper', 'Kubiak' ,827351623),
  (4, 76520900, 'Janina', 'Olikiewicz' ,927354632),
  (5, 72536788, 'Zuzanna', 'Kowalska' ,272537191);



CREATE TABLE `pobyt` (
  `idp`          int(10) unsigned,
  `g_id`         int(10) unsigned,
  `h_id`         int(10) unsigned,
  `datapocz`     TIMESTAMP NULL,
  `datakon`      TIMESTAMP NULL,
  `nrpokoj`      int(4) unsigned NOT NULL,
  `liczba_osob`  int(20) unsigned NOT NULL,
  `oplacono`     varchar(20),
  `nrrezerwacja` int(10) unsigned,  
PRIMARY KEY(`idp`),
KEY `g_id` (`g_id`),
KEY `h_id` (`h_id`),
CONSTRAINT `fk_pobyt_gosc` FOREIGN KEY (`g_id`) REFERENCES `gosc`  (`idg`) ON UPDATE CASCADE,
CONSTRAINT `fk_pobyt_hotel` FOREIGN KEY (`h_id`) REFERENCES `hotel`  (`idh`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pobyt` VALUES
(1,2,1,'2018-03-02','2018-03-08',1,2,'tak',231),
(2,3,2,'2018-03-02','2018-03-05',8,2,'tak',136),
(3,4,3,'2018-03-05','2018-03-07',12,2,'tak',337),
(4,5,4,'2018-03-01','2018-03-09',4,2,'zaliczka',222),
(5,1,5,'2018-03-02','2018-03-10',6,2,'nie',156);



CREATE TABLE `kupno` (
  `idk`      int(10) unsigned NOT NULL ,
  `g_id`     int(10) unsigned,
  `u_id`     int(10) unsigned,

 PRIMARY KEY(`idk`),
 KEY `g_id` (`g_id`),
 KEY `u_id` (`u_id`),
 CONSTRAINT `fk_kupno_gosc` FOREIGN KEY (`g_id`) REFERENCES `gosc`  (`idg`) ON UPDATE CASCADE,
  CONSTRAINT `fk_kupno_uslugi` FOREIGN KEY (`u_id`) REFERENCES `uslugi`  (`idu`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `kupno` VALUES
(1,3,5),
(2,4,4),
(3,2,1),
(4,5,6),
(5,1,4);










  





 




