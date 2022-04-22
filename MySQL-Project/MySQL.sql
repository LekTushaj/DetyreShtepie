-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: fakulteti
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lendet`
--

DROP TABLE IF EXISTS `lendet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lendet` (
  `id_lendes` int NOT NULL AUTO_INCREMENT,
  `Emri_lendes` varchar(45) NOT NULL,
  `nr_kredive` int NOT NULL,
  PRIMARY KEY (`id_lendes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lendet`
--

LOCK TABLES `lendet` WRITE;
/*!40000 ALTER TABLE `lendet` DISABLE KEYS */;
INSERT INTO `lendet` VALUES (1,'Marketing',355),(2,'Kontabilitet',430),(3,'Menaxhment',400),(4,'Informatike',455);
/*!40000 ALTER TABLE `lendet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paraqitja_provimeve`
--

DROP TABLE IF EXISTS `paraqitja_provimeve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paraqitja_provimeve` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_provimeve` int NOT NULL,
  `emri_lendes` varchar(45) DEFAULT NULL,
  `nr_indexit` int NOT NULL,
  `emri_studentit` varchar(45) NOT NULL,
  `semestri` int NOT NULL,
  `data_provimit` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_par_provimeve_id_provimeve_idx` (`id_provimeve`),
  KEY `fk_par_provimeve_nr_indexit_idx` (`nr_indexit`),
  CONSTRAINT `fk_par_provimeve_id_provimeve` FOREIGN KEY (`id_provimeve`) REFERENCES `provimet` (`id_provimeve`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_par_provimeve_nr_indexit` FOREIGN KEY (`nr_indexit`) REFERENCES `studentet` (`nr_indexit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paraqitja_provimeve`
--

LOCK TABLES `paraqitja_provimeve` WRITE;
/*!40000 ALTER TABLE `paraqitja_provimeve` DISABLE KEYS */;
INSERT INTO `paraqitja_provimeve` VALUES (8,1,'Marketing',2,'Artana',1,'2022-02-02'),(9,2,'Kontabilitet',6,'Rezarta',1,'2022-02-05'),(10,3,'Menaxhment',6,'Rezarta',1,'2022-03-08'),(11,4,'Informatike',6,'Rezarta',1,'2022-03-10'),(12,1,'Marketing',3,'Kushtrim',1,'2022-02-02'),(13,1,'Marketing',5,'Qendresa',1,'2022-02-02'),(14,2,'Kontabilitet',3,'Kushtrim',1,'2022-02-05'),(15,1,'Marketing',10,'Zahir',1,'2022-02-02'),(16,3,'Menaxhment',2,'Artana',1,'2022-03-08'),(17,1,'Marketing',1,'Artan',1,'2022-02-02');
/*!40000 ALTER TABLE `paraqitja_provimeve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesoret`
--

DROP TABLE IF EXISTS `profesoret`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesoret` (
  `id_profesoreve` int NOT NULL AUTO_INCREMENT,
  `Emri` varchar(45) NOT NULL,
  `Mbiemri` varchar(45) NOT NULL,
  `Titulli_shkencor` varchar(45) NOT NULL,
  `Lenda_mesimore` varchar(45) NOT NULL,
  `Paga` float NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id_profesoreve`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesoret`
--

LOCK TABLES `profesoret` WRITE;
/*!40000 ALTER TABLE `profesoret` DISABLE KEYS */;
INSERT INTO `profesoret` VALUES (1,'Arben','Berisha','mr.sci','Kontabilitet',850,'Sheshi Nena tereze, Prishtine','arben@hotmail.com'),(2,'Anton','Krasniqi','dr.sci','Marketing',980,'Sheshi shatervan, Prizren','anton@yahoo.com'),(3,'Hysen','Ismaili','dr.sci','Informatike',1400,'Agim Ramadani,Prishtine','hysen@gmail.com'),(4,'Ragim','Gajraku','dr.sci','Menaxhment',1250,'Deshmoret,Tirane','ragim@hotmail.com');
/*!40000 ALTER TABLE `profesoret` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provimet`
--

DROP TABLE IF EXISTS `provimet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provimet` (
  `id_provimeve` int NOT NULL AUTO_INCREMENT,
  `id_salles` int NOT NULL,
  `emri_salles` varchar(45) NOT NULL,
  `id_lendes` int NOT NULL,
  `emri_lendes` varchar(45) NOT NULL,
  `id_profesoreve` int NOT NULL,
  `emri_profesorit` varchar(45) NOT NULL,
  `Semestri` tinyint NOT NULL,
  `Afati` varchar(45) NOT NULL,
  PRIMARY KEY (`id_provimeve`),
  KEY `fk_Provimet_id_salles_idx` (`id_salles`),
  KEY `fk_Provimet_id_lendes_idx` (`id_lendes`),
  KEY `fk_Provimet_id_profesoreve_idx` (`id_profesoreve`),
  CONSTRAINT `fk_Provimet_id_lendes` FOREIGN KEY (`id_lendes`) REFERENCES `lendet` (`id_lendes`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Provimet_id_profesoreve` FOREIGN KEY (`id_profesoreve`) REFERENCES `profesoret` (`id_profesoreve`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Provimet_id_salles` FOREIGN KEY (`id_salles`) REFERENCES `sallat` (`id_salles`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provimet`
--

LOCK TABLES `provimet` WRITE;
/*!40000 ALTER TABLE `provimet` DISABLE KEYS */;
INSERT INTO `provimet` VALUES (1,1,'salla 1',1,'Marketing',2,'Anton',1,'janar'),(2,2,'amfiteatri vogel',4,'Informatike',3,'Hysen',1,'janar'),(3,4,'salla 3',2,'Kontabilitet',1,'Arben',1,'janar'),(4,3,'salla 2',3,'Menaxhmet',4,'Ragim',1,'janar');
/*!40000 ALTER TABLE `provimet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sallat`
--

DROP TABLE IF EXISTS `sallat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sallat` (
  `id_salles` int NOT NULL AUTO_INCREMENT,
  `Tipi_salles` varchar(45) NOT NULL,
  `kapaciteti_uleseve` int NOT NULL,
  PRIMARY KEY (`id_salles`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sallat`
--

LOCK TABLES `sallat` WRITE;
/*!40000 ALTER TABLE `sallat` DISABLE KEYS */;
INSERT INTO `sallat` VALUES (1,'salla 1',15),(2,'amfiteatri vogel',50),(3,'salla 2',15),(4,'salla 3',15),(5,'amfiteatri madh',120);
/*!40000 ALTER TABLE `sallat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentet`
--

DROP TABLE IF EXISTS `studentet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentet` (
  `nr_indexit` int NOT NULL AUTO_INCREMENT,
  `Emri` varchar(45) NOT NULL,
  `Mbiemri` varchar(45) NOT NULL,
  `Ditelindja` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `viti_studimit` char(1) NOT NULL,
  PRIMARY KEY (`nr_indexit`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentet`
--

LOCK TABLES `studentet` WRITE;
/*!40000 ALTER TABLE `studentet` DISABLE KEYS */;
INSERT INTO `studentet` VALUES (1,'Artan','Fazliu','1983-03-03','artan@gmail.com','1'),(2,'Artana ','Fehmiu','1988-03-01','artana@hotmail.com','1'),(3,'Kushtrim','Gecaj','1990-11-12','kushtrim@yahoo.com','1'),(4,'Gani','Gashi','1991-12-05','gani@hotmail.com','1'),(5,'Qendresa','Hasani','1990-11-09','qendresa@gmail.com','1'),(6,'Rezarta','Peja','1991-09-01','rrezarta@gmail.com','1'),(7,'Agim','Hasani','1992-10-08','agim@gmail.com','1'),(8,'Arben','Kosumi','1995-04-09','arben@hotmail.com','1'),(9,'Zana','Rugova','1991-05-03','zana@gmail.com','1'),(10,'Zahir','Krasniqi','1990-08-03','zahir@hotmail.com','1'),(11,'Zanfina','Podrimaj','1996-07-06','zanfina@gmail.com','1'),(12,'Agron','Lalaj','1997-10-04','agron@gmail.com','1');
/*!40000 ALTER TABLE `studentet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-22 14:16:31
