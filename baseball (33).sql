-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 16:22:42
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bateadores`
--

CREATE TABLE `bateadores` (
  `idBateadores` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL,
  `AB` int(2) DEFAULT NULL,
  `C` int(1) DEFAULT NULL,
  `H` int(2) DEFAULT NULL,
  `CP` int(2) DEFAULT NULL,
  `BB` int(2) DEFAULT NULL,
  `K` int(2) DEFAULT NULL,
  `PJE` float DEFAULT NULL,
  `OBP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idJuego` int(11) NOT NULL,
  `idTemporada` int(11) NOT NULL,
  `jornada` int(2) DEFAULT NULL,
  `idCampo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `clima` varchar(30) DEFAULT NULL,
  `idEquipoVisitante` int(11) NOT NULL,
  `idEquipoLocal` int(11) NOT NULL,
  `final` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `posicion` int(2) DEFAULT NULL,
  `golpea` varchar(15) DEFAULT NULL,
  `tira` varchar(15) DEFAULT NULL,
  `abreviacion` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `rama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lanzadores`
--

CREATE TABLE `lanzadores` (
  `idLanzadores` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL,
  `IP` float DEFAULT NULL,
  `BA` int(2) DEFAULT NULL,
  `C` int(2) DEFAULT NULL,
  `H` int(2) DEFAULT NULL,
  `BB` int(2) DEFAULT NULL,
  `K` int(2) DEFAULT NULL,
  `PCA` float DEFAULT NULL,
  `POP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `telefono` int(15) DEFAULT NULL,
  `redes` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejadores`
--

CREATE TABLE `manejadores` (
  `idTecnico` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parques`
--

CREATE TABLE `parques` (
  `idCampo` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `idTemporada` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `idLiga` int(11) NOT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `categoria` varchar(12) DEFAULT NULL,
  `momento` varchar(15) DEFAULT NULL,
  `temporada` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idTurno` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `idAfiliacion` int(11) NOT NULL,
  `turno` int(2) DEFAULT NULL,
  `inning` int(100) DEFAULT NULL,
  `posicion` int(2) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `resultado` varchar(2) DEFAULT NULL,
  `carrera` bit(1) DEFAULT NULL,
  `producciones` int(1) DEFAULT NULL,
  `detalles` varchar(20) DEFAULT NULL,
  `idLanzador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `idAmpayer` (`idAmpayer`),
  ADD KEY `idJuego` (`idJuego`);

--
-- Indices de la tabla `bateadores`
--
ALTER TABLE `bateadores`
  ADD PRIMARY KEY (`idBateadores`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idAfiliacion` (`idAfiliacion`);

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
  ADD KEY `idAfiliacion` (`idAfiliacion`),
  ADD KEY `idJuego` (`idJuego`);

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
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idAfiliacion` (`idAfiliacion`),
  ADD KEY `idJuego` (`idJuego`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ampayers`
--
ALTER TABLE `ampayers`
  MODIFY `idAmpayer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  MODIFY `idCuerpo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bateadores`
--
ALTER TABLE `bateadores`
  MODIFY `idBateadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lanzadores`
--
ALTER TABLE `lanzadores`
  MODIFY `idLanzadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `idLiga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `manejadores`
--
ALTER TABLE `manejadores`
  MODIFY `idTecnico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parques`
--
ALTER TABLE `parques`
  MODIFY `idCampo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rosters`
--
ALTER TABLE `rosters`
  MODIFY `idRoster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `idTemporada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  ADD CONSTRAINT `ampayersjuego_ibfk_1` FOREIGN KEY (`idAmpayer`) REFERENCES `ampayers` (`idAmpayer`),
  ADD CONSTRAINT `ampayersjuego_ibfk_2` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`);

--
-- Filtros para la tabla `bateadores`
--
ALTER TABLE `bateadores`
  ADD CONSTRAINT `bateadores_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`),
  ADD CONSTRAINT `bateadores_ibfk_2` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`);

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
  ADD CONSTRAINT `lanzadores_ibfk_1` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`),
  ADD CONSTRAINT `lanzadores_ibfk_2` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`);

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
  ADD CONSTRAINT `turnos_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `turnos_ibfk_3` FOREIGN KEY (`idAfiliacion`) REFERENCES `jugadores` (`idAfiliacion`),
  ADD CONSTRAINT `turnos_ibfk_4` FOREIGN KEY (`idJuego`) REFERENCES `juegos` (`idJuego`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
