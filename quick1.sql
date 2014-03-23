-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.45-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema quickshopping
--

CREATE DATABASE IF NOT EXISTS quickshopping;
USE quickshopping;

--
-- Definition of table `dticket`
--

DROP TABLE IF EXISTS `dticket`;
CREATE TABLE `dticket` (
  `idTicket` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dticket`
--

/*!40000 ALTER TABLE `dticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `dticket` ENABLE KEYS */;


--
-- Definition of table `eticket`
--

DROP TABLE IF EXISTS `eticket`;
CREATE TABLE `eticket` (
  `idTicket` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(10) unsigned NOT NULL,
  `fechaTicket` date NOT NULL,
  `totalTicket` float NOT NULL,
  `fpagoTicket` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eticket`
--

/*!40000 ALTER TABLE `eticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `eticket` ENABLE KEYS */;


--
-- Definition of table `mproducto`
--

DROP TABLE IF EXISTS `mproducto`;
CREATE TABLE `mproducto` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomProducto` varchar(45) NOT NULL,
  `desProducto` varchar(45) NOT NULL,
  `fotoProducto` varchar(45) NOT NULL,
  `precioProducto` float NOT NULL,
  `cantidadProducto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mproducto`
--

/*!40000 ALTER TABLE `mproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `mproducto` ENABLE KEYS */;


--
-- Definition of table `muser`
--

DROP TABLE IF EXISTS `muser`;
CREATE TABLE `muser` (
  `idUser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(45) NOT NULL,
  `mailUser` varchar(45) NOT NULL,
  `passUser` varchar(45) NOT NULL,
  `typeUser` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muser`
--

/*!40000 ALTER TABLE `muser` DISABLE KEYS */;
/*!40000 ALTER TABLE `muser` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
