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
-- Table structure for table `situacion_auditorias`
--

DROP TABLE IF EXISTS `situacion_auditorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situacion_auditorias` (
  `id_` int(11) NOT NULL AUTO_INCREMENT,
  `anio` int(4) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `rubro` varchar(150) DEFAULT NULL,
  `situacion` varchar(200) DEFAULT NULL,
  `area_revisada` varchar(150) DEFAULT NULL,
  `trimestre` int(1) DEFAULT NULL,
  `numero_observaciones` int(11) DEFAULT NULL,
  `clave_prog` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacion_auditorias`
--

LOCK TABLES `situacion_auditorias` WRITE;
/*!40000 ALTER TABLE `situacion_auditorias` DISABLE KEYS */;
INSERT INTO `situacion_auditorias` VALUES (1,2005,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada sin observaciones','DIR. GRAL. REC. MAT.  GERERENCIA DE RECURSOS MATERIALES Y SERVICIOS',1,0,210),(2,2005,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','DIR. GRAL. DE PLANEC. Y REC. HUM. GERENCIA DE RECURSOS HUMANOS',1,2,100),(3,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DIR. GRAL. DE PROGRAM. PRESUP. Y REC. MAT. GERENCIA DE RECURSOS MATERIALES Y SERVICIOS GRALES.',1,6,700),(4,2005,'P','SISTEMA DE INFORMACIÓN Y REGISTRO','Auditoría finalizada sin observaciones','DIR. GRAL DE INFORMÁTICA GERENCIA DE INFRAESTRUCTURA Y OPERACIÓN',1,0,400),(5,2005,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','DIR. GRAL. PLANEAC. Y REC. HUM. GERENCIA DE RECURSOS HUMANOS',2,3,100),(6,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DIR. GRAL CONTENCIOSA   GERENCIA DE PROCEDIMIENTOS',2,2,700),(7,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DIRECCIÓN GENERAL DE DESARROLLO DE PROYECTOS',2,0,700),(8,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DIR. GRAL. DE ANÁLISI Y DESARR. SIST. PREV. OPER. GERENCIA DE SUP. DESARRLL. SIST. PREV. SEG. PROT.',2,4,700),(9,2005,'P','INVENTARIOS Y ACTIVOS FIJOS','Auditoría finalizada sin observaciones','DIR. GRAL. PROGRAM. PRESUP. REC. MAT. GERENCIA DE RECURSOS MATERIALES Y SERV. GRALES.',3,0,240),(10,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DIRECCIÓN GENERAL DE INTERMEDIARIOS BURSÁTILES',3,0,700),(11,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DIR. GRAL DE SUPERV. INST. FIN. \"A\"\" SUPERVISIÓN EN JEFE DE INSTITUCIONES FINANCIERAS\"',3,0,700),(12,2005,'P','PRESUPUESTO - GASTO CORRIENTE','Auditoría finalizada sin observaciones','GERENCIA DE FINANZAS Y GERENCIA DE ORGANISMOS INTERNACIONALES DE SUPERVISIÓN',3,0,350),(13,2005,'P','PRESUPUESTO - GASTO CORRIENTE','Auditoría finalizada con observaciones','PRESIDENCIA DE LA CNBV TITULAR DE SEGURIDAD',4,2,350),(14,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(15,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DIRECCIÓN GENERAL DE INSTITUCIONES FINANCIERAS \"C\"\"\"',4,0,700),(16,2005,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DIRECCIÓN GENERAL DE DISPOSICIONES E INSTRUMENTACIÓN LEGAL',4,0,700),(17,2005,'A','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observacione','VICEPRESIDENCIAS DE NORMATIVIDAD Y DE ADMINISTRACIÓN',4,0,700),(18,2006,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales.',1,4,210),(19,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Dirección General de Instituciones Financieras \"C\"\" - Supervisor de Instituciones Financieras - SOFOL\"',1,0,700),(20,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Dirección General de de Delitos y Sanciones - Gerencia de Sanciones',1,0,700),(21,2006,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','D. G. de Planeación y Recursos Humanos.',2,4,100),(22,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Dirección General de Supervisión de Banca de Desarrollo y entidades de Fomento  - Superivisión en Je',2,0,700),(23,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Dirección General de Informática - Gerencia de Infraestructura y Operación. Proceso de Transmisión /',2,0,700),(24,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Dirección General Contenciosa',2,0,700),(25,2006,'P','FIDEICOMISOS, FONDOS, MANDATOS Y ANÁLOGOS QUE NO SON ENTIDADES PARAESTATALES','Auditoría finalizada con observaciones','D. G. de Planeación y Recursos Humanos.',2,2,370),(26,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DG de Informática - Gerencia de Planeación y Servicios Informáticos / Planeación y Organización, pla',3,0,700),(27,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Informática - Gerencia de Planeación y Servicios Informáticos / Seguridad Lógica, acceso a la',3,1,700),(28,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VICEPRESICENCIAS DE LA CNBV',3,2,700),(29,2006,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de  Supervisión de Instituciones Finanieras \"B\"\"\"',3,4,700),(30,2006,'A','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales',4,1,210),(31,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSB - Dirección General de Sociedades de Inversión.',1,2,700),(32,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSIF5 - Dirección General de Supervisión de Instituciones Financieras Especializadas  A',1,1,700),(33,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VSIF5 - Dirección General de Supervisión de Instituciones Financieras A (Bancos)',2,0,700),(34,2007,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','VA - Dirección General de Planeación y Recursos Humanos',2,4,100),(35,2007,'P','FIDEICOMISOS, FONDOS, MANDATOS Y ANÁLOGOS QUE NO SON ENTIDADES PARAESTATALES','Auditoría finalizada con observaciones','VA-Dirección General de Planeación y Recursos Humanos',2,3,370),(36,2007,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VG - Dirección General de Planeación y Recursos Humanos',2,10,800),(37,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VJ - Direcciňn General de Delitos y Sanciones y Direcciňn General Conteciosa',3,2,700),(38,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VSIF1-Direcciňn General de Supervisiňn de Sistemas Informŕticos de Instituciones Financieras',3,0,700),(39,2007,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','VA - Dirección  General de Programación, Presupuesto y Recursos Materiales - Adquisiciones',3,3,210),(40,2007,'P','INVENTARIOS Y ACTIVOS FIJOS','Auditoría finalizada sin observaciones','VA-Dirección  General de Programación, Presupuesto y Recursos Materiales - Gerencia de Recursos Mate',4,0,240),(41,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSIF2-Dirección General de Supervisión de Entidades de Ahorro y Crédito Popular.',4,8,700),(42,2007,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VJ - Dirección General de Prevención de Operaciones Ilícitas.',4,1,700),(43,2007,'P','PRESUPUESTO - GASTO CORRIENTE','Auditoría finalizada sin observaciones','VA-DG de Programación, Presupuesto y Recursos Materiales y DG de Planeación y Recursos Humanos',4,0,350),(44,2007,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','VA-Dirección General de Programación, Presupuesto y Recursos Materiales',1,8,210),(45,2007,'A','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','Direcci&oacute;n General de Programaci&oacute;n, Presupuesto y Recursos Materiales',3,0,700),(46,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSBMAI - DG de Supervisión de Instituciones Financieras A (Supervisión de Banca Múltiple)',1,1,700),(47,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VN - DG Técnica (Proceso Legal-Regulatorio)',1,0,700),(48,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VSBMCB - DG de Supervisión de Instituciones Financieras Especializadas A (Supervisión de AGDAF)',1,0,700),(49,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSBDFP - DG de Banca de Desarrollo y de Entidades de Fomento (Supervisión de Banca de Desarrollo)',2,1,700),(50,2009,'P','FIDEICOMISOS, FONDOS, MANDATOS Y ANÁLOGOS QUE NO SON ENTIDADES PARAESTATALES','Auditoría finalizada con observaciones','VA-DG de Planeación y Rec. Humanos y DG de Programación, Presupuesto y Rec. Materiales(Fideicomisos)',2,1,370),(51,2009,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VSB - DG de Supervisión de Mercados (Supervisión de  los Mercados de Valores y Derivados)',2,5,800),(52,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VJ - DG de Delitos y Sanciones (Proceso Legal-Regulatorio)',3,0,700),(53,2009,'P','AL DESEMPEŃO','Auditoría finalizada sin observaciones','Vicepresidencias de Supervisión (Supervisión de Grupos Financieros - Supervisión Consolidada)',3,0,800),(54,2009,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','VA - Dirección General de Planeación y Recursos Humanos (Nómina)',3,1,100),(55,2009,'P','INVENTARIOS Y ACTIVOS FIJOS','Auditoría finalizada sin observaciones','VA - DG de Programación, Presupuesto y Recursos Materiales y Servicios Generales (Bienes)',4,0,240),(56,2009,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VT - DG de Análisis y Riesgos (Proceso de Supervisión - Entrega de información)',4,0,700),(57,2009,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada sin observaciones','VA - DG de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',4,0,210),(58,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSB - Dirección General de Emisiones Bursátiles  (Supervisión de Emisoras).',1,2,700),(59,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VJ- Dirección General Contenciosa (Proceso Legal)',1,3,700),(60,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSBDFP-Dirección General de Supervisión de Uniones de Crédito (Supervisión de Uniones de Crédito)',1,3,700),(61,2010,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','VAPE- Dirección General de Organización y Recursos Humanos (Servicio Médico)',1,10,100),(62,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VT-DG de Administración de Inversiones (Supervisión del Sector Sociedades de Inversión)',2,6,700),(63,2010,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VSBDFP-DG de Supervisión de  Sociedades de Finanzas Populares (Supervisión de SOFIPOS)',2,1,800),(64,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','VAPE-DG de Programación, Presupuesto y Recursos Materiales (Viáticos)',2,0,700),(65,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSGIFB-DG Intermediarios Especializados (Sup. de Int. Esp.)',2,4,700),(66,2010,'P','RECURSOS HUMANOS','Auditoría finalizada sin observaciones','VAPE-DG de Organización y Recursos Humanos (Nómina)',3,0,100),(67,2010,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VSBDFP - DG de Supervisión de Cooperativas de Ahorro y Préstamo  (Sup. Ent. de Ahorro y Prest.)',3,1,800),(68,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSGIFA-DG de Supervisión de Grupos Financieros B (Sup. Ent. Fin.)',3,1,700),(69,2010,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','VAPE-DG de Organización y Recursos Humanos (Pres. Resp. Pagos Indeb.)',3,1,100),(70,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(71,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(72,2010,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(73,2010,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada sin observaciones','VAPE-DG de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',4,0,210),(74,2010,'A','INVENTARIOS Y ACTIVOS FIJOS','Auditoría finalizada con observaciones','VAPE - DG de Programacion, Presupuesto y Recursos Materiales (Bienes)',4,2,240),(75,2010,'A','SISTEMA DE INFORMACIÓN Y REGISTRO','Auditoría finalizada sin observaciones','VAPE- DG de Informática',4,0,400),(76,2010,'A','INGRESOS','Auditoría finalizada sin observaciones','VAPE - DG de Programación, Presupuesto y Recursos Materiales (Ingresos)',4,0,320),(77,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSGIFB-DG de Supervisión de Grupos Financieros D (Supervisión de Entidades Financieras)',1,1,700),(78,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSB - DG de Supervisión de Mercados (Calificadoras de Valores e Información de Emisoras)',1,2,700),(79,2011,'P','FIDEICOMISOS, FONDOS, MANDATOS Y ANÁLOGOS QUE NO SON ENTIDADES PARAESTATALES','Auditoría finalizada con observaciones','VAPE-DG de Organización y Recursos Humanos (Fideicomisos)',1,5,370),(80,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSGIFB-DG de Supervisión de Grupos Financieros E (Supervisión de Entidades Financieras)',2,1,700),(81,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VJ - Dirección General de Atención a Autoridades (Proceso Legal)',2,2,700),(82,2011,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VJ - DG de Delitos y Sanciones (Proceso Legal-Regulatorio - Sanciones)',2,3,800),(83,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(84,2011,'P','AL DESEMPEŃO','Auditoría finalizada con observaciones','VSGIF A y B- DG de Supervisión de Gpos Financieros A,B,C,D y E (Sup.de Casas de Bolsa)',3,6,800),(85,2011,'P','RECURSOS HUMANOS','Auditoría finalizada sin observaciones','VAPE-DG de Organización y Recursos Humanos (Nómina)',3,0,100),(86,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSGIFA- DG de Supervisión de Grupos Financieros A (Supervisión de Entidades Financieras)',4,2,700),(87,2011,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada sin observaciones','VAPE- DG de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',4,0,210),(88,2011,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','VSBDFP-DG de Supervisión de Banca de Desarrollo y Entidades de Fomento(Sup. Banca de Desarrollo)',4,1,700),(89,2011,'A','PRESUPUESTO - GASTO CORRIENTE','Auditoría finalizada con observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales',4,2,350),(90,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Entidades Bursátiles (Visitas de Inspección)',1,3,700),(91,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Riesgo Operacional y Tecnológico (Proceso de Supervisión TIC).',1,8,700),(92,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(93,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Administración de Inversiones (Supervisión del Sector Sociedades de Inversión)',1,1,700),(94,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Riesgos Discrecionales (Proceso de Supervisión)',2,3,700),(95,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(96,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Cooperativas de Ahorro y Préstamo (Sup. Ent. de Ahorro y Prest.)',2,5,700),(97,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Prevención de Operaciones con Recursos de Procedencia Ilícita (Proc.de Sup.-Op. Ilícitas)',2,5,700),(98,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(99,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(100,2012,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoria cancelada','NA',0,0,0),(101,2012,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','DG de Organización y Recursos Humanos (Servicio Médico)',1,5,100),(102,2012,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoria cancelada','NA',0,0,0),(103,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DG de Supervisión de Sociedades Financieras Populares (Proceso de Supervisión SOFIPOS)',3,0,700),(104,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Grupos e Intermediarios Financieros F (Proceso de Supervisión)',1,4,700),(105,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Emisiones Bursátiles (Registro Nacional de Valores)',1,1,700),(106,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Grupos e Intermediarios Financieros B (Proceso de Supervisión)',2,2,700),(107,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Análisis e Información (Proceso de Supervisión - Entrega de información)',2,2,700),(108,2013,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','DG de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',2,2,210),(109,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Autorizaciones Especializadas (Proceso de Supervisión)',2,1,700),(110,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Informática (Tecnologías de Información y Comunicaciones)',3,7,700),(111,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Metodologías y Análisis de Riesgo (Proceso de Supervisión - Metodología)',1,1,700),(112,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Uniones de Crédito (Supervisión - Uniones de Crédito)',3,4,700),(113,2013,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','DG de Organización y Recursos Humanos (Nómina)',3,2,100),(114,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Supervisión de Grupos e Intermediarios Financieros C (Proc. Sup.)',4,3,700),(115,2013,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DG Contenciosa (Proceso Legal)',4,0,700),(116,2013,'P','SISTEMA DE INFORMACIÓN Y REGISTRO','Auditoría finalizada sin observaciones','DG de Programación, Presupuesto y Recursos Materiales (Contabilidad Gubernamental)',4,0,400),(117,2014,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)',0,10,700),(118,2014,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Prevención de Operaciones con Recursos de Procedencia Ilícita A y B (Proceso de Supervisión)',3,4,700),(119,2014,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Visitas de Investigación (Proceso de Soporte Legal)',3,2,700),(120,2014,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG de Normatividad  (Proceso Soporte Legal)',3,2,700),(121,2014,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada sin observaciones','DG de Desarrollo Regulatorio (Proceso de Regulacion)',3,0,700),(122,2014,'P','FIDEICOMISOS, FONDOS, MANDATOS Y ANÁLOGOS QUE NO SON ENTIDADES PARAESTATALES','Auditoría finalizada con observaciones','DG de Organización y Recursos Humanos (Fideicomisos)',4,1,370),(123,2014,'P','PRESUPUESTO - GASTO CORRIENTE','Auditoria cancelada','NA',0,0,0),(124,2014,'A','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de Organización y Recursos Humanos',2,3,700),(125,2014,'A','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de Delitos y Sanciones (Proceso Legal, regulatorio y sanciones)',3,7,700),(126,2014,'A','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de Atención a Autoridades (Proceso Legal)',4,6,700),(127,2014,'A','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada sin observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',4,0,210),(128,2014,'A','PRESUPUESTO - GASTO CORRIENTE','Auditoría finalizada con observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales (Presupuesto)',4,3,350),(129,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de Supervisión de Riesgo Operacional y Tecnológico (Proceso de Supervisión)',1,2,700),(130,2015,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','Dirección General de Organización y Recursos Humanos (Nómina)',1,1,100),(131,2015,'P','RECURSOS HUMANOS','Auditoría finalizada con observaciones','Dirección General de Organización y Recursos Humanos  (Servicio Médico)',1,8,100),(132,2015,'P','AL DESEMPEŃO','Auditoría finalizada sin observaciones','Dirección General de Delitos y Sanciones  (Proceso de Sanciones) (Desempeńo)',2,0,800),(133,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección de Metodologías y Análisis de Riesgo  (Proceso de Supervisión)',2,2,700),(134,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Dirección General de Informática (Proceso de Seguridad y Planes de Continuidad - Plataforma Tec.)',2,3,700),(135,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','Director General de Prevención de Operaciones con Recursos de Procedencia llícita A y B (Proceso de',2,4,700),(136,2015,'P','ADQUISICIONES, ARRENDAMIENTOS Y SERVICIOS','Auditoría finalizada con observaciones','Dirección General de Programación, Presupuesto y Recursos Materiales (Adquisiciones)',3,6,210),(137,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG\'s Sup. Bca. de Des. y Ent. de Fomento; y de Sup. de Uniones de Crédito (Proceso de Supervisión)',3,5,700),(138,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG\'s de Supervisión de Cooperativas de Ahorro y Préstamo A y B; y de Supervisión de SOFIPOS',3,6,700),(139,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','Auditoría finalizada con observaciones','DG´s de Sup. Ent. e Int. Bur; Sup. Part. en Redes;  Sup. Cond. Part. Merc. (Proceso de Supervisión)',3,6,700),(140,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','','DG\'s de Sup. de Gpos e Int. Financieros A, B y C (Proceso de Supervisión)',4,0,700),(141,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','','DG\'s de Sup. de Gpos e Int. Financieros D, E y F (Proceso de Supervisión)',4,0,700),(142,2015,'P','ACTIVIDADES ESPECÍFICAS INSTITUCIONALES','','Dirección General de Autorizaciones al Sistema Financiero (Proceso de Autorizaciones)',4,0,700);
/*!40000 ALTER TABLE `situacion_auditorias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-06 10:15:19
