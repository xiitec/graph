-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: graph
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `employment`
--

DROP TABLE IF EXISTS `employment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employment` (
  `date` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `labour_force` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employmentcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employment`
--

LOCK TABLES `employment` WRITE;
/*!40000 ALTER TABLE `employment` DISABLE KEYS */;
INSERT INTO `employment` VALUES (5,25987,17430,1,''),(6,26020,17474,2,''),(6,26044,17456,3,''),(6,26071,17508,4,''),(6,26100,17532,5,''),(6,26136,17588,6,''),(6,26169,17577,7,''),(6,26197,17642,8,''),(6,26233,17630,9,''),(6,26266,17636,10,''),(6,26299,17641,11,''),(6,26330,17687,12,''),(6,26358,17716,13,''),(7,26392,17826,14,''),(7,26415,17828,15,''),(7,26442,17893,16,''),(7,26476,17890,17,''),(7,26505,17886,18,''),(7,26534,17924,19,''),(7,26570,17928,20,''),(7,26600,17948,21,''),(7,26632,17977,22,''),(7,26663,18029,23,''),(7,26694,18097,24,''),(7,26720,18090,25,''),(8,26752,18110,26,''),(8,26775,18159,27,''),(8,26803,18216,28,''),(8,26839,18240,29,''),(8,26871,18262,30,''),(8,26911,18264,31,''),(8,26943,18189,32,''),(8,26974,18212,33,''),(8,27013,18326,34,''),(8,27044,18356,35,''),(8,27073,18307,36,''),(8,27099,18320,37,''),(9,27128,18292,38,''),(9,27161,18315,39,''),(9,27188,18295,40,''),(9,27218,18339,41,''),(9,27250,18381,42,''),(9,27292,18417,43,''),(9,27326,18363,44,''),(9,27358,18412,45,''),(9,27402,18388,46,''),(9,27433,18382,47,''),(9,27463,18448,48,''),(9,27491,18439,49,''),(10,27522,18456,50,''),(10,27556,18465,51,''),(10,27585,18478,52,''),(10,27618,18570,53,''),(10,27652,18603,54,''),(10,27697,18665,55,''),(10,27735,18674,56,''),(10,27780,18727,57,''),(10,27810,18703,58,''),(10,27840,18698,59,''),(10,27869,18655,60,''),(10,27894,18674,61,'');
/*!40000 ALTER TABLE `employment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `resetkey` varchar(128) DEFAULT NULL COMMENT 'MD5 reset value',
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test1','test@test.com',0,'',''),(2,'ssdfsdf','dan@test.com',0,'',''),(3,'dddfdsfdsfdddfdsfdsfdddfdsfdsfdddfdsfdsfdddfd','',1,'',''),(4,'sdfsdf','',0,NULL,''),(5,'dfg','dfg@df.com',0,NULL,''),(6,'das','dan@test.com',0,NULL,''),(7,'dasd','dan@tesh.com',0,NULL,''),(8,'bobby','bob@bob.com',1,NULL,'123'),(9,'tes','dan@tedst.com',1,NULL,'ddd'),(10,'dasd','dan@tddedst.com',1,NULL,'ddd'),(11,'f22','ff@cc.com',1,NULL,'3049a1f0f1c808cdaa4fbed0e01649b1'),(12,'ddd','dan@dan.com',1,NULL,'202cb962ac59075b964b07152d234b70'),(13,'test','111test@test.com',1,NULL,'698d51a19d8a121ce581499d7b701668'),(14,'fff','fff@fff.com',1,NULL,'343d9040a671c45832ee5381860e2996');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-17 11:21:33
