-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.3.0.5098
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla job_db.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria_padre` int(11) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.categorias: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `id_categoria_padre`, `categoria`, `estado`) VALUES
	(1, NULL, 'TECNOLOGIA', 1),
	(2, 1, 'INGENIERIA', 1),
	(3, 1, 'PROGRAMACIÓN', 1),
	(4, 1, 'DBA', 1),
	(5, 1, 'ADMINSTRADOR DE SERVIDORES', 1),
	(6, NULL, 'CONSTRUCCIÓN', 1),
	(7, 6, 'CARPINTERO', 1),
	(8, NULL, 'SERVICIO DE COMIDA', 1),
	(9, 8, 'BARTENDER', 1),
	(10, 8, 'MOZO / MESERA', 1),
	(11, 8, 'COCINERO', 1);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
