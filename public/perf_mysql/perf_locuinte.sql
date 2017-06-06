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
-- Table structure for table `locuinte`
--

DROP TABLE IF EXISTS `locuinte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locuinte` (
  `ID` varchar(10) NOT NULL COMMENT 'de forma "L___", va fi salvat in `imobile`',
  `tip` varchar(45) DEFAULT NULL,
  `suprafata` int(11) DEFAULT NULL,
  `localitate` varchar(45) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `compartimentare` varchar(45) DEFAULT NULL,
  `orientare` varchar(45) DEFAULT NULL,
  `anConstructie` int(11) DEFAULT NULL,
  `stare` varchar(45) DEFAULT NULL,
  `etaj` int(11) DEFAULT NULL,
  `totalEtaje` int(11) DEFAULT NULL,
  `numarBai` int(11) DEFAULT NULL,
  `centralaTermica` char(1) DEFAULT NULL,
  `balcon` char(1) DEFAULT NULL,
  `gradina` char(1) DEFAULT NULL,
  `mobilat` char(1) DEFAULT NULL,
  `parcare` char(1) DEFAULT NULL,
  `supravegheatVideo` char(1) DEFAULT NULL,
  `usaBlindata` char(1) DEFAULT NULL,
  `alarma` char(1) DEFAULT NULL,
  `detectorGaz` char(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `locID` FOREIGN KEY (`ID`) REFERENCES `imobile` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locuinte`
--

LOCK TABLES `locuinte` WRITE;
/*!40000 ALTER TABLE `locuinte` DISABLE KEYS */;
/*!40000 ALTER TABLE `locuinte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-05 23:52:50
