-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: dersacom.com    Database: dersacom_pakal
-- ------------------------------------------------------
-- Server version	5.5.49-cll-lve

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
-- Table structure for table `cnbv_semanas_hombre`
--

DROP TABLE IF EXISTS `cnbv_semanas_hombre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cnbv_semanas_hombre` (
  `id_` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cnbv_semanas_hombre`
--

LOCK TABLES `cnbv_semanas_hombre` WRITE;
/*!40000 ALTER TABLE `cnbv_semanas_hombre` DISABLE KEYS */;
INSERT INTO `cnbv_semanas_hombre` VALUES (1,'Vacaciones','Vacaciones'),(2,'Asuetos','Asuetos'),(3,'Incapacidades, permisos e inasistencias','Incapacidades, permisos e inasistencias'),(4,'Capacitación','Capacitación'),(5,'Informes','Informes'),(6,'Vacantes','Vacantes'),(7,'planeacion, supervision y direccion','planeacion, supervision y direccion'),(8,'actividades que no reunen requisitos de una a','actividades que no reunen requisitos de una auditoria o revision'),(9,'juntas y consejos','juntas y consejos'),(10,'comites','comites'),(11,'actividades administrativas','actividades administrativas');
/*!40000 ALTER TABLE `cnbv_semanas_hombre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-06 10:15:16
