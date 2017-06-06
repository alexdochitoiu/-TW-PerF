-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: perf
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anunturi`
--

DROP TABLE IF EXISTS `anunturi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anunturi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `idImobil` varchar(10) DEFAULT NULL,
  `idImagine` int(11) DEFAULT NULL,
  `titlu` varchar(75) DEFAULT NULL,
  `descriere` mediumtext,
  `pret` int(11) DEFAULT NULL,
  `tipTranzactie` varchar(45) DEFAULT NULL,
  `pretNegociabil` char(1) DEFAULT NULL,
  `dataPublicare` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `longitudine` double DEFAULT NULL,
  `latitudine` double DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `userID_idx` (`idUser`),
  KEY `imobilID_idx` (`idImobil`),
  KEY `imaginiID_idx` (`idImagine`),
  CONSTRAINT `imaginiID` FOREIGN KEY (`idImagine`) REFERENCES `imagini` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `imobilID` FOREIGN KEY (`idImobil`) REFERENCES `imobile` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userID` FOREIGN KEY (`idUser`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anunturi`
--

LOCK TABLES `anunturi` WRITE;
/*!40000 ALTER TABLE `anunturi` DISABLE KEYS */;
INSERT INTO `anunturi` VALUES (4,1,'T1',1,'Titlu anuntului, test 1','asdasdasdasda',10000,'De vanzare','1','2017-06-02 20:05:36',1,1);
/*!40000 ALTER TABLE `anunturi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-05 23:52:51
