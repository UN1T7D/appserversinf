-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: den1.mysql1.gear.host    Database: appserversinf
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(2) NOT NULL,
  `genero` char(1) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `frecuencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'prueba nombre','prueba apellido',25,'M','25369685','Quezaltepeque, la libertad','Lunes, y vierners'),(2,'ANTONIO','GARCIA',22,'M','25036487','La Coruña, Soyapango','Martes y jueves'),(3,'JOSE','MARTINEZ',33,'M','24587963','Quezaltepeque, La Libertad','Lunes y jueves'),(4,'FRANCISCO','LOPEZ',55,'M','22104578','Quezaltepeque, Santa Tecla','Sabado'),(5,'JUAN','SANCHEZ',60,'M','23698877','San Salvador, San Salvador','Lunes, y vierners'),(6,'MANUEL','GONZALEZ',42,'M','78956323','Valle El Sol, Apopa','Martes y sabado'),(7,'PEDRO','GOMEZ',58,'M','75489623','Popotlan, Apopa','Martes y jueves'),(8,'JESUS','FERNANDEZ',33,'M','21135689','Valle Verde, Apopa','Martes y sabado'),(9,'ANGEL','MORENO',23,'M','22334789','San marco, San Salvador','Sabado'),(10,'MIGUEL','JIMENEZ',50,'M','78994411','San Jacinto, San Salvador','Lunes, y vierners'),(11,'JAVIER','PEREZ',45,'M','74231589','Mejicanos, San Salvador','Lunes y jueves'),(12,'JOSE ANTONIO','RODRIGUEZ',48,'M','76895421','San Juan opico, La Libertad','Martes y jueves'),(13,'DAVID','NAVARRO',47,'M','76824953','San Matias, La Libertad','Martes y sabado'),(14,'CARLOS','RUIZ',42,'M','21001314','Merliot, Santa Tecla','Sabado'),(15,'JOSE LUIS','DIAZ',41,'M','23005060','Nejapa, San Salvador','Martes y jueves'),(16,'ALEJANDRO','SERRANO',29,'M','28795000','Quezaltepeque, La Libertad','Lunes, y vierners'),(17,'MIGUEL ANGEL','HERNANDEZ',46,'M','25555555','La Coruña, Soyapango','Lunes y jueves'),(18,'FRANCISCO JAVIER','MUÑOZ',49,'M','23669988','Quezaltepeque, La Libertad','Sabado'),(19,'RAFAEL','SAEZ',55,'M','24558877','Quezaltepeque, Santa Tecla','Martes y jueves'),(20,'DANIEL','ROMERO',52,'M','26885555','San Salvador, San Salvador','Lunes, y vierners'),(21,'JUAN JOSE','RUBIO',54,'M','21113312','Valle El Sol, Apopa','Lunes y jueves');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float(6,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `lote` varchar(10) DEFAULT NULL,
  `estiba` varchar(10) DEFAULT NULL,
  `costo` float(6,2) DEFAULT NULL,
  `tarima` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Bebida hidratante','Coca - cola','Es una bebida muy rica',1.75,200000,'ABC-11','EST-001',0.80,'TAR-X01'),(2,'Agua','Agua Botella 355ml','Botella 355 ml',0.40,15000,'ABC-12','EST-002',0.20,'TAR-X02'),(3,'Agua','Agua Botella 600ml','botella 600ml',0.60,30000,'ABC-13','EST-003',0.25,'TAR-X03'),(4,'Agua','Agua Botella 1Lt','Botella 1 litro',0.80,4000,'ABC-14','EST-004',0.30,'TAR-X04'),(5,'Soda','Coca Lata 8 Oz','Lata 8 oz',0.30,15000,'ABC-15','EST-005',0.15,'TAR-X05'),(6,'Soda','Coca Lata 12 Oz','Lata 12 oz',0.50,15000,'ABC-16','EST-006',0.25,'TAR-X06'),(7,'Soda','Coca Retornable 12 Oz','Retornable 12 oz',0.40,19000,'ABC-17','EST-007',0.20,'TAR-X07'),(8,'Soda','Uva Lata 8 Oz','Lata 8 oz',0.30,50000,'ABC-18','EST-008',0.30,'TAR-X08'),(9,'Soda','Uva Lata 12 Oz','Lata 12 oz',0.50,30000,'ABC-19','EST-009',0.25,'TAR-X09'),(10,'Soda','Uva Retornable 12 Oz','Retornable 12 oz',0.75,25000,'ABC-20','EST-0010',0.45,'TAR-X010'),(11,'Soda','Uva Botella 2.5 Lts','botella 2.5 Lts',0.75,6300,'ABC-21','EST-0011',0.45,'TAR-X011'),(12,'Soda','Fanta Lata 8 oz','Lata 8 oz',0.30,5000,'ABC-22','EST-0012',0.15,'TAR-X012'),(13,'Soda','Fanta lata 12 oz','Lata 12 oz',0.50,7000,'ABC-23','EST-0013',0.25,'TAR-X013'),(14,'Soda','fanta retornable 12','Retornable 12 oz',0.75,2594,'ABC-24','EST-0014',0.45,'TAR-X014'),(15,'Soda','Sprite lata 8 oz','Lata 8 oz',0.30,7923,'ABC-25','EST-0015',0.15,'TAR-X015'),(16,'Soda','Sprite lata 12 oz','Lata 12 oz',0.50,2600,'ABC-26','EST-0016',0.25,'TAR-X016'),(17,'Soda','Sprite Retornable 12 oz','Retornable 12 oz',0.75,5000,'ABC-27','EST-0017',0.45,'TAR-X017'),(18,'Soda','Sprite Botella 2.5 Lte','botella 2.5 Lts',1.75,9000,'ABC-28','EST-0018',1.00,'TAR-X018'),(19,'Cerveza','Pilsener Retornable 750 ml','retornable 750 ml',1.25,7000,'ABC-29','EST-0019',0.75,'TAR-X019'),(20,'Cerveza','Pilsener Retornable 300 ml','retornable 300 ml',1.00,8000,'ABC-30','EST-0020',0.50,'TAR-X020'),(21,'Cerveza','Pilsener Lata 24 oz','lata 24 oz',0.75,6000,'ABC-31','EST-0021',0.45,'TAR-X021'),(22,'Cerveza','Pilsener lata 16 oz','lata 16 oz',0.60,9000,'ABC-32','EST-0022',0.25,'TAR-X022'),(23,'Cerveza','Golden retornable 630 ml','retornable 630 ml',1.50,1000,'ABC-33','EST-0023',0.75,'TAR-X023'),(24,'Cerveza','Golden retornable 262 ml','retornable 262 ml',1.00,6000,'ABC-34','EST-0024',0.40,'TAR-X024'),(25,'Cerveza','Golden lata 16 oz','lata 16 oz',1.00,4500,'ABC-35','EST-0025',0.50,'TAR-X025'),(26,'Cerveza','Corana no retorn 12 oz','no retornable 12 oz',0.75,8000,'ABC-36','EST-0026',0.30,'TAR-X026'),(27,'TE','Fuze Tea Limon 500 ml','Te Limon 500 ml',1.00,10000,'ABC-37','EST-0027',0.40,'TAR-X027'),(28,'TE','Fuze Tea Melocon 500ml','Te Melocon 500 ml',1.00,12563,'ABC-38','EST-0028',0.40,'TAR-X028'),(29,'Jugo','Del Valle 250ml','Del valle 250 ml',0.60,6952,'ABC-39','EST-0029',0.30,'TAR-X029'),(30,'Jugo','Del Valle 1.5 Lte','Del valle 1.5 Lt',1.50,2563,'ABC-40','EST-0030',0.75,'TAR-X030'),(31,'Bebida Hidratante','Powerade 300ml','Powerade 300 ml',1.25,10000,'ABC-41','EST-0031',0.60,'TAR-X021');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tienda`
