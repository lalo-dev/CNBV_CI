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
-- Table structure for table `bd_auditoria`
--

DROP TABLE IF EXISTS `bd_auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_auditoria` (
  `id_` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_puesto` varchar(10) DEFAULT NULL,
  `numero_expediente` int(10) DEFAULT NULL,
  `grado` varchar(15) DEFAULT NULL,
  `id_nombre_empleado` int(11) DEFAULT NULL COMMENT 'Este campo se obtiene de la tabla "cnbv_empleados_aii"',
  `id_cargo` int(11) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `coordenada` varchar(15) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `fehca_nacimiento` date DEFAULT NULL,
  `capacidades_tecnicas` text,
  `capacidades_gerenciales` text,
  `capacitacion_anual` varchar(45) DEFAULT NULL,
  `horas_capacitacion` int(11) DEFAULT NULL,
  `evaluacion_desempeño` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_auditoria`
--

LOCK TABLES `bd_auditoria` WRITE;
/*!40000 ALTER TABLE `bd_auditoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `bd_auditoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-06 10:15:15
