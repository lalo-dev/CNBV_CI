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
-- Table structure for table `cnbv_empleados_aai`
--

DROP TABLE IF EXISTS `cnbv_empleados_aai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cnbv_empleados_aai` (
  `id_` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil_puesto` int(11) DEFAULT NULL,
  `numero_expediente` varchar(4) DEFAULT NULL,
  `area` varchar(10) DEFAULT NULL,
  `nombre` text,
  `apellido_paterno` text,
  `apellido_materno` text,
  `adscrito_oic` varchar(2) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `codigo_nivel` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  `codigo_puesto` varchar(40) DEFAULT NULL,
  `grado` varchar(20) DEFAULT NULL,
  `competencias` text,
  `habilidades` text,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `curp` varchar(14) DEFAULT NULL,
  `lugar_nacimiento` varchar(500) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `iniciales` varchar(7) DEFAULT NULL,
  `correo_cnbv` varchar(50) DEFAULT NULL,
  `correo_personal` varchar(50) DEFAULT NULL,
  `celular` int(12) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `extension` int(4) DEFAULT NULL,
  `torre` varchar(15) DEFAULT NULL,
  `piso` int(2) DEFAULT NULL,
  `coordenada` varchar(3) DEFAULT NULL,
  `curriculum` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cnbv_empleados_aai`
--

LOCK TABLES `cnbv_empleados_aai` WRITE;
/*!40000 ALTER TABLE `cnbv_empleados_aai` DISABLE KEYS */;
/*!40000 ALTER TABLE `cnbv_empleados_aai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-06 10:15:17
