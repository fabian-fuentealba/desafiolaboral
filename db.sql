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


-- Volcando estructura de base de datos para job_db

USE `desafiol_desafio7919_db`;

-- Volcando estructura para tabla job_db.avisos
DROP TABLE IF EXISTS `avisos`;
CREATE TABLE IF NOT EXISTS `avisos` (
  `id_aviso` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `id_tipo_trabajo` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_salario` int(11) DEFAULT NULL,
  `ciudad` varchar(250) DEFAULT NULL,
  `pais` varchar(250) DEFAULT NULL,
  `correo_postulacion` varchar(250) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `actualizado` datetime DEFAULT NULL,
  `visitas` int(11) DEFAULT '0',
  `id_estado` int(11) DEFAULT '1',
  `publicado` date DEFAULT NULL,
  PRIMARY KEY (`id_aviso`),
  KEY `avisos_idx1` (`creado`),
  KEY `avisos_idx2` (`id_estado`),
  KEY `avisos_idx3` (`titulo`(255)),
  KEY `avisos_idx4` (`ciudad`),
  KEY `avisos_idx5` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.avisos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `avisos` DISABLE KEYS */;
INSERT INTO `avisos` (`id_aviso`, `titulo`, `descripcion`, `id_tipo_trabajo`, `id_categoria`, `id_salario`, `ciudad`, `pais`, `correo_postulacion`, `id_empresa`, `creado`, `actualizado`, `visitas`, `id_estado`, `publicado`) VALUES
	(2, 'Senior Application Developer', 'Reporting to the Chief Technology Officer, the Senior Application Developer will:\r\n\r\n<ul><li>Provide technical guidance and training to other application developer(s) and development contractors;</li><li>Develop, commit, test, and deploy the organization’s web-based application coded in PHP and MySQL;</li><li> Adhere to and enforce version control system processes; </li><li> Manage application deployment strategy in dev, staging, and production;</li><li> Utilize relevant trends and industry best practices in order to reduce maintenance burdens, ensure quality service and product, increase efficiency, and maintain a secure environment;</li><li> Collaborate with all development team members (Business Analyst, Data Administrator, Graphic Designer, Front-end Developer, etc.) and stakeholders (both internal and external) to understand business requirements and contribute creative ideas and enhancements to the platform; </li><li> Assist with project plan time estimates and ensure development milestones are met.</li>\r\n</ul>\r\nSalary, medical, dental, 401k, paid vacation. Salary determined by evident talent and experience level.\r\n\r\n*Applicants, please submit samples of work (via URL) and description of your exact involvement with each project listed to jobs@cfan.org. Please note in your email or cover letter how you were referred to this opportunity.\r\n\r\nThis position is available immediately.', 4, 3, 7, 'LAS CONDES', 'CHILE', 'rrhh@gmail.com', 1, '2016-08-06 17:11:36', '2016-08-13 14:32:23', 97, 2, '2016-08-10'),
	(4, 'Solutions Architect (PHP)', 'The Solutions Architect (PHP) will help design and execute both high-performance and scalable web solutions. You will work in small teams to ensure proper development techniques. Role will require frequent collaboration with a team of designers and developers, as well as regular client communications.\r\n\r\nRequirements\r\n\r\n5+ years of object-oriented PHP experience\r\n5+ years of experience with MySQL-based development and architecture\r\nComfortable leading multidisciplinary teams\r\nExperience in high-scale/high-availability environments\r\nHigh-level architecture design and diagramming\r\nUnderstanding of software design principles and best practices\r\nExperience with an industry-standard MVC framework such as Laravel, etc.\r\nExperience with a JavaScript application framework such as Angular.js\r\nExperience with an industry-standard responsive CSS framework such as Bootstrap or Foundation\r\nExperience with version control software\r\nHigh level of communication skills\r\nDeep knowledge of software design patterns\r\nSoftware architecture certified (such as Open CA)\r\nContinuous integration and unit testing experience\r\nExperience with Chef and/or Puppet\r\nResponsibilities\r\n\r\nDevelop prototypes and final implementations for website and in-house applications\r\nSupport and extend existing implementations\r\nAnalyze and design code to improve execution and user flows\r\nAbout Click Here Labs\r\n\r\nClick Here Labs is the digital division of The Richards Group, a privately held full-service branding agency based in Dallas, Texas. We are veterans of Internet marketing. Formed in 1995 by a team that foresaw a need for online marketing solutions, we help clients maximize their interactive potential. Our expertise spans multiple channels, including website, mobile, tablet, social, email, online ad units, and emerging technologies.', 1, 7, 7, 'SANTIAGO', 'CHILE', 'rrhh@gmail.com', 1, '2016-08-13 02:24:11', NULL, 77, 2, '2016-08-13');
/*!40000 ALTER TABLE `avisos` ENABLE KEYS */;

-- Volcando estructura para tabla job_db.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria_padre` int(11) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.categorias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `id_categoria_padre`, `categoria`, `estado`) VALUES
	(1, NULL, 'TECNOLOGIA', 1),
	(2, 1, 'INGENIERIA', 1),
	(3, 1, 'PROGRAMACIÓN', 1),
	(4, 1, 'DBA', 1),
	(5, 1, 'ADMINSTRADOR DE SERVIDORES', 1),
	(6, NULL, 'CONSTRUCCIÓN', 1),
	(7, 6, 'CARPINTERO', 1);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla job_db.empresas
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) DEFAULT NULL,
  `correo` varchar(250) NOT NULL,
  `nombre_empresa` varchar(250) DEFAULT NULL,
  `sitio` varchar(500) DEFAULT NULL,
  `lema` varchar(1000) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `hash` varchar(1000) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `id_actualizador` int(11) DEFAULT NULL,
  `actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_empresa`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `nombre_empresa` (`nombre_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 PACK_KEYS=0 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla job_db.empresas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id_empresa`, `nombre`, `correo`, `nombre_empresa`, `sitio`, `lema`, `logo`, `password`, `estado`, `hash`, `creado`, `id_actualizador`, `actualizado`) VALUES
	(1, 'DESAFIOLABORAL', 'jasperirving007@gmail.com', 'SAM KNOWS', 'http://desafiolaboral.cl', 'Somos tu sitio de trabajo ...', './assets/uploads/1/9b0c78cb1030a559943ae3624bdf04f8.png', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1, NULL, '2016-07-27 14:56:48', NULL, '2016-08-13 02:11:20'),
	(2, 'JUAN PEDRO', 'f.fuentealba.acuna@gmail.com', 'PHYLOS BIOSCIENCE', 'http://www.phylosbioscience.com/', 'Phylos Bioscience', './assets/uploads/2/ffd401cab622c5a4b1f096c65a643f94.png', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, NULL, '2016-08-16 02:00:36', NULL, '2016-08-16 03:33:50');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

