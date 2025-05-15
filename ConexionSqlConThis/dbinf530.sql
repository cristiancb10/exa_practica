-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dbinf530
CREATE DATABASE IF NOT EXISTS `dbinf530` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbinf530`;

-- Dumping structure for table dbinf530.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `ci` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbinf530.persona: ~4 rows (approximately)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
REPLACE INTO `persona` (`ci`, `nombre`, `correo`, `fecha_nac`) VALUES
	('1234567', 'Usuario de Prueba', 'test@example.com', '2025-02-01'),
	('20', 'soda', 'cristiancocabjn@gmail.com', '2025-04-02'),
	('21', 'soda21', 'cristiancocabjn@gmail.com', '2025-04-02'),
	('22', 'soda22', 'cristiancocabjn@gmail.com', '2025-04-01'),
	('26', 'soda', 'cristiancocabjn@gmail.com', '2025-04-26');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
