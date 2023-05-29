-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 03:32:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseball`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ampayers`
--

CREATE TABLE `ampayers` (
  `idAmpayer` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `abreviacion` varchar(20) DEFAULT NULL,
  `activo` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ampayers`
--

INSERT INTO `ampayers` (`idAmpayer`, `nombre`, `apellidos`, `fechaNacimiento`, `curp`, `abreviacion`, `activo`) VALUES
(1, 'juan', 'i', '2023-12-30', 'KDKJASKJ7', 'hhjgjhgjh', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ampayersjuego`
--

CREATE TABLE `ampayersjuego` (
  `idCuerpo` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idAmpayer` int(11) NOT NULL,
  `ubicacion` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ampayersjuego`
--

INSERT INTO `ampayersjuego` (`idCuerpo`, `idJuego`, `idAmpayer`, `ubicacion`) VALUES
(1, 1, 1, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bateadores`
--

CREATE TABLE `bateadores` (
  `idBateadores` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL,
  `AB` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `H` int(11) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL,
  `BB` int(11) DEFAULT NULL,
  `K` int(11) DEFAULT NULL,
  `PJE` float DEFAULT NULL,
  `OBP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bateadores`
--

INSERT INTO `bateadores` (`idBateadores`, `idJuego`, `idAfiliacion`, `AB`, `C`, `H`, `CP`, `BB`, `K`, `PJE`, `OBP`) VALUES
(1, 1, 230000, 0, 1, 0, 0, 1, 1, 1, 1),
(2, 1, 230005, 0, 0, 0, 0, 0, 1, 0, 0),
(3, 1, 230006, 0, 0, 2, 0, 0, 0, 0, 0),
(4, 1, 230003, 0, 0, 0, 0, 1, 1, 0, 0),
(5, 1, 230007, 0, 0, 1, 0, 0, 1, 0, 0),
(6, 1, 230008, 0, 0, 0, 0, 0, 1, 0, 0),
(7, 1, 230009, 0, 0, 1, 0, 0, 1, 0, 0),
(8, 1, 230004, 0, 0, 0, 0, 1, 0, 0, 0),
(9, 1, 230002, 0, 0, 0, 0, 0, 1, 0, 0),
(10, 1, 230001, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 1, 230013, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 1, 230011, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 1, 230024, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 1, 230014, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 1, 230015, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 1, 230016, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 1, 230017, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 1, 230018, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 1, 230019, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 1, 230020, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 1, 230021, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 1, 230022, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 1, 230023, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 2, 230012, 2, 2, 2, 2, 2, 2, 1, 1),
(25, 2, 230012, 2, 1, 1, 1, 1, 1, 0.5, 0.667);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `idTecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `nombre`, `ciudad`, `idTecnico`) VALUES
(1, 'El Melon', 'El Melon', 1),
(2, 'Canachi', 'Canachi', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idJuego` int(11) NOT NULL,
  `idTemporada` int(11) NOT NULL,
  `jornada` int(11) DEFAULT NULL,
  `idCampo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `clima` varchar(30) DEFAULT NULL,
  `idEquipoVisitante` int(11) NOT NULL,
  `idEquipoLocal` int(11) NOT NULL,
  `final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idJuego`, `idTemporada`, `jornada`, `idCampo`, `fecha`, `hora`, `clima`, `idEquipoVisitante`, `idEquipoLocal`, `final`) VALUES
(1, 1, 1, 1, '2023-12-31', '10:00:00', 'Soleado', 2, 1, 1),
(2, 1, 2, 1, '2023-05-22', NULL, 'Nublado', 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idAfiliacion` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL,
  `golpea` varchar(15) DEFAULT NULL,
  `tira` varchar(15) DEFAULT NULL,
  `abreviacion` varchar(20) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `rama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`idAfiliacion`, `nombre`, `apellidos`, `fechaNacimiento`, `curp`, `posicion`, `golpea`, `tira`, `abreviacion`, `status`, `rama`) VALUES
(230000, 'CRUZ', 'RUBIO', '2023-01-01', 'KDKJASKJ7', 8, 'Derecho', 'Derecho', 'RUBIO', 1, 'Varonil'),
(230001, 'MISSAEL', 'RUBIO', '2023-01-01', 'KDKJASKJ7', 9, 'Derecho', 'Derecho', 'RUBIO', 1, 'Varonil'),
(230002, 'JOSE JUAN', 'CASTRO', '2023-12-31', 'KDKJASKJ7', 2, 'Derecho', 'Derecho', 'CASTRO', 1, 'Varonil'),
(230003, 'MANUEL', 'ACEVEZ', '2023-12-31', 'KDKJASKJ7', 1, 'Derecho', 'Derecho', 'ACEVEZ', 1, 'Varonil'),
(230004, 'JESUS', 'S', '2023-01-01', 'KDKJASKJ7', 7, 'Derecho', 'Derecho', 'S', 1, 'Varonil'),
(230005, 'HILARIO', 'GUTIERREZ', '2023-12-31', 'KDKJASKJ7', 9, 'Derecho', 'Derecho', 'GUTIERREZ', 1, 'Varonil'),
(230006, 'BRAYAN', 'ARMENTA', '2023-12-31', 'hhjghjjhjh', 6, 'Derecho', 'Derecho', 'ARMENTA', 1, 'Varonil'),
(230007, 'JOAQUIN', 'GUTIERREZ', '2023-12-31', 'KDKJASKJ7', 3, 'Derecho', 'Derecho', 'GUTIERREZ', 1, 'Varonil'),
(230008, 'JUAN', 'R. GUZMAN', '2023-12-31', 'hhjghjjhjh', 4, 'Derecho', 'Derecho', 'GUZMAN', 1, 'Varonil'),
(230009, 'CESAR', 'ARAUJO', '2023-12-31', 'KDKJASKJ7', 5, 'Derecho', 'Derecho', 'ARAUJO', 1, 'Varonil'),
(230010, 'JORGE', 'GUTIERREZ', '2023-12-31', 'KDKJASKJ7', 2, 'Derecho', 'Derecho', 'GUTIERREZ', 1, 'Varonil'),
(230011, 'ARMANDO', 'ROCHA', '2023-12-31', 'hhjghjjhjh', 9, 'Derecho', 'Derecho', 'ROCHA', 1, 'Varonil'),
(230012, 'JORGE', 'TAPIA', '2023-12-31', '88888888huuhu', 4, 'Derecho', 'Derecho', 'TAPIA', 1, 'Varonil'),
(230013, 'REFUJIO', 'ARMENTA', '2022-12-31', 'hhjghjjhjh', 1, 'Derecho', 'Derecho', 'ARMENTA', 1, 'Varonil'),
(230014, 'OMAR', 'HERNANDEZ', '2023-12-31', 'hhjghjjhjh', 8, 'Derecho', 'Derecho', 'HERNANDEZ', 1, 'Varonil'),
(230015, 'SAMUEL', 'HERNANDEZ', '2023-12-31', 'hhjghjjhjh', 9, 'Derecho', 'Derecho', 'HERNANDEZ', 1, 'Varonil'),
(230016, 'SERGIO', 'S', '2023-12-31', 'hhjghjjhjh', 5, 'Derecho', 'Derecho', 'S', 1, 'Varonil'),
(230017, 'LUIS', 'A.L', '2023-12-31', 'KDKJASKJ7', 6, 'Derecho', 'Derecho', 'A.L', 1, 'Varonil'),
(230018, 'ARMANDO', 'R', '2023-12-31', 'hhjghjjhjh', 4, 'Derecho', 'Derecho', 'R', 1, 'Varonil'),
(230019, 'GUMERCINDO', 'S', '2023-12-31', '88888888huuhuh', 2, 'Derecho', 'Derecho', 'S', 1, 'Varonil'),
(230020, 'CRISTOBAL', 'A', '2023-12-31', 'KDKJASKJ7', 10, 'Derecho', 'Derecho', 'A', 1, 'Varonil'),
(230021, 'OMAR', 'G', '2023-12-31', 'KDKJASKJ7', 3, 'Derecho', 'Derecho', 'G', 1, 'Varonil'),
(230022, 'SERGIO', 'L', '2023-12-31', 'hhjghjjhjh', 7, 'Derecho', 'Derecho', 'L', 1, 'Varonil'),
(230023, 'CESAR', 'LOPEZ', '2023-12-31', 'KDKJASKJ7', 1, 'Izquierdo', 'Izquierdo', 'LOPEZ', 1, 'Varonil'),
(230024, 'JULIO', 'JAUREGUI', '2023-12-31', 'hhjghjjhjh', 7, 'Derecho', 'Derecho', 'JAUREGUI', 1, 'Varonil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lanzadores`
--

CREATE TABLE `lanzadores` (
  `idLanzadores` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL,
  `IP` float DEFAULT NULL,
  `BA` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `H` int(11) DEFAULT NULL,
  `BB` int(11) DEFAULT NULL,
  `K` int(11) DEFAULT NULL,
  `PCA` float DEFAULT NULL,
  `POP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lanzadores`
--

INSERT INTO `lanzadores` (`idLanzadores`, `idJuego`, `idAfiliacion`, `IP`, `BA`, `C`, `H`, `BB`, `K`, `PCA`, `POP`) VALUES
(1, 1, 230023, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 230003, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 2, 230012, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 2, 230012, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 2, 230001, 0, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `idLiga` int(11) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `presidente` varchar(50) DEFAULT NULL,
  `coordinador` varchar(50) DEFAULT NULL,
  `mapa` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `redes` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`idLiga`, `descripcion`, `presidente`, `coordinador`, `mapa`, `direccion`, `telefono`, `redes`) VALUES
(1, 'LIGA SABATINA', 'JULIO', 'PABLO', 'QUILA', 'QUILA', '6677552551', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejadores`
--

CREATE TABLE `manejadores` (
  `idTecnico` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `manejadores`
--

INSERT INTO `manejadores` (`idTecnico`, `nombre`, `tipo`) VALUES
(1, 'REFUJIO', 'MANAGER'),
(2, 'MANUEL  RUBIO', 'coach'),
(3, 'HERNANDEZ', 'MANAGER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parques`
--

CREATE TABLE `parques` (
  `idCampo` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parques`
--

INSERT INTO `parques` (`idCampo`, `descripcion`) VALUES
(1, 'EL MELON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rosters`
--

CREATE TABLE `rosters` (
  `idRoster` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `idTemporada` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rosters`
--

INSERT INTO `rosters` (`idRoster`, `idEquipo`, `idTemporada`, `idAfiliacion`) VALUES
(1, 1, 1, 230012),
(2, 1, 1, 230011),
(3, 1, 1, 230006),
(4, 1, 1, 230009),
(5, 1, 1, 230000),
(6, 1, 1, 230005),
(7, 1, 1, 230004),
(8, 1, 1, 230007),
(9, 1, 1, 230010),
(10, 1, 1, 230002),
(11, 1, 1, 230008),
(12, 1, 1, 230003),
(13, 1, 1, 230001),
(14, 1, 1, 230013),
(15, 1, 1, 230012),
(16, 2, 1, 230018),
(17, 2, 1, 230023),
(18, 2, 1, 230020),
(19, 2, 1, 230021),
(20, 2, 1, 230015),
(21, 2, 1, 230017),
(22, 2, 1, 230016),
(23, 2, 1, 230019),
(24, 2, 1, 230023),
(25, 2, 1, 230014),
(26, 1, 1, 230024),
(27, 2, 1, 230022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `idTemporada` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `idLiga` int(11) DEFAULT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `categoria` varchar(12) DEFAULT NULL,
  `momento` varchar(15) DEFAULT NULL,
  `temporada` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`idTemporada`, `nombre`, `idLiga`, `grupo`, `categoria`, `momento`, `temporada`) VALUES
(1, 'SABATINA', 1, '1', '1', 'HOY', '2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idTurno` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `idBateadores` int(11) NOT NULL,
  `turno` int(11) DEFAULT NULL,
  `inning` int(11) DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `resultado` varchar(2) DEFAULT NULL,
  `carrera` bit(1) DEFAULT NULL,
  `producciones` int(11) DEFAULT NULL,
  `detalles` varchar(20) DEFAULT NULL,
  `idLanzador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idTurno`, `idJuego`, `idEquipo`, `idBateadores`, `turno`, `inning`, `posicion`, `tipo`, `resultado`, `carrera`, `producciones`, `detalles`, `idLanzador`) VALUES
(4, 1, 1, 1, 1, 1, 8, 'CE', 'BB', b'1', 1, 'base por bolas', 1),
(5, 1, 1, 2, 2, 1, 9, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(6, 1, 1, 3, 3, 1, 5, 'CE', 'H', b'0', 1, 'Hit', 1),
(7, 1, 1, 4, 4, 1, 1, 'CE', 'BB', b'0', 0, 'Base por bolas', 1),
(8, 1, 1, 5, 5, 1, 3, 'CE', 'K', b'0', 0, 'ponche', 1),
(9, 1, 1, 6, 6, 1, 4, 'CE', 'F5', b'0', 0, 'ELEVADO AL 3RA BASE', 1),
(10, 1, 1, 7, 7, 2, 6, 'CE', 'H', b'0', 0, 'Hit', 1),
(11, 1, 1, 8, 8, 2, 7, 'CE', 'BB', b'0', 0, 'base por bolas', 1),
(12, 1, 1, 9, 9, 2, 2, 'CE', 'K', b'0', 0, 'ponche', 1),
(13, 1, 1, 1, 10, 2, 8, 'CE', 'K', b'0', 0, 'ponche', 1),
(14, 1, 1, 2, 11, 3, 9, 'CE', 'F5', b'0', 0, 'elevador al 3ra', 1),
(15, 1, 1, 3, 12, 3, 5, 'CE', 'H', b'0', 0, 'hit', 1),
(16, 1, 1, 4, 13, 3, 1, 'CE', 'K', b'0', 0, NULL, 1),
(17, 1, 1, 5, 14, 3, 3, 'CE', 'H', b'0', 0, 'hit', 1),
(18, 1, 1, 6, 15, 3, 4, 'CE', '23', b'0', 0, 'catcher a primera', 1),
(19, 1, 1, 7, 16, 4, 6, 'CE', 'F6', b'0', 0, 'ELEVADO AL SHORT', 1),
(20, 1, 1, 8, 17, 4, 7, 'CE', 'F8', b'0', 0, 'ELEVADO AL CENTRAL', 1),
(21, 1, 1, 9, 18, 4, 2, 'CE', 'K', b'0', 0, NULL, 1),
(22, 1, 1, 1, 19, 5, 8, 'CE', '93', b'0', 0, 'OUT POR JD', 1),
(23, 1, 1, 10, 20, 5, 3, 'CE', 'H', b'0', 0, NULL, 1),
(24, 1, 1, 3, 21, 5, 1, 'CE', 'BO', b'0', 0, 'BOLA OCUPADA', 1),
(25, 1, 1, 4, 22, 5, 6, 'CE', '64', b'0', 0, 'ROLA AL SHOR', 1),
(26, 1, 1, 5, 23, 6, 4, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(27, 1, 1, 6, 24, 6, 4, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(28, 1, 1, 7, 25, 6, 9, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(29, 1, 1, 12, 26, 7, 9, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(30, 1, 1, 5, 27, 7, 9, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(31, 1, 1, 13, 28, 7, 7, 'CE', 'K', b'0', 0, 'PONCHE', 1),
(32, 1, 2, 14, 1, 1, 8, 'CE', 'E6', b'1', 0, 'ERROR DEL SHORT', 2),
(33, 1, 2, 15, 2, 1, 9, 'CE', '63', b'0', 0, 'ROLA AL SHORT', 2),
(34, 1, 2, 16, 3, 1, 6, 'CE', 'K', b'0', 0, 'PONCHE', 2),
(35, 1, 2, 17, 4, 1, 5, 'CE', 'H2', b'1', 1, 'DOBLETE', 2),
(36, 1, 2, 18, 5, 1, 4, 'CE', 'H', b'0', 1, NULL, 2),
(37, 1, 2, 19, 6, 1, 2, 'CE', 'BB', b'0', 0, 'BASE POR BOLAS', 2),
(38, 1, 2, 20, 7, 1, 10, 'CE', 'K', b'0', 0, 'PONCHE', 2),
(39, 1, 2, 14, 8, 2, 3, 'CE', 'BG', b'0', 0, 'BASE POR GOLPE', 2),
(40, 1, 2, 22, 9, 2, 7, 'CE', 'F8', b'0', 0, 'ELEVADO AL CENTRAL', 2),
(41, 1, 2, 23, 10, 2, 1, 'CE', 'BB', b'1', 0, 'BASE POR BOLAS', 2),
(42, 1, 2, 14, 11, 2, 8, 'ED', 'H3', b'1', 1, 'TRIPLE', 2),
(43, 1, 2, 15, 12, 2, 9, 'CE', 'H', b'1', 1, 'SENCILLO', 2),
(44, 1, 2, 16, 13, 2, 6, 'CE', 'E4', b'1', 0, 'ERROR DEL SEGUNDA', 2),
(45, 1, 2, 17, 14, 2, 5, 'CE', 'H', b'1', 1, 'SENCILLO', 2),
(46, 1, 2, 18, 15, 2, 4, 'CE', 'H3', b'1', 2, NULL, 2),
(47, 1, 2, 19, 16, 2, 2, 'CE', 'H', b'1', 1, 'SENCILLO', 2),
(48, 1, 2, 20, 17, 2, 10, 'CE', 'BG', b'0', 0, 'PELOTAZO', 2),
(49, 1, 2, 21, 18, 2, 3, 'CE', 'K', b'0', 0, NULL, 2),
(50, 1, 2, 22, 19, 2, 7, 'CE', '63', b'0', 0, 'ROLA', 2),
(51, 1, 2, 23, 20, 3, 1, 'CE', 'H', b'1', 0, 'SENCILLO', 2),
(52, 1, 2, 14, 21, 3, 8, 'CE', 'F7', b'0', 0, 'ELEVADO AL IZQUIERDO', 2),
(53, 1, 2, 15, 22, 3, 9, 'CE', 'H', b'0', 1, 'SENCILLO', 2),
(54, 1, 2, 16, 23, 3, 6, 'CE', 'BB', b'0', 0, 'BASE POR BOLAS', 2),
(55, 1, 2, 17, 24, 3, 4, 'CE', '53', b'0', 0, NULL, 2),
(56, 1, 2, 18, 25, 3, 4, 'CE', '53', b'0', 0, NULL, 2),
(57, 1, 2, 19, 26, 4, 2, 'CE', '53', b'0', 0, 'ROLA EL 3RA', 2),
(58, 1, 2, 20, 27, 4, 10, 'CE', 'H', b'1', 0, NULL, 2),
(59, 1, 2, 21, 28, 4, 3, 'CE', 'H', b'1', 1, 'SENCILLO', 2),
(60, 1, 2, 22, 29, 4, 7, 'CE', 'K', b'0', 0, 'PONCHE', 2),
(61, 1, 2, 23, 30, 4, 1, 'CE', 'H', b'0', 1, 'SENCILLO', 2),
(62, 1, 2, 14, 31, 4, 8, 'CE', 'H', b'0', 0, 'SENCILLO CON AP', 2),
(63, 1, 2, 15, 32, 5, 9, 'CE', '43', b'0', 0, NULL, 2),
(64, 1, 2, 16, 33, 5, 6, 'CE', 'H', b'1', 0, 'SENCILLO', 2),
(65, 1, 2, 17, 34, 5, 5, 'CE', 'F7', b'0', 0, 'ELEVADO AL IZQUIERDO', 2),
(66, 1, 2, 18, 35, 5, 4, 'CE', 'H2', b'1', 1, NULL, 2),
(67, 1, 2, 19, 36, 5, 2, 'CE', 'H', b'1', 1, 'SENCILLO', 2),
(68, 1, 2, 20, 37, 5, 10, 'CE', 'H', b'1', 1, NULL, 2),
(69, 1, 2, 21, 38, 5, 3, 'CE', 'H1', b'0', 0, 'SENCILLO', 2),
(70, 1, 2, 22, 39, 5, 7, 'CE', 'H', b'0', 0, 'SENCILLO', 2),
(71, 1, 2, 23, 40, 5, 1, 'CE', 'H', b'0', 0, 'SENCILLO', 2),
(72, 1, 2, 14, 41, 6, 8, 'CE', 'K', b'0', 0, 'PONCHE', 2),
(73, 1, 2, 15, 42, 6, 9, 'CE', 'E9', b'1', 0, 'error derecho', 2),
(74, 1, 2, 16, 43, 6, 6, 'CE', 'L6', b'0', 0, NULL, 2),
(75, 1, 2, 17, 44, 6, 5, 'CE', 'E5', b'0', 0, 'ERROR 3RA', 2),
(76, 1, 2, 18, 45, 6, 4, 'CE', 'E5', b'0', 0, NULL, 2),
(77, 1, 2, 19, 46, 6, 2, 'CE', 'BG', b'0', 0, NULL, 2),
(78, 1, 2, 20, 47, 6, 10, 'CE', '53', b'0', 0, 'ROLA', 1),
(79, 1, 2, 21, 48, 7, 3, 'CE', 'F9', b'0', 0, NULL, 2),
(80, 1, 2, 22, 49, 7, 7, 'CE', 'F1', b'0', 0, NULL, 2),
(81, 1, 2, 23, 50, 7, 1, 'ED', 'K', b'0', 0, NULL, 2),
(82, 2, 1, 24, 1, 2, 1, 'CE', '2', b'0', 2, '2', 3),
(83, 2, 1, 24, 2, 2, 2, 'CE', '2', b'0', 2, '2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'CRUZ DEL ANGEL', 'cruz.a.rubio7@gail.com', '$2y$10$BqTXejN/CYKvprzjwRpXSe/MR2mh6RLfPcKeYR0cITNp7yZYy.yfG', NULL),
(2, 'raysk', 'francogarciaoscar@gmail.com', '$2y$10$/zdu.J36gGEXD5yziKi95Okwxa06oE76J/c9B9sZYvYjE49WLBYDC', 's3NEEW2GhFQgnE8AuItu3R91GyIkRUQJwywkxZQyQbclo6fMaKDDoURWdIWV'),
(3, 'raysk', 'francogarciaoscar@gmail.com', '$2y$10$0QK1Hw7jHKcUww7KDO9l/eKJzpC5eRlbS2uP1jlvKQMORPRgNwQYm', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ampayers`
--
ALTER TABLE `ampayers`
  ADD PRIMARY KEY (`idAmpayer`);

--
-- Indices de la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  ADD PRIMARY KEY (`idCuerpo`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idAmpayer` (`idAmpayer`);

--
-- Indices de la tabla `bateadores`
--
ALTER TABLE `bateadores`
  ADD PRIMARY KEY (`idBateadores`),
  ADD KEY `idAfiliacion` (`idAfiliacion`),
  ADD KEY `idJuego` (`idJuego`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `idTecnico` (`idTecnico`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idJuego`),
  ADD KEY `idTemporada` (`idTemporada`),
  ADD KEY `idCampo` (`idCampo`),
  ADD KEY `idEquipoVisitante` (`idEquipoVisitante`),
  ADD KEY `idEquipoLocal` (`idEquipoLocal`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idAfiliacion`);

--
-- Indices de la tabla `lanzadores`
--
ALTER TABLE `lanzadores`
  ADD PRIMARY KEY (`idLanzadores`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idAfiliacion` (`idAfiliacion`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`idLiga`);

--
-- Indices de la tabla `manejadores`
--
ALTER TABLE `manejadores`
  ADD PRIMARY KEY (`idTecnico`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parques`
--
ALTER TABLE `parques`
  ADD PRIMARY KEY (`idCampo`);

--
-- Indices de la tabla `rosters`
--
ALTER TABLE `rosters`
  ADD PRIMARY KEY (`idRoster`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idTemporada` (`idTemporada`),
  ADD KEY `idAfiliacion` (`idAfiliacion`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`idTemporada`),
  ADD KEY `idLiga` (`idLiga`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`idTurno`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idLanzador` (`idLanzador`),
  ADD KEY `idBateadores` (`idBateadores`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ampayers`
--
ALTER TABLE `ampayers`
  MODIFY `idAmpayer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  MODIFY `idCuerpo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bateadores`
--
ALTER TABLE `bateadores`
  MODIFY `idBateadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lanzadores`
--
ALTER TABLE `lanzadores`
  MODIFY `idLanzadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `idLiga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `manejadores`
--
ALTER TABLE `manejadores`
  MODIFY `idTecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parques`
--
ALTER TABLE `parques`
  MODIFY `idCampo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rosters`
--
ALTER TABLE `rosters`
  MODIFY `idRoster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `idTemporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `idTurno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  ADD CONSTRAINT `ampayersjuego_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`),
  ADD CONSTRAINT `ampayersjuego_ibfk_2` FOREIGN KEY (`idAmpayer`) REFERENCES `ampayers` (`idAmpayer`);

--
-- Filtros para la tabla `bateadores`
--
ALTER TABLE `bateadores`
  ADD CONSTRAINT `bateadores_ibfk_1` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`),
  ADD CONSTRAINT `bateadores_ibfk_2` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`);

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`idTecnico`) REFERENCES `manejadores` (`idTecnico`);

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`idTemporada`) REFERENCES `temporadas` (`idTemporada`),
  ADD CONSTRAINT `juegos_ibfk_2` FOREIGN KEY (`idCampo`) REFERENCES `parques` (`idCampo`),
  ADD CONSTRAINT `juegos_ibfk_3` FOREIGN KEY (`idEquipoVisitante`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `juegos_ibfk_4` FOREIGN KEY (`idEquipoLocal`) REFERENCES `equipos` (`idEquipo`);

--
-- Filtros para la tabla `lanzadores`
--
ALTER TABLE `lanzadores`
  ADD CONSTRAINT `lanzadores_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`),
  ADD CONSTRAINT `lanzadores_ibfk_2` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`);

--
-- Filtros para la tabla `rosters`
--
ALTER TABLE `rosters`
  ADD CONSTRAINT `rosters_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `rosters_ibfk_2` FOREIGN KEY (`idTemporada`) REFERENCES `temporadas` (`idTemporada`),
  ADD CONSTRAINT `rosters_ibfk_3` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`);

--
-- Filtros para la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD CONSTRAINT `temporadas_ibfk_1` FOREIGN KEY (`idLiga`) REFERENCES `ligas` (`idLiga`);

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `turnos_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`),
  ADD CONSTRAINT `turnos_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `turnos_ibfk_3` FOREIGN KEY (`idLanzador`) REFERENCES `lanzadores` (`idLanzadores`),
  ADD CONSTRAINT `turnos_ibfk_4` FOREIGN KEY (`idBateadores`) REFERENCES `bateadores` (`idBateadores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