-- Volcando estructura para tabla job_db.estados
DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) DEFAULT NULL,
  `lugar` tinyint(4) DEFAULT NULL,
  `descripcion_estado` varchar(500) DEFAULT NULL,
  `estado_verbo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `lugar` (`lugar`),
  UNIQUE KEY `estado` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.estados: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`id_estado`, `estado`, `lugar`, `descripcion_estado`, `estado_verbo`) VALUES
	(1, 'GUARDAR', 1, 'Solo para ser guardado y poder editarlo cuantas veces desees. ( Seleccionandolo desde el menu avisos )', 'GUARDADO'),
	(2, 'GUARDAR & PUBLICAR', 2, 'Para ser guardado y publicado desde hoy hasta 60 dias más, luego de ello no estara visible publicamente. ( Estara visible desde el menu avisos )', 'PUBLICADO');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;

-- Volcando estructura para tabla job_db.salarios
DROP TABLE IF EXISTS `salarios`;
CREATE TABLE IF NOT EXISTS `salarios` (
  `id_salario` int(11) NOT NULL AUTO_INCREMENT,
  `salario` varchar(150) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  `lugar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_salario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.salarios: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `salarios` DISABLE KEYS */;
INSERT INTO `salarios` (`id_salario`, `salario`, `estado`, `lugar`) VALUES
	(1, 'A CONVENIR', 1, 1),
	(2, 'MENOR A 500.000', 1, 2),
	(3, 'ENTRE 500.000 & 1.000.000', 1, 3),
	(4, 'ENTRE 1.000.000 & 1.500.000', 1, 4),
	(5, 'ENTRE 1.500.000 & 2.000.000', 1, 5),
	(6, 'MAYOR A 2.000.000', 1, 6),
	(7, 'NO INDICA', 1, 0);
/*!40000 ALTER TABLE `salarios` ENABLE KEYS */;

-- Volcando estructura para tabla job_db.tipos_trabajo
DROP TABLE IF EXISTS `tipos_trabajo`;
CREATE TABLE IF NOT EXISTS `tipos_trabajo` (
  `id_tipo_trabajo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_trabajo` varchar(150) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_tipo_trabajo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- Volcando datos para la tabla job_db.tipos_trabajo: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_trabajo` DISABLE KEYS */;
INSERT INTO `tipos_trabajo` (`id_tipo_trabajo`, `tipo_trabajo`, `estado`) VALUES
	(1, 'FREELANCE', 1),
	(2, 'FULL-TIME', 1),
	(4, 'PART-TIME', 1),
	(5, 'TEMPORAL', 1),
	(6, 'PRACTICA', 1),
	(7, 'CONTRATA', 1);
/*!40000 ALTER TABLE `tipos_trabajo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
