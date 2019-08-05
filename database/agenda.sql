-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-07-2019 a las 08:08:12
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellidos`, `telefono`, `email`) VALUES
(1, 'Drácula Von Helmot', 'Tepes', '6666666', 'dracula@gmail.com'),
(2, 'Van', 'Helsing', '6666667', 'van.helsing@gmail.com'),
(3, 'Velkan', 'Valerious', '6666668', 'velkan.valerious@gmail.com'),
(4, 'Lucy', 'Westenra', '6666669', 'lucy.westenra@gmail.com'),
(5, 'Johathan', 'Harker', '6666670', 'jonathan.harker@gmail.com'),
(6, 'Mina', 'Harker', '6666671', 'mina.harker@gmail.com'),
(7, 'Arthur', 'Holmwood', '6666672', 'arthur.holmwood@gmail.com'),
(8, 'Éamon', 'Abhartach', '6666673', 'eamon.abhartach@gmail.com'),
(10, 'Pepito', 'Conejo', '6666678', 'pepito.conejo@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
