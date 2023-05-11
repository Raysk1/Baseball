-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2023 a las 16:19:30
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
(1, 'Oscar', 'Del', '2023-05-05', 'FAGO011017HSLRRSA7', 'OS. Franco', NULL),
(2, 'Oscar', 'Del angel', '2023-05-05', 'FAGO011017HSLRRSA7', 'OS. Franco', NULL),
(3, 'Oscar', 'Del angel', '2023-05-05', 'FAGO011017HSLRRSA7', 'OS. Franco', NULL);

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
  `AB` int(2) DEFAULT NULL,
  `C` int(1) DEFAULT NULL,
  `H` int(2) DEFAULT NULL,
  `CP` int(2) DEFAULT NULL,
  `BB` int(2) DEFAULT NULL,
  `K` int(2) DEFAULT NULL,
  `PJE` float DEFAULT NULL,
  `OBP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bateadores`
--

INSERT INTO `bateadores` (`idBateadores`, `idJuego`, `idAfiliacion`, `AB`, `C`, `H`, `CP`, `BB`, `K`, `PJE`, `OBP`) VALUES
(1, 1, 230000, 2, 2, 2, 2, 2, 2, 2, 2);

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
(3, 'dsd', 'sddsdsds', 1),
(4, 'dwda', '1', 1),
(5, 'dsd', 'sddsdsds', 1);

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

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idJuego`, `idTemporada`, `jornada`, `idCampo`, `fecha`, `hora`, `clima`, `idEquipoVisitante`, `idEquipoLocal`, `final`) VALUES
(1, 1, 2, 1, '2023-05-11', '18:39:00', 'Lluvioso', 3, 4, 1);

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

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`idAfiliacion`, `nombre`, `apellidos`, `fechaNacimiento`, `curp`, `posicion`, `golpea`, `tira`, `abreviacion`, `status`, `rama`) VALUES
(230000, 'Laury', 'Schumm Schuster', '1977-02-02', 'oryu224264oageos4q', 1, 'Ambidiestro', 'Ambidiestro', 'fjq.', 1, 'Femenil'),
(230001, 'Dena', 'Kutch Cummerata', '2009-10-10', 'wraw378443nvsulc9z', 4, 'Derecho', 'Izquierdo', 'gpw.', 1, 'Femenil'),
(230002, 'Josephine', 'Morissette Conn', '2011-02-03', 'vsev772582wflupz8a', 9, 'Ambidiestro', 'Derecho', 'oix.', 1, 'Femenil'),
(230003, 'Marie', 'Bashirian Gerlach', '2014-08-23', 'fkvb579874qvtgre2z', 7, 'Izquierdo', 'Ambidiestro', 'bxg.', 1, 'Femenil'),
(230004, 'Bernadette', 'O\'Kon Green', '2020-06-18', 'qdcs816740lrijqo4s', 11, 'Izquierdo', 'Derecho', 'suj.', 1, 'Femenil'),
(230005, 'Jeremie', 'McDermott Yundt', '1975-01-18', 'xjpk826178xbcjtb6c', 3, 'Izquierdo', 'Derecho', 'usq.', 1, 'Varonil'),
(230006, 'Heidi', 'Armstrong Collins', '2001-12-20', 'tgsh796629nhfqsl3b', 4, 'Ambidiestro', 'Derecho', 'cuw.', 1, 'Femenil'),
(230007, 'Effie', 'Larkin Wolff', '2000-08-12', 'ojyl509446jnjtke0h', 9, 'Ambidiestro', 'Izquierdo', 'drz.', 1, 'Femenil'),
(230008, 'Cyril', 'Barrows Ward', '2000-04-06', 'junf612864etzujq6a', 10, 'Ambidiestro', 'Izquierdo', 'yiy.', 1, 'Varonil'),
(230009, 'Morgan', 'Gerlach Medhurst', '2011-11-27', 'dcin118040pmirjq2a', 11, 'Derecho', 'Derecho', 'wjl.', 1, 'Varonil'),
(230010, 'Quinten', 'Wehner Erdman', '1980-12-10', 'erzp959631rdqbyp8p', 11, 'Derecho', 'Derecho', 'opi.', 1, 'Varonil'),
(230011, 'Brady', 'Upton Ratke', '2000-01-27', 'ptnv086875mrpaqe3v', 8, 'Derecho', 'Izquierdo', 'dlh.', 1, 'Varonil'),
(230012, 'Elda', 'Bergnaum West', '1988-02-16', 'vnvd674057kpwxjv1y', 4, 'Derecho', 'Ambidiestro', 'tyg.', 1, 'Femenil'),
(230013, 'Carroll', 'Kerluke Hamill', '2000-10-19', 'wnec152191cqkjyu7i', 1, 'Ambidiestro', 'Ambidiestro', 'ivk.', 1, 'Varonil'),
(230014, 'Herminia', 'Kris Harvey', '2009-04-03', 'pwev816344eumrda7j', 11, 'Izquierdo', 'Ambidiestro', 'bia.', 1, 'Femenil'),
(230015, 'Loy', 'Kshlerin Mueller', '2009-10-04', 'cuzh896552dghkmj4p', 4, 'Derecho', 'Derecho', 'dqh.', 1, 'Varonil'),
(230016, 'Taylor', 'Schmidt Stamm', '1983-09-09', 'lefc354609moukyd3p', 8, 'Derecho', 'Ambidiestro', 'bai.', 1, 'Varonil'),
(230017, 'Graciela', 'Cummings Gislason', '2021-05-21', 'lkgf946326qxpzxn8h', 1, 'Derecho', 'Ambidiestro', 'geo.', 1, 'Femenil'),
(230018, 'Aracely', 'Dickens Schowalter', '1980-03-09', 'ejno374830aulcom4e', 6, 'Ambidiestro', 'Derecho', 'jou.', 1, 'Femenil'),
(230019, 'Jazmin', 'Swift Moore', '2020-08-12', 'fbdg311019ohtkky8h', 2, 'Ambidiestro', 'Izquierdo', 'oea.', 1, 'Femenil'),
(230020, 'Pablo', 'Gaylord Douglas', '1970-05-15', 'lpck567612jcldog8k', 2, 'Izquierdo', 'Izquierdo', 'bho.', 1, 'Varonil'),
(230021, 'Maegan', 'Cummerata Mueller', '2002-03-28', 'rtas926971sbmjdp0i', 2, 'Derecho', 'Izquierdo', 'dsh.', 1, 'Femenil'),
(230022, 'Audie', 'Cassin Funk', '2004-02-01', 'uuvj126081vzedqq4c', 1, 'Izquierdo', 'Derecho', 'hrt.', 1, 'Femenil'),
(230023, 'Kayla', 'Deckow Boyer', '1990-02-25', 'mkjs793426edzkug0i', 8, 'Ambidiestro', 'Ambidiestro', 'xys.', 1, 'Femenil'),
(230024, 'Zula', 'Simonis Welch', '1981-05-14', 'yqiu904559yucwpd7c', 11, 'Izquierdo', 'Izquierdo', 'ypt.', 1, 'Femenil'),
(230025, 'Brown', 'Fadel Fadel', '2015-02-24', 'bimp305779elasvf0f', 8, 'Ambidiestro', 'Ambidiestro', 'ygc.', 1, 'Varonil'),
(230026, 'Foster', 'Bayer Barton', '1973-11-29', 'ydlu329137hdtgpi0r', 1, 'Izquierdo', 'Ambidiestro', 'jzu.', 1, 'Varonil'),
(230027, 'Lawson', 'Hagenes Herzog', '2002-02-06', 'jkoz771161eqwoww8e', 2, 'Ambidiestro', 'Izquierdo', 'xcm.', 1, 'Varonil'),
(230028, 'Rosario', 'Ondricka Grady', '2022-06-20', 'qqcz231627pnxioj6v', 9, 'Ambidiestro', 'Derecho', 'tbf.', 1, 'Varonil'),
(230029, 'Cristal', 'Weissnat Fisher', '1994-03-23', 'levk540880oqvlvr6p', 11, 'Izquierdo', 'Izquierdo', 'gsy.', 1, 'Femenil'),
(230030, 'Janelle', 'Will Crona', '1974-10-07', 'xyla685503ukovhp2a', 11, 'Izquierdo', 'Ambidiestro', 'axu.', 1, 'Femenil'),
(230031, 'Jeanne', 'Hagenes Denesik', '2004-10-13', 'izkn608353udvqoa1i', 6, 'Izquierdo', 'Izquierdo', 'fki.', 1, 'Femenil'),
(230032, 'Ruthie', 'Hammes Greenfelder', '2014-02-09', 'zbqc316468yvmbek7j', 10, 'Izquierdo', 'Derecho', 'uas.', 1, 'Femenil'),
(230033, 'Kim', 'Homenick Bradtke', '2006-09-02', 'dcbk082035nyhoxx3f', 6, 'Izquierdo', 'Ambidiestro', 'jrg.', 1, 'Varonil'),
(230034, 'Destany', 'Sawayn Bednar', '2022-12-15', 'jhjz916050unyokz7e', 4, 'Derecho', 'Derecho', 'sze.', 1, 'Femenil'),
(230035, 'Gladyce', 'Mante Dietrich', '1976-08-14', 'npdi736221popldd8l', 1, 'Derecho', 'Izquierdo', 'pfz.', 1, 'Femenil'),
(230036, 'Katelynn', 'Grant Bernhard', '2018-12-29', 'eabb279372utclrt2l', 2, 'Derecho', 'Izquierdo', 'jpe.', 1, 'Femenil'),
(230037, 'Ethan', 'Murphy Pouros', '1993-09-03', 'mnqx813056lrwkim5r', 6, 'Derecho', 'Izquierdo', 'vku.', 1, 'Varonil'),
(230038, 'Finn', 'Gibson Metz', '1978-01-28', 'mhhq838665uhlnqb0o', 10, 'Izquierdo', 'Ambidiestro', 'bfv.', 1, 'Varonil'),
(230039, 'Derek', 'Johnson Lueilwitz', '1976-12-23', 'towi892139keuufs0e', 10, 'Izquierdo', 'Ambidiestro', 'xpm.', 1, 'Varonil'),
(230040, 'Alexandra', 'Hagenes Kautzer', '1971-04-02', 'qgon282761nqpbsb8i', 7, 'Derecho', 'Ambidiestro', 'ork.', 1, 'Femenil'),
(230041, 'Meta', 'Mills Bogisich', '1986-10-15', 'rjla745363eeipxc3s', 9, 'Derecho', 'Derecho', 'ukl.', 1, 'Femenil'),
(230042, 'Kay', 'Kautzer Marks', '1991-04-20', 'mlht367284mowyfu6h', 5, 'Ambidiestro', 'Derecho', 'qej.', 1, 'Varonil'),
(230043, 'Mathilde', 'Batz Christiansen', '1980-08-09', 'uhpv159631khbaza0t', 1, 'Ambidiestro', 'Izquierdo', 'kko.', 1, 'Femenil'),
(230044, 'Maxine', 'Rosenbaum Brown', '1981-08-02', 'ztet496059jalzip5v', 3, 'Ambidiestro', 'Izquierdo', 'afe.', 1, 'Varonil'),
(230045, 'Murray', 'Hauck Deckow', '1999-10-13', 'nhce832893uhidyz5k', 4, 'Ambidiestro', 'Izquierdo', 'vet.', 1, 'Varonil'),
(230046, 'Johnathan', 'Bechtelar Bednar', '1978-08-07', 'yiio864355rqublm8l', 1, 'Ambidiestro', 'Derecho', 'gtg.', 1, 'Varonil'),
(230047, 'Lorna', 'Homenick Swift', '1984-07-12', 'hobg500416bijimz8q', 5, 'Ambidiestro', 'Ambidiestro', 'uas.', 1, 'Femenil'),
(230048, 'Sylvia', 'Bednar Rosenbaum', '1986-05-08', 'tzsm760105wsxgph3i', 9, 'Izquierdo', 'Derecho', 'jfk.', 1, 'Femenil'),
(230049, 'Rebecca', 'Lueilwitz Jacobson', '1977-10-19', 'ajmu191501mtfcjm5k', 5, 'Ambidiestro', 'Derecho', 'aey.', 1, 'Femenil'),
(230050, 'Patience', 'Hand D\'Amore', '1993-02-18', 'ytzi963000dkdava6o', 2, 'Izquierdo', 'Izquierdo', 'otb.', 1, 'Femenil'),
(230051, 'Bradley', 'Emmerich Gerlach', '2008-11-16', 'pxlh128915fmstnc8p', 10, 'Izquierdo', 'Izquierdo', 'hjn.', 1, 'Varonil'),
(230052, 'Jamil', 'Mayert Gibson', '1994-05-24', 'bgvi311540aymnei0t', 4, 'Ambidiestro', 'Izquierdo', 'fsu.', 1, 'Varonil'),
(230053, 'Aniya', 'Carter Feil', '1972-11-09', 'xtlh536464hjcqys8q', 7, 'Derecho', 'Izquierdo', 'vpq.', 1, 'Femenil'),
(230054, 'Elroy', 'Moen Ruecker', '2004-08-24', 'yqek322129dmimzj1g', 11, 'Izquierdo', 'Derecho', 'hxf.', 1, 'Varonil'),
(230055, 'Obie', 'Sauer Parisian', '1999-07-30', 'cvvi213916gujjva5i', 4, 'Derecho', 'Ambidiestro', 'csp.', 1, 'Varonil'),
(230056, 'Franz', 'Kihn O\'Hara', '2010-02-15', 'dtlj480633yfjluw0g', 8, 'Ambidiestro', 'Ambidiestro', 'pmb.', 1, 'Varonil'),
(230057, 'Aileen', 'Kassulke Denesik', '1996-01-02', 'swcr102338eqfcss6y', 6, 'Ambidiestro', 'Derecho', 'xmg.', 1, 'Femenil'),
(230058, 'Marcelina', 'Blick Swaniawski', '2005-08-31', 'qruw301403xroggj4j', 4, 'Derecho', 'Izquierdo', 'buz.', 1, 'Femenil'),
(230059, 'Gus', 'Funk Jacobson', '1986-11-28', 'aizn970433ifuint2y', 3, 'Ambidiestro', 'Derecho', 'slk.', 1, 'Varonil'),
(230060, 'Nettie', 'Dietrich Gutmann', '2020-11-27', 'fleq069923drdawy9d', 9, 'Ambidiestro', 'Ambidiestro', 'dos.', 1, 'Femenil'),
(230061, 'Sabina', 'Crooks Boyer', '1977-08-16', 'bwyq960950ukdphd9v', 4, 'Izquierdo', 'Izquierdo', 'fcq.', 1, 'Femenil'),
(230062, 'Enoch', 'Maggio Gulgowski', '1971-01-01', 'qmmw519470qgbcta8n', 10, 'Izquierdo', 'Ambidiestro', 'vnz.', 1, 'Varonil'),
(230063, 'Kenyatta', 'Dare McCullough', '1997-03-02', 'sdcu559102nuuwfw2h', 5, 'Izquierdo', 'Izquierdo', 'hif.', 1, 'Femenil'),
(230064, 'Helene', 'Farrell Graham', '1983-11-28', 'omho731166nqwsfk6s', 9, 'Derecho', 'Ambidiestro', 'arc.', 1, 'Femenil'),
(230065, 'Aliza', 'Goldner Hermiston', '1978-12-18', 'rfgv585302afjxxx7p', 2, 'Derecho', 'Izquierdo', 'osl.', 1, 'Femenil'),
(230066, 'Charity', 'Lemke Larkin', '1993-09-04', 'yqol390390wzbbkd5c', 1, 'Izquierdo', 'Derecho', 'ngd.', 1, 'Femenil'),
(230067, 'Kyla', 'Hartmann Kub', '1994-05-29', 'ashx721837pstbww5h', 9, 'Ambidiestro', 'Derecho', 'jaw.', 1, 'Femenil'),
(230068, 'Emma', 'Conn Langosh', '1978-08-17', 'gmob645761iwlxjz1v', 1, 'Ambidiestro', 'Derecho', 'rxj.', 1, 'Femenil'),
(230069, 'Simeon', 'Fadel McClure', '1992-04-02', 'pxig954614mvktqg3b', 3, 'Derecho', 'Izquierdo', 'pql.', 1, 'Varonil'),
(230070, 'Selmer', 'Barrows Deckow', '2009-12-16', 'nolk404777gnxtbz0a', 4, 'Izquierdo', 'Izquierdo', 'zkc.', 1, 'Varonil'),
(230071, 'Libbie', 'Volkman Okuneva', '1980-12-18', 'xtyq983830mffogi9k', 5, 'Ambidiestro', 'Izquierdo', 'dvi.', 1, 'Femenil'),
(230072, 'Hershel', 'Gerlach Kautzer', '2000-04-27', 'xejm182886rpxrtr0p', 3, 'Derecho', 'Ambidiestro', 'skf.', 1, 'Varonil'),
(230073, 'Bethany', 'Kovacek Vandervort', '2018-01-22', 'qkbu639834gzaplb7i', 8, 'Ambidiestro', 'Izquierdo', 'fik.', 1, 'Femenil'),
(230074, 'Laverne', 'Robel Franecki', '1989-12-09', 'bzmy169312oebdmu2d', 3, 'Ambidiestro', 'Ambidiestro', 'kjg.', 1, 'Varonil'),
(230075, 'Rocky', 'Ullrich O\'Connell', '2000-06-10', 'adif642197seklsv0k', 11, 'Izquierdo', 'Derecho', 'kob.', 1, 'Varonil'),
(230076, 'Lolita', 'Russel Runolfsson', '1997-10-23', 'gqzh229631wfilzv7i', 2, 'Izquierdo', 'Ambidiestro', 'xco.', 1, 'Femenil'),
(230077, 'Ron', 'West Kreiger', '1992-04-22', 'wyxy963209ttsdwu7i', 11, 'Derecho', 'Ambidiestro', 'kkc.', 1, 'Varonil'),
(230078, 'Trystan', 'Lueilwitz Gorczany', '1979-12-03', 'xtqh002328durnco8z', 9, 'Derecho', 'Derecho', 'ewp.', 1, 'Varonil'),
(230079, 'Cameron', 'Brakus Rodriguez', '1995-12-03', 'jyre559850pduvod7m', 1, 'Izquierdo', 'Ambidiestro', 'uai.', 1, 'Varonil'),
(230080, 'Lauren', 'Gutkowski Ullrich', '1978-04-06', 'ydnj618454blnvdm9u', 10, 'Derecho', 'Ambidiestro', 'xrw.', 1, 'Femenil'),
(230081, 'Grayce', 'Kautzer Wilkinson', '2018-08-09', 'hvaz987862eotxjw1u', 8, 'Ambidiestro', 'Ambidiestro', 'pls.', 1, 'Varonil'),
(230082, 'Alva', 'Rempel Romaguera', '2002-10-27', 'apky681096rpxnjk4s', 10, 'Ambidiestro', 'Derecho', 'vbn.', 1, 'Femenil'),
(230083, 'Angelita', 'Mayer Jacobi', '2005-08-05', 'tyxe397626cpxkpz0z', 4, 'Derecho', 'Izquierdo', 'blq.', 1, 'Femenil'),
(230084, 'Karelle', 'Deckow Considine', '1997-03-05', 'qfzx314792agymhe6v', 10, 'Ambidiestro', 'Derecho', 'alu.', 1, 'Femenil'),
(230085, 'Kyler', 'Feil Goyette', '1973-10-29', 'mqdg046865ipsqob7r', 4, 'Derecho', 'Derecho', 'zxm.', 1, 'Varonil'),
(230086, 'Geo', 'Abbott Kassulke', '1989-06-06', 'yfbt909422fmpulp4j', 6, 'Derecho', 'Ambidiestro', 'vdo.', 1, 'Varonil'),
(230087, 'Tavares', 'Tillman Lueilwitz', '1992-10-07', 'maim652665yobaae9i', 8, 'Derecho', 'Ambidiestro', 'aaa.', 1, 'Varonil'),
(230088, 'Hadley', 'Hartmann Gulgowski', '1978-07-13', 'olie366898efaehn9b', 5, 'Izquierdo', 'Izquierdo', 'uju.', 1, 'Varonil'),
(230089, 'Mitchell', 'Graham Auer', '2022-08-08', 'oada386061wrntrn3n', 9, 'Derecho', 'Izquierdo', 'dhc.', 1, 'Varonil'),
(230090, 'Hortense', 'Kilback Morissette', '1986-12-08', 'twtz518993dxmreb6q', 5, 'Derecho', 'Derecho', 'wnc.', 1, 'Femenil'),
(230091, 'Valentina', 'Mitchell Halvorson', '1978-03-12', 'pthj144506ucjsms5g', 1, 'Ambidiestro', 'Izquierdo', 'lfm.', 1, 'Femenil'),
(230092, 'Camden', 'Cole Bartoletti', '1994-09-28', 'zwoi482456ltaten1m', 9, 'Derecho', 'Ambidiestro', 'jiv.', 1, 'Varonil'),
(230093, 'Glen', 'Feeney Kshlerin', '1980-11-23', 'hvib935586kkqpye3e', 9, 'Izquierdo', 'Derecho', 'hoj.', 1, 'Varonil'),
(230094, 'Tyrell', 'Denesik Langworth', '2010-10-26', 'emdf765081npcyej7t', 6, 'Derecho', 'Izquierdo', 'yir.', 1, 'Varonil'),
(230095, 'Ephraim', 'Hill Hane', '2004-04-18', 'ckzr330331swqmdn1y', 3, 'Ambidiestro', 'Ambidiestro', 'vbe.', 1, 'Varonil'),
(230096, 'Maryam', 'Walsh Schimmel', '1986-01-26', 'glfh578869sqilxp0m', 5, 'Derecho', 'Ambidiestro', 'aoq.', 1, 'Femenil'),
(230097, 'Mckenna', 'Glover Glover', '2012-11-08', 'pamn195739ecjlqz6r', 2, 'Izquierdo', 'Derecho', 'bof.', 1, 'Varonil'),
(230098, 'Rebecca', 'Bernhard Hodkiewicz', '2006-01-31', 'nlfp816337nsaobo4o', 10, 'Izquierdo', 'Ambidiestro', 'lbx.', 1, 'Femenil'),
(230099, 'Frederick', 'Friesen Ratke', '2000-07-14', 'svda780194okqvyz8z', 9, 'Izquierdo', 'Ambidiestro', 'opm.', 1, 'Varonil'),
(230100, 'Jules', 'Macejkovic Deckow', '1992-04-26', 'pwuz919107yrzmog2z', 3, 'Derecho', 'Izquierdo', 'gbo.', 1, 'Varonil'),
(230101, 'Daryl', 'Roob Connelly', '1984-11-22', 'ufgn430511rsgufu5d', 7, 'Izquierdo', 'Ambidiestro', 'wqu.', 1, 'Varonil'),
(230102, 'Hellen', 'Hintz Bosco', '2010-04-24', 'xkfc934101lbqtoi4u', 3, 'Izquierdo', 'Ambidiestro', 'qte.', 1, 'Femenil'),
(230103, 'Pietro', 'Hills Brown', '1985-02-11', 'hbvo379128ocbkfp0h', 5, 'Ambidiestro', 'Derecho', 'nax.', 1, 'Varonil'),
(230104, 'Brannon', 'Reichert Will', '2011-09-18', 'krgu974532cjitsu5k', 4, 'Ambidiestro', 'Ambidiestro', 'pgs.', 1, 'Varonil'),
(230105, 'Myrtie', 'Gleason McGlynn', '2018-10-18', 'pzxa010698gkymfw5x', 11, 'Izquierdo', 'Ambidiestro', 'bdd.', 1, 'Femenil'),
(230106, 'Elias', 'Kunde Nitzsche', '1993-05-01', 'obhc299343brwpkb9j', 4, 'Derecho', 'Ambidiestro', 'csi.', 1, 'Varonil'),
(230107, 'Raina', 'Larkin Turcotte', '2002-05-13', 'ogzx875830gszipb0q', 3, 'Derecho', 'Ambidiestro', 'cdm.', 1, 'Femenil'),
(230108, 'Bria', 'Windler Brakus', '1992-12-06', 'saif985839qpvxva9f', 4, 'Ambidiestro', 'Izquierdo', 'yku.', 1, 'Femenil'),
(230109, 'Glennie', 'Auer Powlowski', '2010-02-27', 'cvfc541320zamnjx1l', 10, 'Izquierdo', 'Izquierdo', 'ete.', 1, 'Varonil'),
(230110, 'Marianne', 'Mitchell Smitham', '2022-10-24', 'mszp394481ousvxj2c', 1, 'Izquierdo', 'Ambidiestro', 'elf.', 1, 'Femenil'),
(230111, 'Trevor', 'Vandervort Romaguera', '1982-04-16', 'gmrm201676xahhdd7o', 7, 'Derecho', 'Derecho', 'uki.', 1, 'Varonil'),
(230112, 'Abbie', 'Buckridge Lowe', '2019-12-06', 'krta918786gwkpvc1r', 11, 'Derecho', 'Derecho', 'oze.', 1, 'Femenil'),
(230113, 'Mariana', 'Shields Harber', '1999-10-26', 'oaqs872278ltlfyg7g', 3, 'Ambidiestro', 'Izquierdo', 'hcv.', 1, 'Femenil'),
(230114, 'Sandy', 'Shields Reilly', '1999-11-07', 'qllr190317hbtpan8f', 5, 'Izquierdo', 'Izquierdo', 'wbw.', 1, 'Femenil'),
(230115, 'Charles', 'Raynor Nolan', '1971-02-10', 'xzku881410qxdxcg6x', 4, 'Ambidiestro', 'Derecho', 'apc.', 1, 'Varonil'),
(230116, 'Elnora', 'Emard Pfeffer', '1984-10-26', 'wbcw702334huoocd9h', 4, 'Ambidiestro', 'Ambidiestro', 'iou.', 1, 'Femenil'),
(230117, 'Julius', 'Von Quitzon', '1976-04-02', 'sxbb365304gjfwiu2v', 10, 'Izquierdo', 'Derecho', 'nbp.', 1, 'Varonil'),
(230118, 'Kenyatta', 'Kemmer McKenzie', '2010-02-08', 'qwmf581173rujzpl1f', 3, 'Izquierdo', 'Izquierdo', 'xrd.', 1, 'Femenil'),
(230119, 'Henriette', 'Reilly Carter', '2019-01-09', 'ljlh299310vtnuft7r', 9, 'Derecho', 'Ambidiestro', 'bkq.', 1, 'Femenil'),
(230120, 'Eloisa', 'Lind Bode', '1998-09-05', 'xmgn432092iesltr6x', 1, 'Derecho', 'Ambidiestro', 'rtp.', 1, 'Femenil'),
(230121, 'Erling', 'Pfeffer Schaden', '2017-12-09', 'kjxw411821sgxbyf2h', 3, 'Izquierdo', 'Derecho', 'vtw.', 1, 'Varonil'),
(230122, 'Tristian', 'Gutkowski Gusikowski', '1994-04-25', 'enra296563zyvrio5w', 4, 'Derecho', 'Derecho', 'suv.', 1, 'Varonil'),
(230123, 'Dameon', 'Oberbrunner Becker', '1983-04-10', 'sldr604124ydqpta3s', 5, 'Derecho', 'Ambidiestro', 'zkn.', 1, 'Varonil'),
(230124, 'Haylee', 'Waters Reichel', '1988-02-08', 'pbtl816864fkcivd2o', 1, 'Izquierdo', 'Ambidiestro', 'oji.', 1, 'Femenil'),
(230125, 'Marielle', 'Flatley Ziemann', '2004-03-11', 'sbve024431qkmlcc9w', 11, 'Izquierdo', 'Ambidiestro', 'tox.', 1, 'Femenil'),
(230126, 'Marques', 'Nicolas Rodriguez', '1993-03-05', 'euyn976644elxulw3i', 1, 'Derecho', 'Ambidiestro', 'kzb.', 1, 'Varonil'),
(230127, 'Abigail', 'Ward Heathcote', '1994-12-24', 'kuya779021cxfphr1g', 3, 'Ambidiestro', 'Ambidiestro', 'dpq.', 1, 'Femenil'),
(230128, 'Orland', 'Turcotte Mitchell', '1978-06-14', 'emwu950044egcmlx1m', 4, 'Derecho', 'Derecho', 'uub.', 1, 'Varonil'),
(230129, 'Karen', 'Kassulke Lebsack', '2001-03-14', 'mcax293967escvsp0w', 1, 'Izquierdo', 'Ambidiestro', 'jyt.', 1, 'Femenil'),
(230130, 'Emie', 'Paucek Beer', '1972-05-13', 'tewn823815gggyum8l', 5, 'Izquierdo', 'Izquierdo', 'kim.', 1, 'Femenil'),
(230131, 'Elouise', 'Kilback Jacobi', '2000-07-23', 'ziif799512lxwcmd0j', 10, 'Ambidiestro', 'Derecho', 'gcv.', 1, 'Femenil'),
(230132, 'Arlo', 'Tremblay Stark', '1999-03-01', 'lpcy154812ngrfuf5w', 1, 'Derecho', 'Ambidiestro', 'acp.', 1, 'Varonil'),
(230133, 'Queen', 'Borer Orn', '2020-02-03', 'cvgz925070bgdnmy5w', 3, 'Ambidiestro', 'Izquierdo', 'gkc.', 1, 'Femenil'),
(230134, 'Erich', 'Williamson Langworth', '1998-07-13', 'pluw200827dgynyc5h', 10, 'Derecho', 'Izquierdo', 'wto.', 1, 'Varonil'),
(230135, 'Bryana', 'Yundt Ernser', '1970-12-10', 'hukw365103pgskbi9s', 8, 'Ambidiestro', 'Derecho', 'flj.', 1, 'Femenil'),
(230136, 'Forrest', 'Von Hartmann', '2015-01-28', 'qoaf901708tdlpde0z', 11, 'Derecho', 'Ambidiestro', 'jav.', 1, 'Varonil'),
(230137, 'Kirk', 'Labadie Padberg', '2002-06-05', 'hkiw025282wjrmlw6u', 11, 'Ambidiestro', 'Ambidiestro', 'azf.', 1, 'Varonil'),
(230138, 'Harmony', 'Cruickshank Nikolaus', '2013-10-28', 'oibe848442skiuwt3j', 8, 'Derecho', 'Izquierdo', 'nfe.', 1, 'Femenil'),
(230139, 'Devin', 'Hamill Collins', '2019-02-08', 'rrnc089734svmgxj0b', 3, 'Ambidiestro', 'Ambidiestro', 'sri.', 1, 'Varonil'),
(230140, 'Eryn', 'Koch Denesik', '1999-10-06', 'taqy311300llyqfo7r', 3, 'Izquierdo', 'Ambidiestro', 'vbm.', 1, 'Femenil'),
(230141, 'Montana', 'Tremblay Stracke', '2019-01-31', 'bulz510351jufofi4k', 5, 'Derecho', 'Ambidiestro', 'xgv.', 1, 'Varonil'),
(230142, 'Chauncey', 'Hauck Padberg', '1990-09-04', 'pdze041067hxezlf5g', 8, 'Izquierdo', 'Izquierdo', 'zkn.', 1, 'Varonil'),
(230143, 'Margie', 'Hirthe Gleason', '2016-05-31', 'cayp198199eyuxmp2t', 8, 'Derecho', 'Ambidiestro', 'jnr.', 1, 'Femenil'),
(230144, 'Kaitlin', 'Bogan Lakin', '2017-04-29', 'drnj941127txgzmu1d', 7, 'Derecho', 'Izquierdo', 'ugu.', 1, 'Femenil'),
(230145, 'Elouise', 'Hayes Kozey', '1972-04-18', 'huaa705196bizipq7n', 8, 'Derecho', 'Derecho', 'tey.', 1, 'Femenil'),
(230146, 'Meghan', 'Rath Bartoletti', '2016-10-23', 'xaly310887rymcax2t', 1, 'Derecho', 'Ambidiestro', 'zeg.', 1, 'Femenil'),
(230147, 'Jackie', 'Legros Dare', '1992-01-20', 'kklz988129rxxqnj6l', 8, 'Ambidiestro', 'Ambidiestro', 'goz.', 1, 'Femenil'),
(230148, 'Jaron', 'Gaylord Bins', '2013-09-02', 'vzzw308926nrlpnq8z', 11, 'Derecho', 'Derecho', 'wer.', 1, 'Varonil'),
(230149, 'Annabel', 'Lynch Leffler', '2021-10-30', 'umeq313454vcdqnd0c', 1, 'Izquierdo', 'Derecho', 'psm.', 1, 'Femenil'),
(230150, 'Deshawn', 'Johns Donnelly', '1998-02-21', 'rmvm336582xdqiup1w', 10, 'Izquierdo', 'Derecho', 'amm.', 1, 'Varonil'),
(230151, 'Brianne', 'Armstrong Prohaska', '1994-07-31', 'vfbw959554bwhlfk0s', 1, 'Derecho', 'Derecho', 'iir.', 1, 'Femenil'),
(230152, 'Brooklyn', 'Braun Borer', '1976-07-09', 'mzwx610345frvasp0k', 10, 'Derecho', 'Ambidiestro', 'qge.', 1, 'Femenil'),
(230153, 'Carlos', 'Hudson Bergnaum', '2019-03-01', 'fngl955605jdjjav7i', 5, 'Derecho', 'Ambidiestro', 'bzt.', 1, 'Varonil'),
(230154, 'Toy', 'Legros Wintheiser', '2011-01-05', 'jzgx022551egejsk3b', 4, 'Ambidiestro', 'Ambidiestro', 'tde.', 1, 'Varonil'),
(230155, 'Xzavier', 'Smith Dickens', '1975-04-23', 'occb283574vwrwab4l', 3, 'Derecho', 'Ambidiestro', 'kew.', 1, 'Varonil'),
(230156, 'Oma', 'Buckridge Wyman', '2012-12-07', 'pkud043704rqnbcu8y', 1, 'Derecho', 'Ambidiestro', 'ehd.', 1, 'Femenil'),
(230157, 'Micah', 'Carter Huel', '2006-08-28', 'decx923531gathqu6g', 4, 'Derecho', 'Ambidiestro', 'ivq.', 1, 'Varonil'),
(230158, 'Arielle', 'Lesch Hansen', '1981-11-03', 'igyf360749hasixp3s', 11, 'Derecho', 'Ambidiestro', 'wpv.', 1, 'Femenil'),
(230159, 'Bennie', 'Windler Macejkovic', '1995-02-16', 'lblf937918ojjqxh9k', 2, 'Izquierdo', 'Derecho', 'zbi.', 1, 'Varonil'),
(230160, 'Agustin', 'Lowe Dach', '1974-05-19', 'cdok453054ojsqwo6y', 4, 'Ambidiestro', 'Izquierdo', 'yox.', 1, 'Varonil'),
(230161, 'Shannon', 'Orn Reinger', '1971-12-10', 'ijgg098296buxpdi1h', 6, 'Derecho', 'Ambidiestro', 'fbp.', 1, 'Femenil'),
(230162, 'Eugenia', 'Considine Crooks', '1999-01-14', 'aqqg979644zczoyc3v', 3, 'Ambidiestro', 'Derecho', 'czc.', 1, 'Femenil'),
(230163, 'Rowena', 'Brown Maggio', '1979-07-14', 'kurk667025siyuxe2a', 6, 'Ambidiestro', 'Derecho', 'xqm.', 1, 'Femenil'),
(230164, 'Loren', 'Koepp Tromp', '1982-01-06', 'evpx185273zxhsfc1r', 9, 'Derecho', 'Derecho', 'ewh.', 1, 'Femenil'),
(230165, 'Arlie', 'Sipes Moore', '2022-01-13', 'ubmv827622pmjttf0k', 2, 'Ambidiestro', 'Derecho', 'ybj.', 1, 'Femenil'),
(230166, 'Garrison', 'Friesen Ankunding', '1994-04-18', 'rgkc232619rnxnqi4a', 5, 'Ambidiestro', 'Izquierdo', 'reh.', 1, 'Varonil'),
(230167, 'Monroe', 'Kuhic Mohr', '1982-04-03', 'gjqq981570sfzbfj0v', 2, 'Ambidiestro', 'Ambidiestro', 'wzq.', 1, 'Varonil'),
(230168, 'Hal', 'Christiansen Bauch', '1978-07-02', 'nglj989388fcjvon7z', 7, 'Izquierdo', 'Derecho', 'wve.', 1, 'Varonil'),
(230169, 'Lavern', 'Mitchell Hand', '1982-05-17', 'lkic453851abyyxf7n', 4, 'Derecho', 'Derecho', 'vpe.', 1, 'Varonil'),
(230170, 'Corene', 'Cremin Sauer', '1970-10-15', 'pdnw416318fqziyc6m', 11, 'Derecho', 'Ambidiestro', 'lbn.', 1, 'Femenil'),
(230171, 'Tito', 'Mann Larson', '1999-10-02', 'xwlj010368hnwxjs4s', 2, 'Ambidiestro', 'Izquierdo', 'wba.', 1, 'Varonil'),
(230172, 'Hal', 'Stoltenberg Weissnat', '2007-10-16', 'pojq863493blopzz4x', 3, 'Izquierdo', 'Ambidiestro', 'rll.', 1, 'Varonil'),
(230173, 'Ambrose', 'Dickens Nader', '2002-07-10', 'fvad364043ccoqxc6b', 1, 'Izquierdo', 'Derecho', 'lbn.', 1, 'Varonil'),
(230174, 'Myrtie', 'Predovic Balistreri', '1980-01-09', 'hciz615513gtidxr4s', 10, 'Izquierdo', 'Derecho', 'kwb.', 1, 'Femenil'),
(230175, 'Amie', 'Smith Abshire', '1986-02-17', 'jonf976368twxwop0a', 1, 'Derecho', 'Izquierdo', 'qxb.', 1, 'Femenil'),
(230176, 'Beryl', 'Raynor Botsford', '1982-12-11', 'gkgt113973emgvxh2a', 3, 'Derecho', 'Ambidiestro', 'mjb.', 1, 'Femenil'),
(230177, 'Bryon', 'Cremin Satterfield', '2012-08-12', 'ixuq520828ufxhob8n', 4, 'Ambidiestro', 'Izquierdo', 'qbk.', 1, 'Varonil'),
(230178, 'Mabelle', 'Kirlin Luettgen', '1992-09-02', 'ujsq838618siungn1j', 10, 'Ambidiestro', 'Izquierdo', 'pue.', 1, 'Femenil'),
(230179, 'Sigurd', 'Heller Jaskolski', '2018-01-03', 'oiff865680kqnpbk5c', 2, 'Ambidiestro', 'Ambidiestro', 'omw.', 1, 'Varonil'),
(230180, 'Lucius', 'Leannon Shanahan', '2012-06-26', 'aofd880500yomkch5w', 9, 'Izquierdo', 'Ambidiestro', 'awy.', 1, 'Varonil'),
(230181, 'Marty', 'Glover Lowe', '2002-01-21', 'mfmm932494koshci4f', 1, 'Izquierdo', 'Ambidiestro', 'hlw.', 1, 'Varonil'),
(230182, 'Eudora', 'Weimann Graham', '2021-07-12', 'jceq871329wtwaop5k', 4, 'Derecho', 'Izquierdo', 'izq.', 1, 'Femenil'),
(230183, 'Whitney', 'Howell Sawayn', '2002-02-19', 'kiyn977352cciosw3s', 1, 'Derecho', 'Ambidiestro', 'ker.', 1, 'Femenil'),
(230184, 'Odie', 'Heidenreich Reilly', '1985-08-19', 'lrpx168910kqmnag5j', 8, 'Ambidiestro', 'Izquierdo', 'ohn.', 1, 'Femenil'),
(230185, 'Kristina', 'Nikolaus Schaden', '1990-05-09', 'efbf755931qegbdf2p', 8, 'Izquierdo', 'Derecho', 'xfr.', 1, 'Femenil'),
(230186, 'Gregg', 'Kutch Mills', '2005-12-06', 'elca885036ynzsjd3z', 2, 'Derecho', 'Ambidiestro', 'arc.', 1, 'Varonil'),
(230187, 'Cassie', 'Runte Swaniawski', '1985-01-14', 'oskb375681hiclsj1i', 2, 'Derecho', 'Ambidiestro', 'myu.', 1, 'Femenil'),
(230188, 'Thaddeus', 'Morissette Volkman', '1983-09-05', 'fhuv069602btatgy4d', 10, 'Ambidiestro', 'Ambidiestro', 'fma.', 1, 'Varonil'),
(230189, 'Tressa', 'Gibson Lakin', '1996-08-16', 'xaxt074250ellsgo9q', 4, 'Izquierdo', 'Izquierdo', 'azr.', 1, 'Femenil'),
(230190, 'Edison', 'Farrell Rau', '2000-07-23', 'cwdx317070mvpkwj2g', 3, 'Derecho', 'Izquierdo', 'koc.', 1, 'Varonil'),
(230191, 'Maribel', 'Goodwin Koelpin', '1985-08-29', 'xjit768734exowlm0l', 3, 'Izquierdo', 'Izquierdo', 'sxf.', 1, 'Femenil'),
(230192, 'Earline', 'Kozey West', '2000-11-06', 'gjgq467281gijwun5g', 7, 'Izquierdo', 'Derecho', 'aeh.', 1, 'Femenil'),
(230193, 'Mikel', 'Lockman Abshire', '2016-01-20', 'wxxm433531ideixf7f', 3, 'Derecho', 'Ambidiestro', 'lyd.', 1, 'Varonil'),
(230194, 'Berta', 'Williamson Greenholt', '1985-04-06', 'mmom422629jtxpcm7o', 4, 'Ambidiestro', 'Ambidiestro', 'wqr.', 1, 'Varonil'),
(230195, 'Tess', 'Jacobs Mraz', '1977-08-10', 'yrhb731845hlmvtk2g', 5, 'Derecho', 'Ambidiestro', 'gip.', 1, 'Femenil'),
(230196, 'Adriel', 'Wilkinson O\'Connell', '1981-01-24', 'dvug508161gnhsog4z', 7, 'Izquierdo', 'Ambidiestro', 'fzk.', 1, 'Varonil'),
(230197, 'Alanna', 'Heidenreich Raynor', '2002-12-02', 'nbor507090zezvtu5v', 4, 'Izquierdo', 'Ambidiestro', 'cpt.', 1, 'Femenil'),
(230198, 'Jasper', 'Walter Fisher', '2004-05-12', 'zclx015712zauzjg0c', 9, 'Derecho', 'Izquierdo', 'une.', 1, 'Varonil'),
(230199, 'Easter', 'Lehner Brown', '1992-04-11', 'znap487571aptopx0e', 7, 'Izquierdo', 'Derecho', 'ghy.', 1, 'Varonil'),
(230200, 'Ervin', 'Kirlin Rempel', '2002-02-10', 'olle609807ipgelj7b', 7, 'Ambidiestro', 'Derecho', 'mwo.', 1, 'Varonil'),
(230201, 'Fermin', 'Parisian Pfeffer', '1999-07-27', 'nuif200801nicagu0y', 2, 'Izquierdo', 'Izquierdo', 'siz.', 1, 'Varonil'),
(230202, 'Ernestine', 'Bosco Carter', '1999-12-23', 'gcej474382xumrzp8d', 2, 'Ambidiestro', 'Ambidiestro', 'uns.', 1, 'Femenil'),
(230203, 'Daphney', 'Flatley Schaden', '1996-03-19', 'wthh814434nusklv9j', 3, 'Derecho', 'Izquierdo', 'ups.', 1, 'Femenil'),
(230204, 'Mohamed', 'Thiel Spinka', '1980-11-08', 'qpqq777828svikix2q', 2, 'Izquierdo', 'Izquierdo', 'ulu.', 1, 'Varonil'),
(230205, 'Lydia', 'Doyle Rosenbaum', '1985-07-20', 'khae222074qegaoj0y', 7, 'Derecho', 'Ambidiestro', 'tmt.', 1, 'Femenil'),
(230206, 'Tremaine', 'O\'Hara Stoltenberg', '1987-02-20', 'yazz373043gaffst7a', 8, 'Ambidiestro', 'Ambidiestro', 'rdy.', 1, 'Varonil'),
(230207, 'Brady', 'Sanford Rolfson', '1995-02-17', 'snet697319gcqkyn5b', 2, 'Izquierdo', 'Ambidiestro', 'oos.', 1, 'Varonil'),
(230208, 'Austyn', 'Rutherford Runte', '1983-02-14', 'bhrk000783vowszd1g', 3, 'Izquierdo', 'Izquierdo', 'gmj.', 1, 'Varonil'),
(230209, 'Ed', 'Schmitt Torp', '1988-05-01', 'vhll127880jcgssq0d', 8, 'Izquierdo', 'Ambidiestro', 'vxq.', 1, 'Varonil'),
(230210, 'Rex', 'Wilkinson Ritchie', '1981-08-20', 'cjjb325351uyjztt0h', 6, 'Ambidiestro', 'Izquierdo', 'bgc.', 1, 'Varonil'),
(230211, 'Brendon', 'Maggio Goodwin', '2023-03-01', 'yyob318153bkvvaf0k', 2, 'Derecho', 'Derecho', 'uyt.', 1, 'Varonil'),
(230212, 'Vince', 'Conn Kuhic', '1989-12-14', 'rxml269769oxicbc6d', 1, 'Izquierdo', 'Izquierdo', 'pks.', 1, 'Varonil'),
(230213, 'Percival', 'Erdman Kessler', '2015-03-08', 'qrsr406974kekxbd1v', 9, 'Ambidiestro', 'Derecho', 'kjt.', 1, 'Varonil'),
(230214, 'Arne', 'Douglas Pouros', '1973-04-05', 'lxwt341535qdjwgf0p', 8, 'Ambidiestro', 'Ambidiestro', 'lvj.', 1, 'Varonil'),
(230215, 'Thaddeus', 'Homenick Willms', '1991-01-06', 'rtbf865371izidup3m', 9, 'Izquierdo', 'Ambidiestro', 'rik.', 1, 'Varonil'),
(230216, 'Salvador', 'Ritchie Herman', '1999-12-13', 'flvu834500tzdhdm5p', 8, 'Ambidiestro', 'Ambidiestro', 'bvm.', 1, 'Varonil'),
(230217, 'Jeanie', 'Thiel Monahan', '1981-06-01', 'hzms141258kfhjiy2m', 9, 'Ambidiestro', 'Ambidiestro', 'yof.', 1, 'Femenil'),
(230218, 'Chaim', 'Sporer Gislason', '1992-05-02', 'ryay995990zjzvgc5z', 5, 'Izquierdo', 'Derecho', 'yum.', 1, 'Varonil'),
(230219, 'Armando', 'Feil Barrows', '1973-08-14', 'asry338571ugegxf9u', 1, 'Derecho', 'Derecho', 'ney.', 1, 'Varonil'),
(230220, 'Effie', 'Becker Pacocha', '2010-06-06', 'olkf608358jqkmal7p', 6, 'Izquierdo', 'Izquierdo', 'icy.', 1, 'Femenil'),
(230221, 'Dameon', 'Legros Borer', '1997-04-30', 'vadi249773lnzext6h', 7, 'Ambidiestro', 'Ambidiestro', 'cxa.', 1, 'Varonil'),
(230222, 'Juliet', 'Kovacek Stiedemann', '1972-06-24', 'ycop002212yochtx9r', 2, 'Izquierdo', 'Izquierdo', 'igz.', 1, 'Femenil'),
(230223, 'Tony', 'Ankunding Hill', '2002-02-15', 'evsc044772zhltak2o', 5, 'Izquierdo', 'Derecho', 'xlo.', 1, 'Varonil'),
(230224, 'Chelsey', 'Gutmann Kilback', '1985-06-21', 'rcwy327719pjwmsk8e', 3, 'Derecho', 'Derecho', 'tiq.', 1, 'Varonil'),
(230225, 'Austin', 'Ondricka Franecki', '1978-04-07', 'kecs064984gutcxb7k', 3, 'Derecho', 'Derecho', 'bnx.', 1, 'Varonil'),
(230226, 'Frieda', 'Bradtke Smitham', '1971-10-20', 'nupp421374zivxfc5l', 4, 'Derecho', 'Ambidiestro', 'gkp.', 1, 'Femenil'),
(230227, 'Alejandra', 'Harris Shields', '1992-10-21', 'ovjx785552taxrjk4n', 2, 'Ambidiestro', 'Izquierdo', 'sin.', 1, 'Femenil'),
(230228, 'Giuseppe', 'Donnelly Lynch', '1991-01-11', 'enge773375gokswu8m', 4, 'Derecho', 'Izquierdo', 'ltu.', 1, 'Varonil'),
(230229, 'Ewell', 'Willms Ebert', '2015-07-07', 'fenq864259yueowy1t', 7, 'Derecho', 'Izquierdo', 'orb.', 1, 'Varonil'),
(230230, 'Johann', 'Miller Kiehn', '1999-12-08', 'fymv335454ynoeuk8m', 9, 'Derecho', 'Derecho', 'xfe.', 1, 'Varonil'),
(230231, 'Aglae', 'Pagac Rolfson', '1999-02-03', 'rbsq159424xckqvd5c', 5, 'Izquierdo', 'Derecho', 'rfw.', 1, 'Femenil'),
(230232, 'Martine', 'Schultz Murazik', '1995-05-03', 'cuyu976370dsgntu0i', 3, 'Izquierdo', 'Derecho', 'vtb.', 1, 'Femenil'),
(230233, 'Mike', 'Farrell Bartoletti', '1980-01-28', 'henj678376xtkxxv7x', 8, 'Derecho', 'Derecho', 'yog.', 1, 'Varonil'),
(230234, 'Mertie', 'Torphy Kerluke', '2014-10-10', 'kdob840820mqfbwq3d', 7, 'Ambidiestro', 'Ambidiestro', 'adg.', 1, 'Femenil'),
(230235, 'Cameron', 'Marks Herzog', '1987-12-05', 'fdpo307855byxiva2x', 7, 'Derecho', 'Ambidiestro', 'lkv.', 1, 'Varonil'),
(230236, 'Leopold', 'Walter Lueilwitz', '1989-06-01', 'gzto973196ftigef2b', 9, 'Ambidiestro', 'Izquierdo', 'pvr.', 1, 'Varonil'),
(230237, 'Viviane', 'King Beier', '2020-03-03', 'rubc265444xsxjme7m', 5, 'Ambidiestro', 'Ambidiestro', 'zns.', 1, 'Femenil'),
(230238, 'Hope', 'Fay Bashirian', '2016-10-20', 'vvqf058981ffiaxn1g', 5, 'Ambidiestro', 'Izquierdo', 'zfn.', 1, 'Femenil'),
(230239, 'Bud', 'Bode Mohr', '1976-03-29', 'dkif533747pcwwqi1a', 7, 'Ambidiestro', 'Ambidiestro', 'flu.', 1, 'Varonil'),
(230240, 'Jordyn', 'Cremin Jaskolski', '2005-01-27', 'uhhh621593lzzmpj3v', 2, 'Izquierdo', 'Derecho', 'ehi.', 1, 'Varonil'),
(230241, 'Lenora', 'Haag Schuppe', '2020-09-15', 'qtmi681375rfimgg4t', 11, 'Derecho', 'Ambidiestro', 'dyz.', 1, 'Femenil'),
(230242, 'Kelly', 'Swaniawski Bradtke', '2004-01-22', 'vcks728807gcklzq4j', 6, 'Izquierdo', 'Derecho', 'uli.', 1, 'Femenil'),
(230243, 'Freddy', 'Hagenes Grady', '1973-08-06', 'jnea792009dkhpcq9s', 11, 'Derecho', 'Ambidiestro', 'sjk.', 1, 'Varonil'),
(230244, 'Billie', 'Larson Bernier', '1981-12-09', 'ifkn992684zdgrmf4r', 8, 'Derecho', 'Derecho', 'iwc.', 1, 'Femenil'),
(230245, 'Alba', 'Brekke Kuvalis', '1973-10-05', 'bjmw534119wjdmdx1l', 4, 'Ambidiestro', 'Derecho', 'shq.', 1, 'Femenil'),
(230246, 'Verna', 'Osinski Pfeffer', '2017-01-13', 'jtof189628dwdnxn0a', 6, 'Izquierdo', 'Derecho', 'lby.', 1, 'Femenil'),
(230247, 'Dudley', 'Koch Pfannerstill', '1995-07-01', 'kclm191288ievtki0j', 4, 'Izquierdo', 'Ambidiestro', 'sfe.', 1, 'Varonil'),
(230248, 'Stanton', 'Dare Gleichner', '1974-11-07', 'kzxf387692qqpujt3z', 1, 'Ambidiestro', 'Derecho', 'qmo.', 1, 'Varonil'),
(230249, 'Brisa', 'Bechtelar Cremin', '1997-01-23', 'ndue415191ypxsww9m', 5, 'Izquierdo', 'Derecho', 'gji.', 1, 'Femenil'),
(230250, 'Vivianne', 'Stamm Koelpin', '1976-12-02', 'wftk961145rrzbqe9s', 10, 'Derecho', 'Ambidiestro', 'bon.', 1, 'Femenil'),
(230251, 'Betty', 'Schuster Gulgowski', '2003-05-22', 'mzlv830513ulqtzj9s', 5, 'Derecho', 'Derecho', 'jmt.', 1, 'Femenil'),
(230252, 'Jalon', 'Walker Weber', '2014-05-29', 'cush631626czecqy9y', 5, 'Izquierdo', 'Izquierdo', 'jek.', 1, 'Varonil'),
(230253, 'Nathanial', 'Koch Rau', '2013-03-17', 'leaj467437zjwmyl2b', 10, 'Derecho', 'Ambidiestro', 'rod.', 1, 'Varonil'),
(230254, 'Tamara', 'Romaguera Blanda', '2010-11-16', 'tieo395327qezljs2i', 10, 'Ambidiestro', 'Izquierdo', 'jzr.', 1, 'Femenil'),
(230255, 'Elvis', 'Will Dach', '1985-11-15', 'bxie442549fsudsd0c', 5, 'Derecho', 'Derecho', 'ncg.', 1, 'Varonil'),
(230256, 'Jeffry', 'Pollich Trantow', '1992-02-23', 'jlen216341bxnauz1v', 1, 'Derecho', 'Derecho', 'jdr.', 1, 'Varonil'),
(230257, 'Lulu', 'Kreiger Kulas', '2019-07-10', 'ztzv916373iamcla0w', 9, 'Ambidiestro', 'Derecho', 'gxm.', 1, 'Femenil'),
(230258, 'Kiel', 'Hauck Stracke', '2003-08-28', 'edbh477066lywtjl8v', 11, 'Izquierdo', 'Izquierdo', 'jjv.', 1, 'Varonil'),
(230259, 'Gavin', 'Sawayn Anderson', '2004-08-15', 'note508176scpuxp1m', 8, 'Ambidiestro', 'Izquierdo', 'wig.', 1, 'Varonil'),
(230260, 'Marjolaine', 'Nienow Bauch', '2007-06-30', 'crpt393952qvkvim7c', 3, 'Ambidiestro', 'Ambidiestro', 'ghu.', 1, 'Femenil'),
(230261, 'Haley', 'Leuschke Kunde', '1991-11-25', 'obuq891989crfowv6c', 7, 'Derecho', 'Derecho', 'dlu.', 1, 'Varonil'),
(230262, 'Blake', 'Davis Morar', '1990-02-28', 'dfsz525860tvgvcu2p', 10, 'Ambidiestro', 'Derecho', 'avv.', 1, 'Varonil'),
(230263, 'Anissa', 'Skiles Crona', '2004-03-20', 'dlfy501642vtcykv6h', 10, 'Izquierdo', 'Ambidiestro', 'myn.', 1, 'Femenil'),
(230264, 'Zack', 'Wintheiser Walter', '1994-12-18', 'lmhu141648gxvjpw8g', 3, 'Ambidiestro', 'Izquierdo', 'ots.', 1, 'Varonil'),
(230265, 'Charley', 'Reichert Senger', '2003-11-01', 'awcc582540ifyrft3j', 10, 'Derecho', 'Izquierdo', 'qve.', 1, 'Varonil'),
(230266, 'Eloisa', 'Kshlerin Gaylord', '2018-10-28', 'xzpv889649hkfjdi9t', 6, 'Derecho', 'Derecho', 'lqn.', 1, 'Femenil'),
(230267, 'Edwina', 'Halvorson Kuhlman', '1975-07-31', 'yeyz286883aukwkp8y', 8, 'Izquierdo', 'Derecho', 'ltt.', 1, 'Femenil'),
(230268, 'Trey', 'Rogahn Beer', '1996-04-16', 'bsgc658562cyibvs2o', 9, 'Ambidiestro', 'Derecho', 'wpq.', 1, 'Varonil'),
(230269, 'Lorna', 'Kertzmann Cartwright', '1986-04-05', 'nimq909517mqzwmi0n', 2, 'Ambidiestro', 'Ambidiestro', 'zay.', 1, 'Femenil'),
(230270, 'Louvenia', 'Greenfelder Lind', '1994-09-25', 'ilin940045tokoel4r', 10, 'Derecho', 'Ambidiestro', 'mwd.', 1, 'Varonil'),
(230271, 'Vidal', 'Kling Cole', '1988-09-22', 'tjds803096llgtxo2c', 4, 'Derecho', 'Izquierdo', 'hjt.', 1, 'Varonil'),
(230272, 'Rosemarie', 'Effertz Wolff', '1977-04-09', 'fdlz220793plbakt5r', 9, 'Ambidiestro', 'Derecho', 'qjl.', 1, 'Femenil'),
(230273, 'Robb', 'Wisozk Pouros', '2000-02-23', 'qxut438506fxefnw8o', 5, 'Ambidiestro', 'Izquierdo', 'xgg.', 1, 'Varonil'),
(230274, 'Odessa', 'Lehner Langworth', '2001-07-06', 'lgea190132srotfa4o', 7, 'Ambidiestro', 'Ambidiestro', 'adw.', 1, 'Femenil'),
(230275, 'Jay', 'Rippin Zboncak', '2012-03-19', 'rame064400fwhivk0r', 8, 'Derecho', 'Izquierdo', 'rfr.', 1, 'Varonil'),
(230276, 'Jesse', 'Yundt Tromp', '2022-12-01', 'mtmc409643gepcoj2c', 10, 'Ambidiestro', 'Izquierdo', 'eoc.', 1, 'Varonil'),
(230277, 'Golden', 'Johns Nolan', '1980-04-22', 'ssny956949lhzoif5w', 4, 'Derecho', 'Izquierdo', 'grq.', 1, 'Varonil'),
(230278, 'Maynard', 'Nienow Shanahan', '2022-09-03', 'imae364363qjifrh5w', 4, 'Derecho', 'Ambidiestro', 'hfx.', 1, 'Varonil'),
(230279, 'Juana', 'Zieme Bartell', '1989-05-09', 'huzs596679ramiyq2n', 6, 'Izquierdo', 'Derecho', 'eom.', 1, 'Femenil'),
(230280, 'Jaylan', 'Legros Gutmann', '2006-10-19', 'xnxb131672qliswr1f', 3, 'Derecho', 'Izquierdo', 'ylc.', 1, 'Varonil'),
(230281, 'Justine', 'McGlynn Grimes', '2012-06-02', 'efpr085130efbwwt6p', 10, 'Izquierdo', 'Izquierdo', 'lqk.', 1, 'Femenil'),
(230282, 'Eugene', 'Ledner Bechtelar', '2003-04-05', 'azuk838631pylnfe6r', 1, 'Derecho', 'Derecho', 'rys.', 1, 'Varonil'),
(230283, 'Jimmy', 'Ledner Beatty', '1994-11-10', 'chgm792560yukcpt0u', 11, 'Izquierdo', 'Izquierdo', 'ikv.', 1, 'Varonil'),
(230284, 'Mack', 'Mann Cole', '2003-12-23', 'fakc981462dhyifz1g', 4, 'Derecho', 'Ambidiestro', 'yxb.', 1, 'Varonil'),
(230285, 'Brittany', 'Okuneva Bergstrom', '2020-01-05', 'lcsp573826tbolkp9t', 5, 'Ambidiestro', 'Derecho', 'ddl.', 1, 'Femenil'),
(230286, 'Nicklaus', 'Graham Hamill', '2001-05-11', 'zrpv818763yurqre2v', 10, 'Izquierdo', 'Izquierdo', 'xhg.', 1, 'Varonil'),
(230287, 'Ada', 'Keebler Bartoletti', '1982-01-12', 'qixm273309fdoxqb6b', 3, 'Izquierdo', 'Ambidiestro', 'fbb.', 1, 'Femenil'),
(230288, 'Sanford', 'Ryan Bayer', '1978-09-01', 'byug647230zjufzc8z', 9, 'Derecho', 'Derecho', 'xmc.', 1, 'Varonil'),
(230289, 'Osborne', 'O\'Reilly Moore', '1976-03-15', 'stnh257463sbabol8j', 10, 'Derecho', 'Derecho', 'wop.', 1, 'Varonil'),
(230290, 'Donato', 'Luettgen Hagenes', '2023-03-03', 'dkef858106qasbyc5e', 1, 'Derecho', 'Ambidiestro', 'qap.', 1, 'Varonil'),
(230291, 'Roel', 'Kshlerin Gleichner', '1993-10-19', 'lmsf461360ivdqye7l', 3, 'Izquierdo', 'Derecho', 'hii.', 1, 'Varonil'),
(230292, 'Alyson', 'Cronin Bailey', '2000-11-13', 'zuzp994074bnxsgx0b', 7, 'Ambidiestro', 'Ambidiestro', 'wzv.', 1, 'Femenil'),
(230293, 'Romaine', 'Durgan Gleichner', '2015-05-13', 'qmta496177mrcabm9p', 1, 'Derecho', 'Izquierdo', 'pwx.', 1, 'Femenil'),
(230294, 'Alysson', 'Larkin Abernathy', '2009-10-03', 'olia243228hglpxs5r', 1, 'Izquierdo', 'Izquierdo', 'jef.', 1, 'Femenil'),
(230295, 'Carmine', 'Turcotte Schumm', '2016-08-31', 'oljw621747eqzzlf0y', 11, 'Derecho', 'Izquierdo', 'axm.', 1, 'Varonil'),
(230296, 'Rosalia', 'Adams McDermott', '1978-07-28', 'trxb015631rwbmzp4k', 9, 'Ambidiestro', 'Izquierdo', 'yfz.', 1, 'Femenil'),
(230297, 'Noelia', 'Schinner Stehr', '2021-12-24', 'mrba230649gsnzir1g', 7, 'Derecho', 'Izquierdo', 'wjy.', 1, 'Femenil'),
(230298, 'Romaine', 'Waelchi Fay', '1992-04-23', 'oobq741616zxpkuf7w', 3, 'Ambidiestro', 'Derecho', 'ged.', 1, 'Femenil'),
(230299, 'Mathias', 'Veum Beatty', '1990-08-21', 'qetm772657apgiqa6o', 2, 'Ambidiestro', 'Ambidiestro', 'spt.', 1, 'Varonil'),
(230300, 'Cedrick', 'Armstrong Carter', '2001-05-15', 'qxwu123206mvlloc9t', 9, 'Derecho', 'Ambidiestro', 'pst.', 1, 'Varonil'),
(230301, 'Damian', 'Friesen Kerluke', '2017-04-08', 'atjd075515lgcxzj4m', 5, 'Ambidiestro', 'Izquierdo', 'rrl.', 1, 'Varonil'),
(230302, 'Ellie', 'Lehner Roberts', '1981-08-15', 'qrsa678357dbascb7s', 1, 'Ambidiestro', 'Izquierdo', 'flp.', 1, 'Femenil'),
(230303, 'Norval', 'Sawayn Schultz', '1991-12-08', 'nvyo142202rbqkgb4y', 10, 'Ambidiestro', 'Izquierdo', 'fbs.', 1, 'Varonil'),
(230304, 'Shanelle', 'Schuppe Emard', '1973-10-08', 'xgau478084mrpsas2z', 7, 'Ambidiestro', 'Ambidiestro', 'aaz.', 1, 'Femenil'),
(230305, 'Jeremy', 'Wehner Cremin', '1992-07-25', 'cyww939579uuhmsv9m', 8, 'Izquierdo', 'Derecho', 'tsc.', 1, 'Varonil'),
(230306, 'Raymond', 'Fadel Leannon', '2001-04-02', 'uvmh300881wxolwn5k', 7, 'Ambidiestro', 'Izquierdo', 'lkc.', 1, 'Varonil'),
(230307, 'Jarret', 'Parker Lebsack', '2001-08-27', 'ynuf635174oskkmr5p', 2, 'Derecho', 'Derecho', 'qnl.', 1, 'Varonil'),
(230308, 'Amaya', 'Lesch Bartell', '1975-03-05', 'vdix588264nfnpev6d', 8, 'Ambidiestro', 'Derecho', 'xco.', 1, 'Femenil'),
(230309, 'Eusebio', 'Kilback Hegmann', '1976-09-30', 'rdkd068555nfeels0q', 8, 'Izquierdo', 'Izquierdo', 'rdm.', 1, 'Varonil'),
(230310, 'Meda', 'Stiedemann Cartwright', '1993-02-17', 'rypc544863uplvcg8g', 8, 'Izquierdo', 'Izquierdo', 'ida.', 1, 'Femenil'),
(230311, 'Kenya', 'Crona Jones', '1978-08-07', 'xdov543635koifet8i', 1, 'Izquierdo', 'Ambidiestro', 'vnk.', 1, 'Femenil'),
(230312, 'Lucienne', 'Blick Feil', '1987-01-07', 'stfk283871ottknk9u', 7, 'Izquierdo', 'Derecho', 'vqb.', 1, 'Femenil'),
(230313, 'Miracle', 'Glover Cummerata', '2011-10-04', 'svvy033331jrbbzt9s', 8, 'Derecho', 'Ambidiestro', 'gsp.', 1, 'Femenil'),
(230314, 'Raul', 'Hahn Armstrong', '2009-10-10', 'qlbk689744mcxhvt4p', 5, 'Derecho', 'Izquierdo', 'mdz.', 1, 'Varonil'),
(230315, 'Samantha', 'Schmitt Stroman', '2016-03-06', 'tgrt999981evegmy9l', 5, 'Ambidiestro', 'Izquierdo', 'nwx.', 1, 'Femenil'),
(230316, 'Adriel', 'Corwin Franecki', '1972-09-25', 'ajzw927308iyhfpu6c', 10, 'Derecho', 'Ambidiestro', 'jkh.', 1, 'Varonil'),
(230317, 'Deanna', 'Bradtke Morissette', '1975-08-18', 'ujzy228583pakxis6j', 9, 'Ambidiestro', 'Derecho', 'uox.', 1, 'Femenil'),
(230318, 'Vincenza', 'Bode Thompson', '2018-02-28', 'weva735596lbqjsd6r', 7, 'Ambidiestro', 'Derecho', 'oab.', 1, 'Femenil'),
(230319, 'Annabel', 'Schultz Fay', '2011-06-22', 'dime999546hxactg7k', 8, 'Ambidiestro', 'Ambidiestro', 'ncl.', 1, 'Femenil'),
(230320, 'Wilhelm', 'Lowe Zieme', '1996-04-15', 'wzqw330116nbzwzc8l', 8, 'Izquierdo', 'Derecho', 'icp.', 1, 'Varonil'),
(230321, 'Roslyn', 'Koch Steuber', '1990-11-10', 'tymd322350nmzfbk8i', 10, 'Izquierdo', 'Ambidiestro', 'kvq.', 1, 'Femenil'),
(230322, 'Alisa', 'Skiles Miller', '1994-06-13', 'mdyk030038kdsiei2w', 9, 'Derecho', 'Izquierdo', 'ssz.', 1, 'Femenil'),
(230323, 'Eileen', 'Eichmann Lehner', '1987-10-30', 'vjvu167058naieft6y', 11, 'Ambidiestro', 'Derecho', 'pje.', 1, 'Femenil'),
(230324, 'Loyal', 'Fay Schiller', '1986-10-30', 'kjnt905509myfdjt0z', 8, 'Izquierdo', 'Izquierdo', 'xvn.', 1, 'Varonil'),
(230325, 'Ari', 'Schmeler Smitham', '1976-02-09', 'kkey375194kloxzc4j', 9, 'Derecho', 'Ambidiestro', 'kup.', 1, 'Varonil'),
(230326, 'Destiney', 'Dickens Heathcote', '1984-11-02', 'bahd574115zefihr0j', 1, 'Derecho', 'Derecho', 'izw.', 1, 'Femenil'),
(230327, 'Josephine', 'Russel Hermann', '1981-12-10', 'vpei758903awosxv0e', 11, 'Izquierdo', 'Derecho', 'cwk.', 1, 'Femenil'),
(230328, 'Rodolfo', 'Conn Greenholt', '1976-11-23', 'gqcy760399rpqcbm6i', 10, 'Derecho', 'Derecho', 'opz.', 1, 'Varonil'),
(230329, 'Tristian', 'Marks Collins', '1991-05-18', 'ejgq187442rmmxcb8n', 8, 'Izquierdo', 'Derecho', 'loc.', 1, 'Varonil'),
(230330, 'Christop', 'Kling Schowalter', '2009-05-09', 'mibd828580gclvbj3p', 11, 'Izquierdo', 'Derecho', 'exf.', 1, 'Varonil'),
(230331, 'Gregoria', 'Heller Stiedemann', '2012-10-12', 'svdd934111ymcsvh0g', 4, 'Izquierdo', 'Ambidiestro', 'daw.', 1, 'Femenil'),
(230332, 'Edgardo', 'Kihn Mohr', '2019-12-15', 'azeo213134njjorq7j', 7, 'Ambidiestro', 'Derecho', 'asm.', 1, 'Varonil'),
(230333, 'Liliana', 'Watsica Sporer', '1972-01-26', 'ejmr538149mfhxtf7o', 9, 'Derecho', 'Ambidiestro', 'vkf.', 1, 'Femenil'),
(230334, 'Tomas', 'Koepp Volkman', '1981-04-14', 'jyjq624345gyqekm2p', 5, 'Izquierdo', 'Derecho', 'hky.', 1, 'Varonil'),
(230335, 'Wilford', 'King Lang', '2014-07-04', 'deje726366nuzdax6b', 4, 'Izquierdo', 'Derecho', 'gue.', 1, 'Varonil'),
(230336, 'Michel', 'Hilpert Little', '1983-01-12', 'roti775921oiqcca5y', 9, 'Izquierdo', 'Izquierdo', 'elv.', 1, 'Varonil'),
(230337, 'Lamar', 'Leuschke Cartwright', '2002-07-01', 'pnxs575654tyuorb2t', 6, 'Izquierdo', 'Derecho', 'bxt.', 1, 'Varonil'),
(230338, 'Christopher', 'Beatty Jakubowski', '2008-05-31', 'omgl774897riyacf9i', 4, 'Ambidiestro', 'Derecho', 'wax.', 1, 'Varonil'),
(230339, 'Bennett', 'Collins Dietrich', '2008-09-15', 'tqlf384202ukdlit5n', 10, 'Derecho', 'Izquierdo', 'hze.', 1, 'Varonil'),
(230340, 'Anjali', 'Luettgen Dicki', '2014-04-08', 'yzkn646588jjbeiv3s', 3, 'Ambidiestro', 'Izquierdo', 'vpb.', 1, 'Femenil'),
(230341, 'Shanon', 'Kertzmann Fisher', '1989-01-15', 'arrj113237lgqvfx7h', 3, 'Ambidiestro', 'Derecho', 'vol.', 1, 'Femenil'),
(230342, 'Yasmin', 'Gerhold Gottlieb', '1992-10-25', 'nybw343278htmpyy9j', 1, 'Derecho', 'Derecho', 'qsx.', 1, 'Femenil'),
(230343, 'Tremayne', 'Nienow Goodwin', '2005-08-20', 'ywuo937926smsloi1j', 4, 'Ambidiestro', 'Derecho', 'onw.', 1, 'Varonil'),
(230344, 'Delfina', 'Stoltenberg Pagac', '1977-01-20', 'umdl644727tkvymy6z', 8, 'Ambidiestro', 'Ambidiestro', 'cvt.', 1, 'Femenil'),
(230345, 'Santiago', 'Spencer Ratke', '1988-01-13', 'guvm242127mqqook2o', 8, 'Derecho', 'Derecho', 'prz.', 1, 'Varonil'),
(230346, 'Rigoberto', 'Boehm Christiansen', '2016-07-04', 'xtik439877yeawfq4y', 1, 'Izquierdo', 'Izquierdo', 'nsn.', 1, 'Varonil'),
(230347, 'Antwan', 'Connelly Sawayn', '1993-11-03', 'oxbo460717yserhe9d', 9, 'Izquierdo', 'Izquierdo', 'hxm.', 1, 'Varonil'),
(230348, 'Jada', 'Fritsch Hackett', '1981-11-04', 'xolx210356rgbfbv6o', 2, 'Izquierdo', 'Derecho', 'uav.', 1, 'Femenil'),
(230349, 'Kathryn', 'Rogahn VonRueden', '2010-06-05', 'uonf253050ibwwtx7p', 9, 'Derecho', 'Derecho', 'ipp.', 1, 'Femenil'),
(230350, 'Adrian', 'Hand Schroeder', '2020-11-08', 'jmlt033573wkyxpl4y', 4, 'Ambidiestro', 'Izquierdo', 'ycu.', 1, 'Varonil'),
(230351, 'Gisselle', 'Howell Abbott', '1972-04-28', 'ahtg195986maozee4r', 10, 'Derecho', 'Izquierdo', 'hwd.', 1, 'Femenil'),
(230352, 'Soledad', 'Schaden Klocko', '2012-09-09', 'fdxn188775oblvta3d', 4, 'Izquierdo', 'Izquierdo', 'kjn.', 1, 'Varonil'),
(230353, 'Tressie', 'Hudson Collier', '1980-08-16', 'nwjn499661emrqis7r', 2, 'Derecho', 'Izquierdo', 'knr.', 1, 'Femenil'),
(230354, 'Nat', 'Auer Volkman', '2009-06-19', 'teac687085wezktz4d', 1, 'Ambidiestro', 'Ambidiestro', 'rqf.', 1, 'Varonil'),
(230355, 'Lorena', 'Sauer Harber', '1972-10-01', 'pjhh923035gkfakd7w', 4, 'Derecho', 'Izquierdo', 'fxc.', 1, 'Femenil'),
(230356, 'Izaiah', 'Thompson Schuster', '2018-04-06', 'ysgd564040xxvxkw6b', 5, 'Ambidiestro', 'Ambidiestro', 'iah.', 1, 'Varonil'),
(230357, 'Antwon', 'Crona Kiehn', '2003-01-11', 'btsn280299smbmkn0a', 9, 'Ambidiestro', 'Derecho', 'izn.', 1, 'Varonil'),
(230358, 'Thelma', 'Borer Kling', '2016-06-16', 'rvqn489603mzfkuu3t', 2, 'Izquierdo', 'Derecho', 'zos.', 1, 'Femenil'),
(230359, 'Birdie', 'Rippin McKenzie', '2020-01-22', 'crkn454492evgivf1e', 10, 'Ambidiestro', 'Izquierdo', 'gfe.', 1, 'Femenil'),
(230360, 'Dalton', 'Borer Leuschke', '2021-06-02', 'bniz504981mbidng3p', 7, 'Ambidiestro', 'Ambidiestro', 'phj.', 1, 'Varonil'),
(230361, 'Ozella', 'O\'Keefe Predovic', '2010-04-10', 'zgxs753294tfoedk7y', 7, 'Derecho', 'Derecho', 'taj.', 1, 'Femenil'),
(230362, 'Aaron', 'Lind Mayert', '1992-12-12', 'jbxq391899mmafco9c', 6, 'Ambidiestro', 'Derecho', 'bvq.', 1, 'Varonil'),
(230363, 'Dayana', 'Kris Marks', '1981-11-10', 'rdve022627dhgzhs4p', 11, 'Derecho', 'Ambidiestro', 'rrt.', 1, 'Femenil'),
(230364, 'Sage', 'McKenzie Doyle', '2019-10-13', 'nbuf994658azfjyq3a', 1, 'Ambidiestro', 'Izquierdo', 'edz.', 1, 'Varonil'),
(230365, 'Easter', 'Wolf Feeney', '1976-11-06', 'jppb841715fjlzjv3x', 2, 'Ambidiestro', 'Derecho', 'ogz.', 1, 'Varonil'),
(230366, 'Lillie', 'Leannon Ondricka', '2011-09-06', 'hvkr436012gjfanw2e', 11, 'Izquierdo', 'Derecho', 'wbg.', 1, 'Femenil'),
(230367, 'Joan', 'Gutkowski Bode', '1996-05-05', 'cirb371441oxojqw9z', 1, 'Ambidiestro', 'Derecho', 'vpc.', 1, 'Varonil'),
(230368, 'Jaden', 'Langosh Hirthe', '2003-04-14', 'pdwk388209kiutqn7s', 7, 'Izquierdo', 'Izquierdo', 'ehk.', 1, 'Varonil'),
(230369, 'Jarrett', 'Stoltenberg Beer', '1986-07-08', 'gbce912330fwdnqr4e', 11, 'Derecho', 'Ambidiestro', 'oxl.', 1, 'Varonil'),
(230370, 'Harmony', 'O\'Reilly Marvin', '2018-03-02', 'eseh985053lqxiug4s', 8, 'Izquierdo', 'Ambidiestro', 'lyk.', 1, 'Femenil'),
(230371, 'Freeman', 'Cummings Homenick', '1972-07-15', 'lbxm028836fhzsyu6g', 1, 'Ambidiestro', 'Derecho', 'nbj.', 1, 'Varonil'),
(230372, 'Casimer', 'Pouros Terry', '1993-03-15', 'achp691633mxkztw5j', 10, 'Izquierdo', 'Derecho', 'hny.', 1, 'Varonil'),
(230373, 'Wilma', 'Wolf Cartwright', '1973-11-30', 'wlbj363340gmzdwv7i', 9, 'Ambidiestro', 'Ambidiestro', 'bsk.', 1, 'Femenil'),
(230374, 'Lilla', 'Zieme Price', '2017-11-15', 'bwhh986859vzlxyp2e', 7, 'Derecho', 'Ambidiestro', 'nek.', 1, 'Femenil'),
(230375, 'Patricia', 'Goodwin Becker', '2021-05-06', 'ahjm769267cgxbwk8m', 10, 'Ambidiestro', 'Derecho', 'nas.', 1, 'Femenil'),
(230376, 'Ellsworth', 'Jacobi Herzog', '2019-11-28', 'qdjw267919lovqyp2h', 9, 'Derecho', 'Ambidiestro', 'vuu.', 1, 'Varonil'),
(230377, 'Theo', 'Fahey Borer', '2021-12-25', 'kdtk951783zwyzeu8x', 5, 'Izquierdo', 'Izquierdo', 'ejp.', 1, 'Varonil'),
(230378, 'Jordy', 'Fritsch Grimes', '2013-05-28', 'uyjo114296coigtf3f', 7, 'Derecho', 'Izquierdo', 'ozg.', 1, 'Varonil'),
(230379, 'Jacey', 'Wilderman Prohaska', '2017-10-21', 'frbv237074azzqgi5r', 7, 'Izquierdo', 'Izquierdo', 'bed.', 1, 'Varonil'),
(230380, 'Kareem', 'Simonis King', '1993-08-28', 'hxvz580255lxqqmv5w', 9, 'Izquierdo', 'Ambidiestro', 'gbz.', 1, 'Varonil'),
(230381, 'Amos', 'Brown Corwin', '1982-11-23', 'zghq445369zmtcbj6e', 5, 'Ambidiestro', 'Ambidiestro', 'zpw.', 1, 'Varonil'),
(230382, 'Alexandro', 'Bergstrom Medhurst', '1995-07-04', 'rfvs337160qvzstd6e', 3, 'Ambidiestro', 'Ambidiestro', 'qfn.', 1, 'Varonil'),
(230383, 'Thea', 'Okuneva Cormier', '2019-04-09', 'pkzf016436rphsso9n', 1, 'Derecho', 'Ambidiestro', 'rhl.', 1, 'Femenil'),
(230384, 'Lucius', 'Kiehn Hoeger', '1986-09-15', 'mehi502933yuvuel0d', 8, 'Izquierdo', 'Derecho', 'ham.', 1, 'Varonil'),
(230385, 'Marguerite', 'Doyle Lowe', '2010-06-06', 'soza765759zhmcew4c', 9, 'Derecho', 'Ambidiestro', 'dxs.', 1, 'Femenil'),
(230386, 'Caden', 'Boehm King', '2013-04-12', 'ndqx752902nhnyro1v', 6, 'Derecho', 'Izquierdo', 'rdw.', 1, 'Varonil'),
(230387, 'Kay', 'West Eichmann', '1989-12-31', 'fctp095622xlgudc4t', 2, 'Izquierdo', 'Ambidiestro', 'xrm.', 1, 'Varonil'),
(230388, 'Carole', 'Jones Emard', '2020-06-10', 'wjgo682960zkcpux3y', 7, 'Derecho', 'Ambidiestro', 'xxs.', 1, 'Femenil'),
(230389, 'Reanna', 'Stark Vandervort', '1984-02-11', 'gltf585435hylbbf9k', 7, 'Derecho', 'Izquierdo', 'rnt.', 1, 'Femenil'),
(230390, 'Abner', 'Corwin Franecki', '2000-06-27', 'masw823462tkntky6f', 5, 'Derecho', 'Izquierdo', 'laf.', 1, 'Varonil'),
(230391, 'Janice', 'Witting Bernier', '1972-01-04', 'fjwq959798szuvsb1t', 1, 'Derecho', 'Ambidiestro', 'fhf.', 1, 'Femenil'),
(230392, 'Berneice', 'Kuphal Wunsch', '1973-04-02', 'rmfe015067cljvpm7a', 9, 'Izquierdo', 'Derecho', 'lon.', 1, 'Femenil'),
(230393, 'Prudence', 'Hilpert Spencer', '1970-05-18', 'rsab772789ylexpi5f', 4, 'Derecho', 'Derecho', 'mly.', 1, 'Femenil'),
(230394, 'Sarina', 'Cummings Russel', '1971-03-26', 'gdyb534019ymkymm1s', 8, 'Ambidiestro', 'Izquierdo', 'lkh.', 1, 'Femenil'),
(230395, 'Roberta', 'Littel Wolf', '1980-03-21', 'uydx448432vscpqk6h', 1, 'Derecho', 'Ambidiestro', 'jwv.', 1, 'Femenil'),
(230396, 'Cierra', 'Nikolaus Graham', '1970-02-05', 'ujjh647641koejfr6h', 2, 'Izquierdo', 'Derecho', 'fbn.', 1, 'Femenil'),
(230397, 'Krystina', 'Watsica Barton', '2010-08-28', 'ylvk836434xyjspy9o', 1, 'Ambidiestro', 'Ambidiestro', 'hlt.', 1, 'Femenil'),
(230398, 'Brigitte', 'Botsford Lebsack', '1973-12-09', 'ngvp810193ewsqaa6c', 11, 'Ambidiestro', 'Izquierdo', 'egc.', 1, 'Femenil'),
(230399, 'Maryse', 'Weimann Lesch', '2021-05-10', 'oboe390746gnmvkr1n', 5, 'Derecho', 'Derecho', 'fmb.', 1, 'Femenil'),
(230400, 'Tess', 'Thiel Sporer', '2019-08-31', 'vjlo500459ydhmew2j', 1, 'Derecho', 'Derecho', 'vpe.', 1, 'Femenil'),
(230401, 'Darian', 'Erdman Watsica', '1973-08-13', 'pbzf431572dmcgps5r', 6, 'Derecho', 'Derecho', 'tem.', 1, 'Varonil'),
(230402, 'Elyssa', 'Larkin Huel', '1972-12-06', 'vskj629756cuzzpd9w', 8, 'Izquierdo', 'Izquierdo', 'kxf.', 1, 'Femenil'),
(230403, 'Kay', 'Auer Daniel', '2007-10-20', 'sqzo339197qbnfcm2n', 10, 'Izquierdo', 'Derecho', 'yiz.', 1, 'Varonil');
INSERT INTO `jugadores` (`idAfiliacion`, `nombre`, `apellidos`, `fechaNacimiento`, `curp`, `posicion`, `golpea`, `tira`, `abreviacion`, `status`, `rama`) VALUES
(230404, 'Sincere', 'Beahan Jones', '1989-08-02', 'bijl437423lhsowd3p', 4, 'Ambidiestro', 'Izquierdo', 'gqe.', 1, 'Femenil'),
(230405, 'Blake', 'Sipes Weber', '1972-08-02', 'xuvt863556ywgtua3s', 3, 'Derecho', 'Izquierdo', 'the.', 1, 'Varonil'),
(230406, 'Keaton', 'Aufderhar Predovic', '2023-02-20', 'qhql251990zrqflp3m', 6, 'Derecho', 'Izquierdo', 'ldo.', 1, 'Varonil'),
(230407, 'Merritt', 'Prosacco Sipes', '2005-11-20', 'gsvt335496sfahuy3u', 7, 'Derecho', 'Derecho', 'feh.', 1, 'Varonil'),
(230408, 'Jude', 'Spencer Witting', '1976-03-31', 'jvoq677278yllmdv0e', 5, 'Derecho', 'Izquierdo', 'ddb.', 1, 'Femenil'),
(230409, 'Angelica', 'Lemke DuBuque', '1993-07-04', 'wjhk921325hssrjj9h', 9, 'Derecho', 'Izquierdo', 'lbv.', 1, 'Femenil'),
(230410, 'Rylan', 'Altenwerth Kiehn', '1985-06-22', 'pnqq906783raaqwl1i', 8, 'Derecho', 'Derecho', 'ncj.', 1, 'Varonil'),
(230411, 'Lucy', 'Rohan Carter', '2016-12-14', 'audq338928piesnx6b', 11, 'Ambidiestro', 'Derecho', 'fow.', 1, 'Femenil'),
(230412, 'Wilfred', 'Dickinson Tillman', '1980-12-31', 'bpvl492712fgyhfk2s', 7, 'Ambidiestro', 'Ambidiestro', 'fhm.', 1, 'Varonil'),
(230413, 'Rachelle', 'Lehner Gislason', '2002-03-09', 'iixx630288crputs4b', 2, 'Izquierdo', 'Izquierdo', 'ojs.', 1, 'Femenil'),
(230414, 'Stewart', 'Rempel Ankunding', '1978-05-10', 'iakq822129hnpcdp7m', 11, 'Izquierdo', 'Izquierdo', 'egb.', 1, 'Varonil'),
(230415, 'Marilie', 'Leuschke Koepp', '1975-07-11', 'vzdr783817nawfse4b', 2, 'Ambidiestro', 'Izquierdo', 'vnf.', 1, 'Femenil'),
(230416, 'General', 'Cole Bartell', '1992-07-06', 'trps933964xjdvpn6n', 3, 'Ambidiestro', 'Ambidiestro', 'cjb.', 1, 'Varonil'),
(230417, 'Ivah', 'Kuhlman Collier', '1987-06-03', 'ekrg411473tdyhpk5f', 5, 'Ambidiestro', 'Derecho', 'riy.', 1, 'Femenil'),
(230418, 'Chadd', 'Ward Glover', '1993-06-22', 'jxah414391ejcufl6b', 8, 'Derecho', 'Derecho', 'ape.', 1, 'Varonil'),
(230419, 'Miles', 'Towne Rogahn', '1975-07-28', 'sxoi143557kipizy9t', 11, 'Derecho', 'Ambidiestro', 'jkt.', 1, 'Varonil'),
(230420, 'Anne', 'Becker Kutch', '1976-10-22', 'eeic169213dxlari3t', 11, 'Derecho', 'Ambidiestro', 'diu.', 1, 'Femenil'),
(230421, 'Demetris', 'Bahringer Heidenreich', '2011-10-19', 'cpds201008jyzuba9z', 2, 'Izquierdo', 'Ambidiestro', 'ect.', 1, 'Femenil'),
(230422, 'Mitchell', 'Denesik O\'Reilly', '1999-03-27', 'sjrf251757ixkqbx2k', 6, 'Izquierdo', 'Derecho', 'kgz.', 1, 'Varonil'),
(230423, 'Karley', 'Hackett Frami', '1991-12-31', 'ppzj196024yzupqj4k', 9, 'Izquierdo', 'Ambidiestro', 'dnn.', 1, 'Varonil'),
(230424, 'Susan', 'Wintheiser Morar', '2022-10-08', 'xdpr827386xipfbz6r', 4, 'Izquierdo', 'Ambidiestro', 'qwv.', 1, 'Femenil'),
(230425, 'Christelle', 'Heidenreich Rutherford', '2013-09-26', 'tepp786268flweni3v', 4, 'Ambidiestro', 'Derecho', 'wzn.', 1, 'Femenil'),
(230426, 'Ebba', 'Howell Stoltenberg', '1984-05-07', 'atyr385541zfbbei2a', 2, 'Derecho', 'Ambidiestro', 'ade.', 1, 'Femenil'),
(230427, 'Ali', 'Kihn Windler', '1993-10-22', 'udys527155jnzsjo5w', 6, 'Ambidiestro', 'Derecho', 'odv.', 1, 'Varonil'),
(230428, 'Madisyn', 'D\'Amore Little', '2013-09-28', 'ptsi590576gocfux8k', 10, 'Derecho', 'Ambidiestro', 'kns.', 1, 'Femenil'),
(230429, 'Reed', 'Wiegand Lueilwitz', '2005-07-15', 'gxcq840868gnhmgl6m', 6, 'Ambidiestro', 'Izquierdo', 'ral.', 1, 'Varonil'),
(230430, 'Gunner', 'Conroy Veum', '1988-03-26', 'zmbb470245ddtsfv5j', 11, 'Izquierdo', 'Derecho', 'qcx.', 1, 'Varonil'),
(230431, 'Arlie', 'Reilly Gaylord', '2010-04-13', 'qzky915125ushlly6e', 3, 'Derecho', 'Ambidiestro', 'dcz.', 1, 'Femenil'),
(230432, 'Maida', 'Beatty Lakin', '1990-03-22', 'zxov361538sjsssu0k', 6, 'Ambidiestro', 'Derecho', 'glb.', 1, 'Femenil'),
(230433, 'Monte', 'Dach Jaskolski', '1992-09-22', 'edmp223118fimsae6e', 6, 'Izquierdo', 'Ambidiestro', 'ngo.', 1, 'Varonil'),
(230434, 'Pearline', 'Towne Hirthe', '1996-10-28', 'xdnq686719gakqkc7t', 8, 'Derecho', 'Derecho', 'ayo.', 1, 'Femenil'),
(230435, 'Burdette', 'Keeling Schoen', '1994-09-17', 'lpiv730085qyuyjb2s', 10, 'Izquierdo', 'Derecho', 'xfd.', 1, 'Femenil'),
(230436, 'Emmie', 'Goldner Bechtelar', '2009-04-22', 'pcxh046519vydims6m', 4, 'Derecho', 'Ambidiestro', 'wqo.', 1, 'Femenil'),
(230437, 'Tyrell', 'McClure Ledner', '2005-07-22', 'pqvt631349rdcwqy5t', 8, 'Derecho', 'Ambidiestro', 'xjp.', 1, 'Varonil'),
(230438, 'Dimitri', 'Klein Jast', '2020-07-24', 'jmbf760268pivvov7v', 3, 'Izquierdo', 'Derecho', 'hoe.', 1, 'Varonil'),
(230439, 'Ransom', 'Kirlin Wunsch', '1978-05-07', 'wcrt191477qczcef5f', 3, 'Izquierdo', 'Derecho', 'lkk.', 1, 'Varonil'),
(230440, 'Roscoe', 'Bahringer Beier', '1980-03-03', 'fgoz795319tvjlev0s', 3, 'Ambidiestro', 'Ambidiestro', 'pfd.', 1, 'Varonil'),
(230441, 'Cortney', 'Toy Waelchi', '2009-07-09', 'wnom148882ssxqht1m', 7, 'Derecho', 'Izquierdo', 'pwb.', 1, 'Femenil'),
(230442, 'Elinor', 'Jacobs Gislason', '2001-08-07', 'ukng353576cbfvhc5u', 6, 'Izquierdo', 'Izquierdo', 'pfv.', 1, 'Femenil'),
(230443, 'Alexandro', 'Wisoky Schultz', '1971-09-24', 'avfa266074mldyys5y', 5, 'Derecho', 'Ambidiestro', 'nzt.', 1, 'Varonil'),
(230444, 'Emma', 'Stamm Quigley', '2001-03-03', 'tdrx252419kdffed4y', 8, 'Izquierdo', 'Derecho', 'fzt.', 1, 'Femenil'),
(230445, 'Dannie', 'Jacobs Torphy', '1971-02-18', 'ynqy127629bmrbrx5i', 8, 'Izquierdo', 'Ambidiestro', 'uec.', 1, 'Femenil'),
(230446, 'Jeramy', 'Abbott Nolan', '2012-12-31', 'mcjr373995ucidlj1g', 8, 'Izquierdo', 'Derecho', 'pdg.', 1, 'Varonil'),
(230447, 'Melyssa', 'Herman Fay', '1987-04-16', 'lovw912378qahvyc2m', 2, 'Izquierdo', 'Izquierdo', 'yzk.', 1, 'Femenil'),
(230448, 'Imogene', 'Hahn Spencer', '1998-04-20', 'pltc933390stvego8d', 8, 'Izquierdo', 'Izquierdo', 'ahi.', 1, 'Femenil'),
(230449, 'Jeffry', 'Wunsch Jacobi', '2016-07-24', 'yzsk230902ohguys5a', 6, 'Izquierdo', 'Derecho', 'jjg.', 1, 'Varonil'),
(230450, 'Leilani', 'Murray Steuber', '2018-02-07', 'noqh220101wrrrqm9p', 9, 'Derecho', 'Derecho', 'bhh.', 1, 'Femenil'),
(230451, 'Makenzie', 'Bailey Tremblay', '1992-04-28', 'sron195859mvncsj7i', 9, 'Ambidiestro', 'Derecho', 'btg.', 1, 'Femenil'),
(230452, 'Kaci', 'Sawayn Schamberger', '2019-05-19', 'ejwt411139coetwd4z', 10, 'Derecho', 'Derecho', 'gpm.', 1, 'Femenil'),
(230453, 'Sarina', 'Hickle Kreiger', '1985-04-11', 'facl746353ydhjvx2h', 1, 'Izquierdo', 'Ambidiestro', 'fmb.', 1, 'Femenil'),
(230454, 'Wyman', 'Bogisich Koelpin', '2015-12-31', 'ypbi533465rbyale8r', 7, 'Izquierdo', 'Derecho', 'xdu.', 1, 'Varonil'),
(230455, 'Sammy', 'Turner Tillman', '1977-03-06', 'ppot377631cskqoe3p', 1, 'Derecho', 'Ambidiestro', 'dkv.', 1, 'Varonil'),
(230456, 'Skye', 'Ferry Cronin', '1980-04-13', 'mbbj217066mpiiua0q', 10, 'Derecho', 'Izquierdo', 'ugv.', 1, 'Varonil'),
(230457, 'Kennith', 'Emmerich Ritchie', '1985-09-30', 'qktj703289kwitxm9b', 6, 'Derecho', 'Izquierdo', 'xds.', 1, 'Varonil'),
(230458, 'Kadin', 'Gusikowski Volkman', '1979-07-10', 'zphk575801uldtva2b', 3, 'Ambidiestro', 'Izquierdo', 'evz.', 1, 'Varonil'),
(230459, 'Charley', 'Gottlieb Kuphal', '2004-09-21', 'rddo517436agvcmp2v', 2, 'Izquierdo', 'Izquierdo', 'hgw.', 1, 'Varonil'),
(230460, 'Xavier', 'Stokes Zemlak', '2013-07-22', 'nksi330811zrkbeu1m', 11, 'Ambidiestro', 'Izquierdo', 'yio.', 1, 'Varonil'),
(230461, 'Nathanial', 'Kohler Boehm', '1991-12-29', 'yxin493693bgrsuz1n', 11, 'Derecho', 'Ambidiestro', 'nwd.', 1, 'Varonil'),
(230462, 'Savanah', 'Jacobi Connelly', '2007-09-04', 'lfft094331nbvekj8f', 2, 'Derecho', 'Ambidiestro', 'pjx.', 1, 'Femenil'),
(230463, 'Ayla', 'Lakin Deckow', '1973-07-15', 'cmvm732169ywhnbx0c', 9, 'Ambidiestro', 'Derecho', 'ckd.', 1, 'Femenil'),
(230464, 'Kendall', 'Fisher Conn', '2004-01-30', 'ayva217390cmpqzl8p', 9, 'Ambidiestro', 'Ambidiestro', 'iyx.', 1, 'Varonil'),
(230465, 'Lillian', 'Connelly Muller', '2006-01-21', 'fejv707152xctqvx4w', 8, 'Ambidiestro', 'Derecho', 'dvn.', 1, 'Femenil'),
(230466, 'Jeanette', 'Paucek Nicolas', '1974-09-25', 'ojnb733901glgkkp3h', 11, 'Ambidiestro', 'Izquierdo', 'ndc.', 1, 'Femenil'),
(230467, 'Zechariah', 'Kozey Oberbrunner', '1980-02-15', 'pkig680088pfkvgo6v', 4, 'Derecho', 'Ambidiestro', 'cgo.', 1, 'Varonil'),
(230468, 'Barrett', 'Wiza Koepp', '2006-08-03', 'lebt713484cxlixq6m', 7, 'Izquierdo', 'Derecho', 'tmi.', 1, 'Varonil'),
(230469, 'Charley', 'Borer Senger', '1977-02-03', 'pbxg492030trfyfd1e', 2, 'Ambidiestro', 'Izquierdo', 'nwh.', 1, 'Varonil'),
(230470, 'Wellington', 'Botsford Tillman', '1986-01-06', 'zpxy146930dtxfwt3n', 3, 'Izquierdo', 'Izquierdo', 'pcc.', 1, 'Varonil'),
(230471, 'Tom', 'Nader Reichert', '1981-04-08', 'dded651936olnzwu3d', 1, 'Ambidiestro', 'Ambidiestro', 'opa.', 1, 'Varonil'),
(230472, 'Lelah', 'Donnelly Dach', '1995-01-17', 'rmwh390278qqfwub4z', 2, 'Derecho', 'Ambidiestro', 'qtx.', 1, 'Femenil'),
(230473, 'Garrett', 'Cormier Cronin', '1987-05-23', 'jvle260028nuwusz9i', 1, 'Ambidiestro', 'Ambidiestro', 'frx.', 1, 'Varonil'),
(230474, 'Colt', 'Lubowitz Runte', '2011-12-20', 'gdpr432822xhnogm7q', 8, 'Izquierdo', 'Ambidiestro', 'izb.', 1, 'Varonil'),
(230475, 'Brielle', 'Yost Conroy', '2009-09-19', 'uqgv724787bvsblv2o', 7, 'Derecho', 'Ambidiestro', 'xxv.', 1, 'Femenil'),
(230476, 'Amari', 'McGlynn Grant', '1990-03-08', 'wviv513983fracrf1z', 10, 'Derecho', 'Derecho', 'qqx.', 1, 'Varonil'),
(230477, 'Joel', 'Farrell Hudson', '1973-08-09', 'kbci148077qffvaj9e', 4, 'Izquierdo', 'Izquierdo', 'cgb.', 1, 'Varonil'),
(230478, 'Lue', 'Tillman Douglas', '2005-02-08', 'vzfw009186zdricr6x', 11, 'Izquierdo', 'Izquierdo', 'oux.', 1, 'Femenil'),
(230479, 'Zack', 'Prohaska Sipes', '1978-09-15', 'tyod476848fciwjh6f', 2, 'Derecho', 'Izquierdo', 'ftj.', 1, 'Varonil'),
(230480, 'Malika', 'Kuhn McClure', '2009-05-13', 'pbmr503726iuhscp4e', 5, 'Ambidiestro', 'Derecho', 'apl.', 1, 'Femenil'),
(230481, 'Marquise', 'Schmeler Emmerich', '1980-04-11', 'efsi851813zgowdf4v', 1, 'Ambidiestro', 'Derecho', 'czk.', 1, 'Femenil'),
(230482, 'Bo', 'Gislason Buckridge', '2006-01-28', 'mpjx471108dnobtu7s', 1, 'Izquierdo', 'Izquierdo', 'ugf.', 1, 'Varonil'),
(230483, 'Alivia', 'Jacobson Ziemann', '1992-12-25', 'bwyi900611yyjfcv2d', 10, 'Derecho', 'Izquierdo', 'jql.', 1, 'Femenil'),
(230484, 'Ignatius', 'Zboncak Bogisich', '2005-02-04', 'iovi017316uuhilb0w', 10, 'Derecho', 'Izquierdo', 'kip.', 1, 'Varonil'),
(230485, 'Jennie', 'Corwin Keebler', '1975-12-13', 'bxvy102087xsjtgf2g', 10, 'Ambidiestro', 'Derecho', 'ckx.', 1, 'Femenil'),
(230486, 'Madie', 'O\'Kon Johnson', '2022-09-04', 'umgq347604jaxzdw4e', 10, 'Ambidiestro', 'Derecho', 'xev.', 1, 'Femenil'),
(230487, 'Keeley', 'Osinski Pollich', '1999-09-17', 'mmld367571rfbzpz6n', 11, 'Izquierdo', 'Derecho', 'uam.', 1, 'Varonil'),
(230488, 'Isac', 'Glover Monahan', '2004-11-16', 'emar160650pkdzxy3l', 7, 'Derecho', 'Izquierdo', 'ulz.', 1, 'Varonil'),
(230489, 'Kyler', 'Reinger Wyman', '2003-07-03', 'opqq604550glenth1x', 6, 'Derecho', 'Izquierdo', 'fob.', 1, 'Varonil'),
(230490, 'Arvid', 'Schimmel Rippin', '1997-08-27', 'awlx935801vrheqq4g', 9, 'Izquierdo', 'Ambidiestro', 'fzj.', 1, 'Varonil'),
(230491, 'Jordy', 'Dickinson Stark', '1984-01-30', 'zrvf058832yzlkpd8k', 2, 'Ambidiestro', 'Ambidiestro', 'iij.', 1, 'Varonil'),
(230492, 'Clarabelle', 'Schuppe Armstrong', '2001-09-30', 'gpqn833754xvceai2r', 4, 'Izquierdo', 'Izquierdo', 'sgq.', 1, 'Femenil'),
(230493, 'Joan', 'Funk Swaniawski', '2014-03-12', 'dotw514301rzkrye1a', 6, 'Derecho', 'Izquierdo', 'hiq.', 1, 'Varonil'),
(230494, 'Corrine', 'Wyman Yost', '1992-01-23', 'lpgf486881tdotoh0z', 7, 'Ambidiestro', 'Derecho', 'tzm.', 1, 'Femenil'),
(230495, 'Kirstin', 'Padberg Dare', '2012-05-12', 'bqxy748290hluzul5k', 1, 'Izquierdo', 'Izquierdo', 'srv.', 1, 'Femenil'),
(230496, 'Lisa', 'Kulas Klocko', '1990-09-01', 'wtfi010702xizcvi2p', 1, 'Ambidiestro', 'Ambidiestro', 'owk.', 1, 'Femenil'),
(230497, 'Julia', 'Moore Frami', '1992-01-11', 'euie717194fwotdr3u', 9, 'Ambidiestro', 'Derecho', 'ajc.', 1, 'Femenil'),
(230498, 'Sid', 'Fisher West', '1981-07-27', 'fzpw083541lrejha0t', 9, 'Ambidiestro', 'Ambidiestro', 'vvm.', 1, 'Varonil'),
(230499, 'Misty', 'Luettgen Heaney', '1988-09-25', 'yltv703289miltty4g', 10, 'Izquierdo', 'Derecho', 'smt.', 1, 'Femenil');

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

--
-- Volcado de datos para la tabla `lanzadores`
--

INSERT INTO `lanzadores` (`idLanzadores`, `idJuego`, `idAfiliacion`, `IP`, `BA`, `C`, `H`, `BB`, `K`, `PCA`, `POP`) VALUES
(1, 1, 230000, 1, 1, 1, 1, 1, 1, 1, 1);

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

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`idLiga`, `descripcion`, `presidente`, `coordinador`, `mapa`, `direccion`, `telefono`, `redes`) VALUES
(1, 'hola', 'yo', 'tu', 'aqui', 'mi casa', 3333, 'nose');

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
(1, 'jose', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2023_05_10_173805_create_users_table', 1);

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
(1, 'oui');

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
(1, 3, 1, 230000),
(2, 4, 1, 230000),
(3, 3, 1, 230000),
(4, 4, 1, 230000),
(5, 3, 1, 230001),
(6, 3, 1, 230002);

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

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`idTemporada`, `nombre`, `idLiga`, `grupo`, `categoria`, `momento`, `temporada`) VALUES
(1, '1', 1, '1', '1', '1', NULL);

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'raysk', 'francogarciaoscar@gmail.com', '$2y$10$afnhKKsvky.V184vvly0eOexTFHnfAP0Dbbm8NnPhcLC8fAHqYnmW', NULL);

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
  MODIFY `idAmpayer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ampayersjuego`
--
ALTER TABLE `ampayersjuego`
  MODIFY `idCuerpo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bateadores`
--
ALTER TABLE `bateadores`
  MODIFY `idBateadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lanzadores`
--
ALTER TABLE `lanzadores`
  MODIFY `idLanzadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `idLiga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `manejadores`
--
ALTER TABLE `manejadores`
  MODIFY `idTecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parques`
--
ALTER TABLE `parques`
  MODIFY `idCampo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rosters`
--
ALTER TABLE `rosters`
  MODIFY `idRoster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `idTemporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
