-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: skillerator
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `Company`
--

DROP TABLE IF EXISTS `Company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Company`
--

LOCK TABLES `Company` WRITE;
/*!40000 ALTER TABLE `Company` DISABLE KEYS */;
INSERT INTO `Company` VALUES (1,'Mayflower GmbH','Manhardtstrasse','Munich','www.mayflower.de'),(2,'Barff','Weinstrasse','Munich','www.barff.de'),(3,'triebawerke','leon','muc','annetrieba.de'),(4,'Rupprecht-Gymnasium','Albrechtstr.','muc','www.abc.de'),(5,'Triebawerke','Leonrodstrasse 34','80636 Muenchen','www.e-gestaltung.de');
/*!40000 ALTER TABLE `Company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate`
--

LOCK TABLES `certificate` WRITE;
/*!40000 ALTER TABLE `certificate` DISABLE KEYS */;
INSERT INTO `certificate` VALUES (1,'Zend Certificate Engineer','PHP advanced knowledge'),(2,'Mysql I','Oracle Mysql Cert Developer'),(3,'MySQL II','Oracle MySQL Cert Admin'),(4,'none','default value');
/*!40000 ALTER TABLE `certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goal`
--

DROP TABLE IF EXISTS `goal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5CEE44105FB14BA7` (`level_id`),
  KEY `IDX_5CEE441099223FFD` (`certificate_id`),
  CONSTRAINT `FK_5CEE44105FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  CONSTRAINT `FK_5CEE441099223FFD` FOREIGN KEY (`certificate_id`) REFERENCES `certificate` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goal`
--

LOCK TABLES `goal` WRITE;
/*!40000 ALTER TABLE `goal` DISABLE KEYS */;
INSERT INTO `goal` VALUES (1,2,4,'default'),(2,3,3,'testtest'),(3,3,1,'blub'),(4,4,1,'huhu'),(9,1,2,'dudu'),(10,4,1,'This will take some years'),(11,3,3,'dada'),(12,2,2,'Write your comment'),(13,2,4,'Write your comment'),(14,2,4,'Write your comment'),(15,3,2,'Write your comment'),(16,8,4,'Default goal'),(17,8,4,'Default goal'),(18,3,1,'Until 2013'),(19,8,4,'Write your comment'),(20,8,4,'Default goal'),(23,8,4,'Default goal'),(24,8,4,'Default goal'),(25,8,4,'Default goal'),(26,8,4,'Default goal'),(27,8,4,'Default goal'),(28,8,4,'Default goal'),(29,3,1,'Default goal'),(30,8,4,'Default goal'),(31,8,4,'Default goal'),(32,8,4,'Default goal'),(33,8,4,'Default goal'),(34,8,4,'Default goal'),(35,8,4,'Default goal'),(36,1,1,'Default goal for new user skill'),(37,1,1,'Default goal for new user skill'),(38,8,4,'Default goal'),(39,8,4,'Default goal'),(40,8,4,'Default goal'),(41,8,4,'Default goal'),(42,8,4,'Default goal for new user skill'),(43,1,2,'Default goal'),(44,4,3,'test with new goal'),(45,8,4,'Default goal'),(46,8,4,'Default goal'),(47,2,4,'Default goal'),(48,2,4,'Default goal'),(49,2,4,'Default goal'),(50,3,4,'Until summer 2013'),(51,2,4,'Default goal'),(52,2,3,'Default goal'),(53,8,4,'Default goal'),(54,8,4,'Default goal'),(55,8,4,'Default goal'),(56,8,4,'Default goal'),(57,8,4,'Default goal'),(58,8,4,'Default goal');
/*!40000 ALTER TABLE `goal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F06D397057698A6A` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'user','ROLE_USER'),(2,'admin','ROLE_ADMIN');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'Junior','Basic knowledge, few experience'),(2,'Developer','Profound knowledge and experience.'),(3,'Senior','Deep knowledge.'),(4,'Teacher','Shu Ha Ri highest level'),(8,'none','default value');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (1,'PHP','Embedded scripting Language.'),(2,'Ruby','Script language'),(3,'Java','OOP Language'),(4,'JavaScript','Script Language'),(5,'Apache','Webserver zxc'),(6,'Redis','Persistable cache with many functions'),(7,'Jenkins','CI/CD Management'),(8,'C','C is a functional language'),(9,'none','Default value'),(10,'Typo3','CMS'),(11,'Mysql','RDBMS persistance'),(12,'C++','statically typed, free-form, multi-paradigm, compiled, general-purpose programming language');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C4E0A61F979B1AD6` (`company_id`),
  CONSTRAINT `FK_C4E0A61F979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `Company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,1,'DLSi','King of the Mongo'),(2,2,'sendeasy','sendeasy');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'1071e17e4fd5c093112c92accd0b631303a58802','fdc1b017ebef946903d2188d1316f3e6',1,'admin','trieba@e-gestaltung.de'),(4,'04845a99305bef1e2a6a76e348d449b6a3fad852','bc93eee8269804193c0fd4f5d191ab69',1,'joseph','joseph@e-gestaltung.de'),(5,'0f538a79fc1efd7bdf1d1a2c4a30e49c6643ace2','1dd5f999dcb8f61abfcb198e266ce948',1,'ida','ida-marie@e-gestaltung.de'),(6,'879b4be46d70137692f6ff12ceff67a0f3f50d7a','aae8cb4f28719f12b7f1e89f2010558d',1,'micha','trieba@e-gestaltung.de'),(7,'acd3d77ef5288cfa5b854dbff67512c3fc6017bc','fee2e9bef266df01a1df7189f6e7323a',1,'Paul','paul.guhle@mayflower.de'),(8,'0d4658d739983616c24b16566058a851f5cf50cd','abb6909e6de525e62332aa7120561ccc',1,'johann','johann.hartmann@mayflower.de');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_company`
--

DROP TABLE IF EXISTS `user_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_company` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`company_id`),
  KEY `IDX_17B21745A76ED395` (`user_id`),
  KEY `IDX_17B21745979B1AD6` (`company_id`),
  CONSTRAINT `FK_17B21745979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `Company` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_17B21745A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_company`
--

LOCK TABLES `user_company` WRITE;
/*!40000 ALTER TABLE `user_company` DISABLE KEYS */;
INSERT INTO `user_company` VALUES (3,1),(3,2),(6,1),(7,1),(8,1);
/*!40000 ALTER TABLE `user_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_groups` (
  `user_id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`groups_id`),
  KEY `IDX_953F224DA76ED395` (`user_id`),
  KEY `IDX_953F224DF373DCF` (`groups_id`),
  CONSTRAINT `FK_953F224DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_953F224DF373DCF` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_groups`
--

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT INTO `user_groups` VALUES (3,1),(3,2),(4,1),(5,1),(6,1),(7,1),(8,1);
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_skill`
--

DROP TABLE IF EXISTS `user_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `certificate_id` int(11) DEFAULT NULL,
  `goal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BCFF1F2F667D1AFE` (`goal_id`),
  KEY `IDX_DAD698E07FF61858` (`skill_id`),
  KEY `IDX_DAD698E067B3B43D` (`user_id`),
  KEY `IDX_BCFF1F2F5FB14BA7` (`level_id`),
  KEY `IDX_BCFF1F2F99223FFD` (`certificate_id`),
  CONSTRAINT `FK_BCFF1F2F5FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  CONSTRAINT `FK_BCFF1F2F667D1AFE` FOREIGN KEY (`goal_id`) REFERENCES `goal` (`id`),
  CONSTRAINT `FK_BCFF1F2F99223FFD` FOREIGN KEY (`certificate_id`) REFERENCES `certificate` (`id`),
  CONSTRAINT `FK_DAD698E067B3B43D` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_DAD698E07FF61858` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_skill`
--

LOCK TABLES `user_skill` WRITE;
/*!40000 ALTER TABLE `user_skill` DISABLE KEYS */;
INSERT INTO `user_skill` VALUES (6,3,1,2,1,2),(12,3,11,1,4,14),(26,3,2,1,4,28),(44,4,1,1,1,49),(45,4,3,2,4,50),(46,6,1,4,4,51),(47,6,11,1,2,52),(48,7,3,3,4,53),(49,7,8,2,4,54),(50,7,12,2,4,55),(51,8,5,4,4,56),(52,8,11,4,4,57),(53,8,1,3,4,58);
/*!40000 ALTER TABLE `user_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_team`
--

DROP TABLE IF EXISTS `user_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_team` (
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`team_id`),
  KEY `IDX_BE61EAD6A76ED395` (`user_id`),
  KEY `IDX_BE61EAD6296CD8AE` (`team_id`),
  CONSTRAINT `FK_BE61EAD6296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_BE61EAD6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_team`
--

LOCK TABLES `user_team` WRITE;
/*!40000 ALTER TABLE `user_team` DISABLE KEYS */;
INSERT INTO `user_team` VALUES (3,1),(7,1);
/*!40000 ALTER TABLE `user_team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-07-15 22:12:50
