CREATE DATABASE  IF NOT EXISTS `unitrans` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `unitrans`;
-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: unitrans
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `comprovante`
--

DROP TABLE IF EXISTS `comprovante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comprovante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_estudante` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprovante`
--

LOCK TABLES `comprovante` WRITE;
/*!40000 ALTER TABLE `comprovante` DISABLE KEYS */;
INSERT INTO `comprovante` VALUES (1,1,'2015-01-01 00:00:00','asdfas',0),(2,1,'2015-02-01 00:00:00','asdfas',0),(4,1,'2016-09-10 00:00:00','asdfas',1);
/*!40000 ALTER TABLE `comprovante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudante`
--

DROP TABLE IF EXISTS `estudante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `rua` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_id_universidade` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `curso` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario_de_ida` time DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario_de_volta` time DEFAULT NULL,
  `foto` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudante`
--

LOCK TABLES `estudante` WRITE;
/*!40000 ALTER TABLE `estudante` DISABLE KEYS */;
INSERT INTO `estudante` VALUES (1,'nome','cpf','1994-01-15','rua','(34) 9144-5648','1','curso','login','asdf','03:30:00',12,'bairro','cidade','10:30:00',NULL),(2,'Laercio Lima','123','2016-09-03','Rua Isaac de Oliveira','(34) 9916-44679','1','Sistemas de InformaÃ§Ã£o','laercio','123','11:00:00',71,'sta monica','Uberlandia','01:00:00','81161ce810a9ae7f74fa3bda080e950e.jpg'),(3,'Laercio Lima','123','2016-09-03','Rua Isaac de Oliveira','(34) 9916-44679','1','Sistemas de InformaÃ§Ã£o','laercio','123','11:00:00',71,'sta monica','Uberlandia','01:00:00','512fc01079a5da3ab2b593adc098c4fe.jpg'),(4,'Laercio Lima','123','2016-09-03','Rua Isaac de Oliveira','(34) 9916-44679','1','Sistemas de InformaÃ§Ã£o','laercio','123','11:00:00',71,'sta monica','Uberlandia','01:00:00','f88e6efd96704f076190eea37a7c6f2f.jpg'),(5,'Laercio Lima','123','2016-09-03','Rua Isaac de Oliveira','(34) 9916-44679','1','Sistemas de InformaÃ§Ã£o','laercio','123','11:00:00',71,'sta monica','Uberlandia','01:00:00','55608d5de4c431344cddd9d0ecb0c6f8.jpg');
/*!40000 ALTER TABLE `estudante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universidade`
--

DROP TABLE IF EXISTS `universidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '		',
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universidade`
--

LOCK TABLES `universidade` WRITE;
/*!40000 ALTER TABLE `universidade` DISABLE KEYS */;
INSERT INTO `universidade` VALUES (1,'UFU','Uberlandia'),(3,'IFTM','Uberlandia');
/*!40000 ALTER TABLE `universidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-28  0:17:03
