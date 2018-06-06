-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2018 a las 02:53:56
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `area`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `back`
--

CREATE TABLE `back` (
  `herramienta1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `back`
--

INSERT INTO `back` (`herramienta1`) VALUES
('loco'),
('prueba5'),
('prueba6'),
('prueba7'),
('prueba8'),
('prueba14'),
('prueba15'),
('prueba16'),
('prueba17'),
('prueba18'),
('prueba19'),
('prueba20'),
('prueba21'),
('prueba23'),
('prueba25'),
('prueba27'),
('prueba28'),
('prueba30'),
('prueba33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `front`
--

CREATE TABLE `front` (
  `herramienta2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `front`
--

INSERT INTO `front` (`herramienta2`) VALUES
('prueba32'),
('prueba34'),
('WHAT ITS LOVE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
