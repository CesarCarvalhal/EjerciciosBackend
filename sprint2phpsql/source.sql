-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0+deb11u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tComentarios`
--

DROP TABLE IF EXISTS `tComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tComentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `juego_id` int(11) NOT NULL,
  `fecha_comentario` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `juego_id` (`juego_id`),
  CONSTRAINT `tComentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tUsuarios` (`id`),
  CONSTRAINT `tComentarios_ibfk_2` FOREIGN KEY (`juego_id`) REFERENCES `tJuegos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tComentarios`
--

LOCK TABLES `tComentarios` WRITE;
/*!40000 ALTER TABLE `tComentarios` DISABLE KEYS */;
INSERT INTO `tComentarios` VALUES (1,'Buen juego',1,1,NULL),(2,'Sin mas',2,2,NULL),(3,'Sin mas',3,3,NULL),(4,'Sin mas',4,4,NULL),(5,'Buen juego',5,5,NULL),(6,'Siempre igual',NULL,1,NULL),(7,'Buen juego de baloncesto',NULL,2,NULL),(8,'Muchos bugs',NULL,1,NULL),(9,'MAl juego',NULL,1,'2022-10-13'),(10,'Gran juego',NULL,4,'2022-10-14'),(11,'NOT BAD',2,5,NULL),(12,'',2,1,NULL),(13,'Decente',2,1,NULL),(14,'Decente',2,4,NULL),(15,'Gran juego',2,4,NULL),(16,'Bueno',2,1,'2022-10-20');
/*!40000 ALTER TABLE `tComentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tJuegos`
--

DROP TABLE IF EXISTS `tJuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tJuegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url_imagen` varchar(200) DEFAULT NULL,
  `url_video` varchar(200) DEFAULT NULL,
  `dificultad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tJuegos`
--

LOCK TABLES `tJuegos` WRITE;
/*!40000 ALTER TABLE `tJuegos` DISABLE KEYS */;
INSERT INTO `tJuegos` VALUES (1,'FIFA23','https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-pc-juego-origin-cover.jpg?v=1664187882','https://youtu.be/0tIW1X2dv0c','FACIL'),(2,'NBA 2K23','https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-pc-juego-steam-europe-cover.jpg?v=1663336320','https://youtu.be/p0YT85W2GL0','FACIL'),(3,'F1 Manager 2022','https://s2.gaming-cdn.com/images/products/10570/616x353/f1-manager-2022-pc-juego-steam-europe-cover.jpg?v=1663335473','https://youtu.be/osyk9tGYZEw','FACIL'),(4,'WRC Generations','https://s2.gaming-cdn.com/images/products/11779/616x353/wrc-generations-pc-juego-steam-cover.jpg?v=1658154225','https://youtu.be/sbVM4xH1xlQ','FACIL'),(5,'GTA V','https://s2.gaming-cdn.com/images/products/4211/616x353/grand-theft-auto-v-premium-online-edition-premium-online-edition-pc-juego-rockstar-cover.jpg?v=1652713683','https://youtu.be/2S4O8Ea6M9Y','NORMAL');
/*!40000 ALTER TABLE `tJuegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tUsuarios`
--

DROP TABLE IF EXISTS `tUsuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tUsuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tUsuarios`
--

LOCK TABLES `tUsuarios` WRITE;
/*!40000 ALTER TABLE `tUsuarios` DISABLE KEYS */;
INSERT INTO `tUsuarios` VALUES (1,'Pepe','Perez','pepePerez@gmail.com','Contrasena1'),(2,'Alex','Gonzalez','alexG@gmail.com','1234'),(3,'Antonio','Garcia','antonioG@gmail.com','1234'),(4,'Manuel','Sanchez','manuelS@gmail.com','1234'),(5,'Jesus','Martinez','jesusM@gmail.com','1234');
/*!40000 ALTER TABLE `tUsuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-25 14:05:41