--

DROP TABLE IF EXISTS `tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `pais` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tienda`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tienda`
--

LOCK TABLES `tienda` WRITE;
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
INSERT INTO `tienda` VALUES (1,'Tienda prueba','San salvador, san slavador','75859565','El salvador'),(2,'La Bendicion de Dios','La Coruña, Soyapango','25036487','El Salvador'),(3,'Tienda Esperanza','Quezaltepeque, La Libertad','24587963','El Salvador'),(4,'Tienda Juanita ','Quezaltepeque, Santa Tecla','22104578','El Salvador'),(5,'La Despensa de Don Juan ','San Salvador, San Salvador','23698877','El Salvador'),(6,'Casa de Ahorro','Valle El Sol, Apopa','78956323','El Salvador'),(7,'Super Maria','Popotlan, Apopa','75489623','El Salvador'),(8,'Super Jose','Valle Verde, Apopa','21135689','El Salvador'),(9,'Tienda La Nueva','San marco, San Salvador','22334789','El Salvador'),(10,'Gran Venta','San Jacinto, San Salvador','78994411','El Salvador'),(11,'Mercado Rapidito','Mejicanos, San Salvador','74231589','El Salvador'),(12,'Puro Market','San Juan opico, La Libertad','76895421','El Salvador'),(13,'Super Completo','San Matias, La Libertad','76824953','El Salvador'),(14,'Super ofertas','Merliot, Santa Tecla','21001314','El Salvador'),(15,'Llevalo Varato','Nejapa, San Salvador','23005060','El Salvador'),(16,'Hogareño','Quezaltepeque, La Libertad','28795000','El Salvador');
/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL AUTO_INCREMENT,
  `id_tienda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `unidades` float(6,2) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `descuento` int(11) NOT NULL,
  `fecha_de_compra` datetime NOT NULL,
  `calificacion` int(1) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ventas`),
  KEY `id_tienda` (`id_tienda`,`id_cliente`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`),
  CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,1,10,5,100.00,100.00,5,'0000-00-00 00:00:00',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(2,1,1,1,140.00,100.00,5,'2020-11-20 10:11:01',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(3,2,2,2,240.00,250.00,10,'2020-11-20 10:11:02',6,'Me trajeron el producto, pero muy mala atencio del chico'),(4,3,3,3,560.00,320.50,20,'2020-11-20 10:11:03',4,'Se confuncieron de pedido, no era ese producto'),(5,4,4,4,420.00,285.10,8,'2020-11-20 10:11:04',3,'Deberian de ser mas puntuales, vinieron muy tarde!!'),(6,5,5,5,780.00,500.55,7,'2020-11-20 10:11:05',7,'Justo a tiempo, pero pueden mejorar la proxima'),(7,6,6,6,999.00,500.55,9,'2020-11-20 10:11:06',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(8,7,7,7,9999.99,800.56,6,'2020-11-20 10:11:07',9,'Muy buen servicio, y atencio de parte del proveedor'),(9,8,8,8,9999.99,850.95,7,'2019-04-04 13:03:02',6,'Me trajeron el producto, pero muy mala atencio del chico'),(10,9,9,9,600.00,400.20,3,'2019-04-04 13:03:03',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(11,10,10,10,700.00,100.00,4,'2019-04-04 13:03:04',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(12,11,11,11,758.00,250.00,5,'2019-04-04 13:03:05',9,'Muy buen servicio, y atencio de parte del proveedor'),(13,12,12,12,749.00,320.50,10,'2019-04-04 13:03:06',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(14,13,13,13,745.00,285.10,9,'2019-04-04 13:03:07',5,'Un par de bebidas venian ya vencidas, buxos'),(15,14,14,14,855.00,500.55,10,'2019-04-04 13:03:08',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(16,15,15,15,960.00,500.55,5,'2019-04-04 13:03:09',9,'Muy buen servicio, y atencio de parte del proveedor'),(17,16,16,16,423.00,800.56,4,'2019-04-04 13:03:10',7,'Justo a tiempo, pero pueden mejorar la proxima'),(18,12,12,12,2000.00,850.95,7,'2019-04-04 13:03:11',6,'Me trajeron el producto, pero muy mala atencio del chico'),(19,13,13,13,2020.00,400.20,9,'2019-04-04 13:03:12',6,'Me trajeron el producto, pero muy mala atencio del chico'),(20,14,14,14,789.00,100.00,6,'2019-04-04 13:03:13',9,'Muy buen servicio, y atencio de parte del proveedor'),(21,15,15,15,200.00,250.00,3,'2019-04-04 13:03:14',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(22,16,16,16,300.00,320.50,8,'2019-04-04 13:03:15',7,'Justo a tiempo, pero pueden mejorar la proxima'),(23,1,17,17,450.00,285.10,5,'2019-04-04 13:03:16',7,'Justo a tiempo, pero pueden mejorar la proxima'),(24,2,18,18,780.00,500.55,10,'2019-04-04 13:03:17',9,'Muy buen servicio, y atencio de parte del proveedor'),(25,3,19,19,900.00,500.55,15,'2019-04-04 13:03:18',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(26,4,20,20,100.00,800.56,20,'2019-04-04 13:03:19',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(27,5,21,21,60.00,850.95,25,'2019-04-04 13:03:20',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(28,6,16,22,20.00,400.20,15,'2019-04-04 13:03:21',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(29,7,12,23,720.00,100.00,8,'2019-04-04 13:03:22',5,'Un par de bebidas venian ya vencidas, buxos'),(30,8,13,24,2000.00,250.00,7,'2019-08-08 14:50:07',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(31,9,14,25,2020.00,320.50,9,'2019-08-08 14:50:08',9,'Muy buen servicio, y atencio de parte del proveedor'),(32,10,15,2,789.00,285.10,15,'2019-08-08 14:50:09',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(33,11,16,26,200.00,500.55,14,'2019-08-08 14:50:10',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(34,12,17,27,300.00,500.55,16,'2019-08-08 14:50:11',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(35,13,18,28,450.00,800.56,25,'2019-08-08 14:50:12',4,'Se confuncieron de pedido, no era ese producto'),(36,14,19,29,780.00,850.95,5,'2019-08-08 14:50:13',2,'Muy mala entrega, no me trajeron lo que queria'),(37,1,20,30,900.00,400.20,10,'2019-08-08 14:50:14',3,'Deberian de ser mas puntuales, vinieron muy tarde!!'),(38,2,21,31,100.00,100.00,20,'2019-08-08 14:50:15',1,'Pesimo servicio, mala entrega'),(39,3,6,12,60.00,250.00,8,'2019-08-08 14:50:16',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(40,4,7,13,20.00,320.50,7,'2019-08-08 14:50:17',9,'Muy buen servicio, y atencio de parte del proveedor'),(41,5,8,14,720.00,285.10,9,'2019-08-08 14:50:18',7,'Justo a tiempo, pero pueden mejorar la proxima'),(42,6,9,15,140.00,500.55,6,'2019-08-08 14:50:19',7,'Justo a tiempo, pero pueden mejorar la proxima'),(43,7,10,16,240.00,500.55,7,'2019-08-08 14:50:20',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(44,8,11,12,560.00,800.56,3,'2019-08-08 14:50:21',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(45,9,12,13,420.00,850.95,4,'2019-08-08 14:50:22',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(46,10,13,14,780.00,400.20,5,'2019-08-08 14:50:23',7,'Justo a tiempo, pero pueden mejorar la proxima'),(47,11,14,15,999.00,100.00,10,'2019-08-08 14:50:24',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(48,12,15,16,9999.99,250.00,9,'2019-08-08 14:50:25',9,'Muy buen servicio, y atencio de parte del proveedor'),(49,13,16,17,9999.99,320.50,10,'2019-08-08 14:50:26',4,'Se confuncieron de pedido, no era ese producto'),(50,14,12,18,600.00,285.10,5,'2019-08-08 14:50:27',5,'Un par de bebidas venian ya vencidas, buxos'),(51,15,13,19,700.00,500.55,4,'2019-08-08 14:50:28',6,'Me trajeron el producto, pero muy mala atencio del chico'),(52,16,14,20,758.00,500.55,7,'2019-08-08 14:50:29',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(53,12,1,21,749.00,800.56,9,'2019-08-08 14:50:30',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(54,13,2,22,745.00,850.95,6,'2019-08-08 14:50:31',9,'Muy buen servicio, y atencio de parte del proveedor'),(55,14,3,23,855.00,400.20,3,'2019-08-08 14:50:32',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(56,15,4,1,960.00,500.55,8,'2019-08-08 14:50:33',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(57,16,5,2,423.00,800.56,5,'2019-08-08 14:50:34',5,'Un par de bebidas venian ya vencidas, buxos'),(58,1,6,3,140.00,850.95,10,'2019-08-08 14:50:35',9,'Muy buen servicio, y atencio de parte del proveedor'),(59,2,7,4,240.00,400.20,15,'2019-08-08 14:50:36',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(60,3,8,5,560.00,100.00,20,'2019-08-08 14:50:37',9,'Muy buen servicio, y atencio de parte del proveedor'),(61,4,9,6,420.00,250.00,25,'2019-08-08 14:50:38',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(62,5,10,7,780.00,320.50,15,'2019-08-08 14:50:39',7,'Justo a tiempo, pero pueden mejorar la proxima'),(63,6,11,8,999.00,285.10,8,'2019-08-08 14:50:40',4,'Se confuncieron de pedido, no era ese producto'),(64,7,12,9,9999.99,500.55,7,'2019-08-08 14:50:41',9,'Muy buen servicio, y atencio de parte del proveedor'),(65,8,13,10,9999.99,500.55,9,'2019-08-08 14:50:42',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(66,9,14,11,600.00,800.56,15,'2020-11-20 10:11:03',9,'Muy buen servicio, y atencio de parte del proveedor'),(67,10,1,12,700.00,850.95,14,'2020-11-20 10:11:04',4,'Se confuncieron de pedido, no era ese producto'),(68,11,2,13,758.00,400.20,16,'2020-11-20 10:11:05',5,'Un par de bebidas venian ya vencidas, buxos'),(69,12,3,14,749.00,100.00,25,'2020-11-20 10:11:06',7,'Justo a tiempo, pero pueden mejorar la proxima'),(70,13,4,15,745.00,250.00,5,'2020-11-20 10:11:07',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(71,14,5,16,855.00,320.50,10,'2019-04-04 13:03:02',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(72,11,6,12,960.00,285.10,20,'2019-04-04 13:03:03',9,'Muy buen servicio, y atencio de parte del proveedor'),(73,12,7,13,423.00,500.55,8,'2019-04-04 13:03:04',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(74,13,8,14,2000.00,500.55,7,'2019-04-04 13:03:05',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(75,14,9,15,2020.00,800.56,9,'2019-04-04 13:03:06',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(76,15,10,16,789.00,850.95,6,'2019-04-04 13:03:07',5,'Un par de bebidas venian ya vencidas, buxos'),(77,16,11,17,200.00,400.20,7,'2019-04-04 13:03:08',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(78,12,12,18,300.00,100.00,3,'2019-04-04 13:03:09',9,'Muy buen servicio, y atencio de parte del proveedor'),(79,13,13,19,450.00,250.00,4,'2019-04-04 13:03:10',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(80,14,14,20,780.00,320.50,5,'2019-04-04 13:03:11',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(81,15,15,21,900.00,100.00,10,'2019-04-04 13:03:12',5,'Un par de bebidas venian ya vencidas, buxos'),(82,16,16,22,100.00,250.00,9,'2019-04-04 13:03:13',4,'Se confuncieron de pedido, no era ese producto'),(83,1,12,23,60.00,320.50,10,'2019-04-04 13:03:14',6,'Me trajeron el producto, pero muy mala atencio del chico'),(84,2,13,24,20.00,285.10,5,'2019-04-04 13:03:15',6,'Me trajeron el producto, pero muy mala atencio del chico'),(85,3,14,25,720.00,500.55,4,'2019-04-04 13:03:16',6,'Me trajeron el producto, pero muy mala atencio del chico'),(86,4,15,2,2000.00,500.55,7,'2019-04-04 13:03:17',2,'Muy mala entrega, no me trajeron lo que queria'),(87,5,16,26,2020.00,800.56,9,'2019-04-04 13:03:18',3,'Deberian de ser mas puntuales, vinieron muy tarde!!'),(88,6,17,27,789.00,850.95,6,'2019-04-04 13:03:19',1,'Pesimo servicio, mala entrega'),(89,7,18,28,200.00,400.20,3,'2019-04-04 13:03:20',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(90,8,19,29,300.00,100.00,8,'2019-04-04 13:03:21',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(91,9,20,30,450.00,250.00,5,'2019-04-04 13:03:22',10,'Excelente servicio, he quedado satisfecho. Muchas gracias!!'),(92,10,21,31,780.00,320.50,10,'2019-08-08 14:50:07',2,'Muy mala entrega, no me trajeron lo que queria'),(93,11,16,15,900.00,285.10,15,'2019-08-08 14:50:08',3,'Deberian de ser mas puntuales, vinieron muy tarde!!'),(94,12,12,16,100.00,500.55,20,'2019-08-08 14:50:09',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(95,13,13,17,60.00,500.55,25,'2019-08-08 14:50:10',9,'Muy buen servicio, y atencio de parte del proveedor'),(96,14,14,18,20.00,800.56,15,'2019-08-08 14:50:11',9,'Muy buen servicio, y atencio de parte del proveedor'),(97,14,15,19,720.00,850.95,8,'2019-08-08 14:50:12',8,'Gracias por su atencio, pero si puden estar mas antes, mejor'),(98,14,16,20,140.00,400.20,7,'2019-08-08 14:50:13',4,'Se confuncieron de pedido, no era ese producto'),(99,14,17,21,240.00,100.00,9,'2019-08-08 14:50:14',5,'Un par de bebidas venian ya vencidas, buxos'),(100,14,18,22,560.00,250.00,15,'2019-08-08 14:50:15',6,'Me trajeron el producto, pero muy mala atencio del chico'),(101,14,19,23,420.00,320.50,14,'2019-08-08 14:50:16',NULL,NULL),(102,3,20,1,780.00,285.10,16,'2019-08-08 14:50:17',NULL,NULL),(103,4,21,2,999.00,500.55,25,'2020-10-29 10:50:07',NULL,NULL),(104,5,6,3,9999.99,500.55,5,'2020-10-29 10:50:08',NULL,NULL),(105,6,7,4,9999.99,800.56,10,'2020-10-29 10:50:09',NULL,NULL),(106,7,8,5,600.00,850.95,20,'2020-10-29 10:50:10',NULL,NULL),(107,8,9,6,700.00,400.20,8,'2020-10-29 10:50:11',NULL,NULL),(108,9,10,7,758.00,100.00,7,'2020-10-29 10:50:12',NULL,NULL),(109,10,11,8,749.00,250.00,9,'2020-10-29 10:50:13',NULL,NULL),(110,11,12,9,745.00,320.50,6,'2020-10-29 10:50:14',NULL,NULL),(111,12,13,10,855.00,285.10,7,'2020-10-29 10:50:15',NULL,NULL),(112,13,14,11,960.00,500.55,3,'2020-10-29 10:50:16',NULL,NULL),(113,14,15,12,423.00,500.55,4,'2020-11-20 14:43:16',NULL,NULL),(114,15,16,9,300.00,800.56,5,'2020-11-20 14:43:17',NULL,NULL),(115,16,12,10,125.00,850.95,10,'2020-11-20 14:43:18',NULL,NULL),(116,1,13,11,210.00,400.20,9,'2020-11-20 14:43:19',NULL,NULL),(117,2,14,12,800.00,100.00,10,'2020-11-20 14:43:20',NULL,NULL),(118,3,1,1,450.00,250.00,5,'2020-11-20 14:43:21',NULL,NULL),(119,4,2,2,300.00,320.50,4,'2020-11-20 14:43:22',NULL,NULL);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-23 21:57:23
