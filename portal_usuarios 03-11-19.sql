-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2019 a las 05:19:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`) VALUES
(1, 'Admin1', 'admon', 'admin@hotmail.com', 'password1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_rango`
--

CREATE TABLE `ci_rango` (
  `id` int(11) NOT NULL,
  `id_rango_ci` int(11) NOT NULL,
  `id_ci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ci_rango`
--

INSERT INTO `ci_rango` (`id`, `id_rango_ci`, `id_ci`) VALUES
(1, 1, 123),
(2, 2, 98),
(3, 2, 99),
(4, 2, 100),
(5, 2, 101),
(6, 2, 102),
(7, 2, 103),
(8, 2, 104),
(9, 2, 105),
(10, 2, 106),
(11, 2, 107),
(12, 2, 108),
(13, 2, 109),
(14, 2, 110),
(15, 2, 111),
(16, 2, 112),
(17, 2, 113),
(18, 2, 114),
(19, 2, 115),
(20, 2, 117),
(21, 2, 118),
(22, 2, 119),
(23, 2, 120),
(24, 2, 121),
(25, 2, 122),
(26, 3, 28),
(27, 3, 29),
(28, 3, 30),
(29, 3, 31),
(30, 3, 32),
(31, 3, 33),
(32, 3, 34),
(33, 3, 35),
(34, 3, 36),
(35, 3, 37),
(36, 3, 38),
(37, 3, 39),
(38, 3, 39),
(39, 3, 40),
(40, 3, 41),
(41, 3, 42),
(42, 3, 43),
(43, 3, 44),
(44, 3, 45),
(45, 3, 46),
(46, 3, 47),
(47, 3, 48),
(48, 3, 49),
(49, 3, 50),
(50, 3, 51),
(51, 3, 52),
(52, 3, 53),
(53, 3, 54),
(54, 3, 55),
(55, 3, 56),
(56, 3, 57),
(57, 3, 58),
(58, 3, 59),
(59, 3, 60),
(60, 3, 61),
(61, 3, 62),
(62, 3, 63),
(63, 3, 64),
(64, 3, 65),
(65, 3, 66),
(66, 3, 67),
(67, 3, 68),
(68, 3, 69),
(69, 3, 70),
(70, 3, 71),
(71, 3, 72),
(72, 3, 73),
(73, 3, 75),
(74, 3, 76),
(75, 3, 77),
(76, 3, 78),
(77, 3, 79),
(78, 3, 80),
(79, 3, 81),
(80, 3, 82),
(81, 3, 83),
(82, 3, 84),
(83, 3, 85),
(84, 3, 86),
(85, 3, 87),
(86, 3, 88),
(87, 3, 89),
(88, 3, 90),
(89, 3, 91),
(90, 3, 92),
(91, 3, 93),
(92, 3, 94),
(93, 3, 95),
(94, 3, 96),
(95, 3, 97),
(121, 4, 1),
(122, 4, 2),
(123, 4, 5),
(124, 4, 6),
(125, 4, 7),
(126, 4, 8),
(127, 4, 9),
(128, 4, 10),
(129, 4, 11),
(130, 4, 12),
(131, 4, 13),
(132, 4, 14),
(133, 4, 15),
(134, 4, 16),
(135, 4, 17),
(136, 4, 18),
(137, 4, 19),
(138, 4, 20),
(139, 4, 21),
(140, 4, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_i`
--

CREATE TABLE `c_i` (
  `id` int(11) NOT NULL,
  `punto` int(11) NOT NULL,
  `punto_CI` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `c_i`
--

INSERT INTO `c_i` (`id`, `punto`, `punto_CI`) VALUES
(1, 67, '80'),
(2, 68, '80'),
(3, 70, '81'),
(4, 71, '81'),
(5, 72, '82'),
(6, 73, '82'),
(7, 74, '82'),
(8, 75, '83'),
(9, 76, '83'),
(10, 77, '84'),
(11, 78, '84'),
(12, 79, '84'),
(13, 80, '84'),
(14, 81, '85'),
(15, 82, '85'),
(16, 83, '86'),
(17, 84, '86'),
(18, 85, '86'),
(19, 86, '87'),
(20, 87, '88'),
(21, 88, '88'),
(22, 89, '88'),
(23, 90, '88'),
(24, 91, '89'),
(25, 92, '89'),
(26, 93, '89'),
(27, 93, '89'),
(28, 94, '90'),
(29, 95, '90'),
(30, 96, '90'),
(31, 97, '91'),
(32, 98, '91'),
(33, 99, '91'),
(34, 100, '92'),
(35, 101, '92'),
(36, 102, '92'),
(37, 103, '93'),
(38, 104, '93'),
(39, 105, '94'),
(40, 106, '94'),
(41, 107, '95'),
(42, 108, '95'),
(43, 109, '95'),
(44, 110, '96'),
(45, 111, '96'),
(46, 112, '96'),
(47, 113, '96'),
(48, 114, '97'),
(49, 115, '97'),
(50, 116, '97'),
(51, 117, '98'),
(52, 118, '98'),
(53, 119, '98'),
(54, 120, '99'),
(55, 121, '99'),
(56, 122, '99'),
(57, 123, '99'),
(58, 124, '100'),
(59, 125, '100'),
(60, 126, '101'),
(61, 127, '101'),
(62, 128, '101'),
(63, 129, '101'),
(64, 130, '102'),
(65, 131, '102'),
(66, 132, '102'),
(67, 133, '102'),
(68, 134, '103'),
(69, 135, '103'),
(70, 136, '103'),
(71, 137, '103'),
(72, 138, '104'),
(73, 139, '104'),
(74, 140, '104'),
(75, 141, '104'),
(76, 142, '105'),
(77, 143, '105'),
(78, 144, '105'),
(79, 145, '105'),
(80, 146, '106'),
(81, 147, '107'),
(82, 148, '107'),
(83, 149, '107'),
(84, 150, '107'),
(85, 151, '107'),
(86, 152, '107'),
(87, 153, '107'),
(88, 154, '108'),
(89, 154, '108'),
(90, 155, '108'),
(91, 156, '108'),
(92, 157, '108'),
(93, 158, '109'),
(94, 159, '109'),
(95, 160, '110'),
(96, 161, '110'),
(97, 162, '110'),
(98, 163, '111'),
(99, 164, '111'),
(100, 165, '111'),
(101, 166, '111'),
(102, 167, '112'),
(103, 168, '113'),
(104, 169, '113'),
(105, 170, '113'),
(106, 171, '114'),
(107, 172, '114'),
(108, 173, '114'),
(109, 174, '115'),
(110, 175, '115'),
(111, 176, '116'),
(112, 177, '116'),
(113, 178, '117'),
(114, 179, '117'),
(115, 178, '117'),
(116, 179, '117'),
(117, 180, '117'),
(118, 181, '118'),
(119, 182, '118'),
(120, 183, '118'),
(121, 184, '119'),
(122, 185, '119'),
(123, 186, '120');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(350) NOT NULL,
  `segmento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `segmento_id`) VALUES
(5, 'La gasolina se extrae de:', 1),
(6, 'Una tonelada tiene: ', 1),
(7, 'La mayoría de nuestras exportaciones salen por: ', 1),
(8, 'El nervio óptico sirve para:', 1),
(9, 'El café es una especie de:', 1),
(10, 'El jamón es carne de: ', 1),
(11, 'La laringe está en:', 1),
(14, 'La guillotina causa:', 1),
(15, 'La grúa se usa para:', 1),
(16, 'Una figura de seis lados se llama:', 1),
(17, 'El kilowatt mide:', 1),
(18, 'La pauta se usa en:', 1),
(19, 'Las esmeraldas son:', 1),
(20, 'El metro es aproximadamente igual a:', 1),
(21, 'Las esponjas se obtienen de:', 1),
(22, 'Fraude es un termino usado en:', 1),
(23, 'Si la tierra estuviera más cerca del sol:', 2),
(34, 'Los rayos de una rueda están frecuentemente hechos de nogal ¿Por qué?', 2),
(35, 'Un tren se detiene con más dificultad que un automóvil ¿Por qué?', 2),
(36, 'El dicho: \"A golpecitos se derriba un roble\" quiere decir:', 2),
(37, 'El dicho: \"Una olla vigilada nunca hierve\" quiere decir:', 2),
(38, 'El dicho: \"Siembre pasto mientras haya sol\" quiere decir:', 2),
(39, 'El dicho: \"Zapatero a tus zapatos\" quiere decir:', 2),
(40, 'El dicho: \"La cuña para que apriete tiene que ser del mismo palo\" quiere decir:', 2),
(41, 'Un acorazado de acero flota porque:', 2),
(42, 'Las plumas de las alas ayudan al pájaro a volar porque:', 2),
(43, 'El dicho \"Una golondrina no hace verano\" quiere decir:', 2),
(44, 'Salado - Dulce', 3),
(45, 'Alegrarse - Regocijarse', 3),
(46, 'Mayor - Menor', 3),
(47, 'Sentarse - Pararse', 3),
(48, 'Desperdiciar - Aprovechar', 3),
(49, 'Conceder - Negar', 3),
(50, 'Tónico - Estimulante', 3),
(51, 'Rebajar - Denigrar', 3),
(52, 'Prohibir - Permitir', 3),
(53, 'Osado - Audaz', 3),
(54, 'Arrebatido - Pruedente', 3),
(55, 'Obtuso - Agudo', 3),
(56, 'Inepto - Experto', 3),
(57, 'Esquivar - Rehuir', 3),
(58, 'Rebelarse - Someterse', 3),
(59, 'Monotonía - Variedad', 3),
(60, 'Confrontar - Consolar', 3),
(61, 'Expeler - Retener', 3),
(62, 'Dócil - Sumiso', 3),
(63, 'Transitorio - Permanente', 3),
(64, 'Seguridad - Riesgo', 3),
(65, 'Aprobar - Objetar', 3),
(66, 'Expeler - Arrojar', 3),
(67, 'Engaño - Impostura', 3),
(68, 'Mitigar - Apaciguar', 3),
(69, 'Incitar - Aplacar', 3),
(70, 'Reverencia - Veneración', 3),
(71, 'Sobriedad - Frugalidad', 3),
(72, 'Aumentar - Menguar', 3),
(73, 'Iniciar - Instigar', 3),
(74, 'Un circulo tiene siempre: ', 4),
(75, 'Un pájaro tiene siempre:', 4),
(76, 'La música tiene siempre:', 4),
(77, 'Un banquete tiene siempre:', 4),
(78, 'Un caballo tiene siempre:', 4),
(79, 'Un juego tiene siempre:', 4),
(80, 'Un objeto tiene siempre:', 4),
(81, 'Una conversación tiene siempre:', 4),
(82, 'Una deuda implica siempre:', 4),
(83, 'Un ciudadano tiene siempre:', 4),
(84, 'Un museo tiene siempre:', 4),
(85, 'Un compromiso implica siempre:', 4),
(86, 'Un bosque tiene siempre:', 4),
(87, 'Los obstáculos tienen siempre:', 4),
(88, 'El aborrecimiento tiene siempre:', 4),
(89, 'Una revista tiene siempre:', 4),
(90, 'La controversia implica siempre:', 4),
(91, 'Un barco tiene siempre:', 4),
(104, 'A 2 por 5 pesos. ¿Cuántos lápices pueden comprarse con 50 pesos?', 5),
(105, '¿Cuántas horas tardará un automóvil en recorrer 660 kilómetros a la velocidad de 60 kilómetros por hora?', 5),
(106, 'Si un hombre gana $200 diarios y gasta $140. ¿Cuántos días tardará en ahorrar $3,000?', 5),
(107, 'Si dos pasteles cuestan $60, ¿Cuántos pesos cuesta la sexta parte de un pastel?', 5),
(108, '¿Cuántas veces más es 2x3x4x6, que 3x4?', 5),
(109, '¿Cuánto es el 16% de $120?', 5),
(110, 'El cuatro por ciento de $1,000 es igual al ocho por ciento ¿De qué cantidad?', 5),
(111, 'La capacidad de un refrigerador rectangular es de 48 metros cúbicos, si tiene seis metros de largo por cuatro de ancho ¿Cuál es la altura?', 5),
(112, 'SI 7 hombres hacen un pozo de 40 metros en 2 días, ¿Cuántos hombres se necesitan para hacerlo en medio día?', 5),
(113, 'A tiene $180; B tiene 2/3 de lo que tiene A, y C 1/2 de lo que tiene B, ¿Cuánto tienen todos juntos?', 5),
(114, 'Si un hombre corre 10 metros en 10 segundos, ¿Cuántos metros correrá como promedio 1/5 de segundo?', 5),
(115, 'Un hombre gasta 1/4 de su sueldo en casa y alimentos, y 4/8 en otros gastos, ¿Qué tanto por ciento de su sueldo ahorra?', 5),
(116, '¿La higiene es esencial para la salud?', 6),
(117, '¿Los taquígrafos usan el microscopio?', 6),
(118, '¿Los tiranos son justos con sus inferiores?', 6),
(119, '¿Las personas desamparadas están sujetas con frecuencia a caridad?', 6),
(120, '¿Las personas venerables son por lo común respetadas?', 6),
(121, '¿Es el escorbuto un medicamento?', 6),
(122, '¿Es la amonestación una clase de instrumento musical?', 6),
(123, '¿Son los colores opacos preferidos para las banderas nacionales?', 6),
(124, '¿Las cosas misteriosas son a veces pavorosas?', 6),
(125, '¿Personas conscientes cometen alguna vez errores?', 6),
(126, '¿Son carnívoros los carneros?', 6),
(127, '¿Se dan asignaturas a los caballos?', 6),
(128, '¿Las cartas anónimas llevan alguna vez firma de quien las escribe?', 6),
(129, '¿Son discontinuos los sonidos intermitentes?', 6),
(130, '¿Las enfermedades estimulan el buen juicio?', 6),
(131, '¿Son siempre perversos los hechos premeditados?', 6),
(132, '¿El contacto social tiende a reducir la timidez?', 6),
(133, '¿Son enfermas las personas que tienen  mal caracter?', 6),
(134, '¿Se caracteriza generalmente el rencor por la persistencia?', 6),
(135, '¿Meticuloso quiere decir lo mismo que cuidadoso?', 6),
(136, 'Abrigo es a usar como pan es a:', 7),
(137, 'Semana es a mes como mes es a:', 7),
(138, 'León es a animal como rosa es a:', 7),
(139, 'Libertad es a independencia como cautiverio es a:', 7),
(140, 'Decir es a dijo como estar es a:', 7),
(141, 'Lunes es a martes como viernes es a:', 7),
(142, 'Plomo es a pesado como corcho es a:', 7),
(143, 'Éxito es a alegría como fracaso es a:', 7),
(144, 'Gato es a tigre como perro es a:', 7),
(145, '4 es a 16 como 5 es a:', 7),
(146, 'Llorar es a reír como triste es a:', 7),
(147, 'Veneno es a muerte como aliento es a:', 7),
(148, '1 es a 3 como 9 es a:', 7),
(149, 'Alimento es a hambre como agua es a:', 7),
(150, 'Aquí es a allí como este es a:', 7),
(151, 'Tigre es a pelo como trucha es a:', 7),
(152, 'Pervertido es a depravado como incorrupto es a:', 7),
(153, 'B es a D como segundo es a:', 7),
(154, 'Estado es a gobernador como ejército es a:', 7),
(155, 'Sujeto es a predicado como nombre es a:', 7),
(156, 'con crecen los niños edad la', 8),
(157, 'buena mar beber el para agua de es', 8),
(158, 'lo es paz la guerra opuesto de la a', 8),
(159, 'caballos automóvil un que caminan los despacio más ', 8),
(160, 'consejo a veces es buen seguir un difícil', 8),
(161, 'cuatrocientas todos páginas contienen libros los', 8),
(162, 'crecen las que fresas el más roble', 8),
(163, 'verdadera comparada no puede amistad ser', 8),
(164, 'envidia las perjudiciales gula  son y la', 8),
(165, 'nunca acciones premiadas las deben buenas ser', 8),
(166, 'exteriores engañan nunca apariencias las nos', 8),
(167, 'nunca es hombre las que acciones demuestran un lo', 8),
(168, 'ciertas siempre muerte de causa clase enfermedades', 8),
(169, 'odio indeseables aversión sentimientos el son y la', 8),
(170, 'frecuentemente por juzgar podemos acciones hombres nosotros sus a los', 8),
(171, 'una es sábana sarapes tan nunca los calientes como', 8),
(172, 'nunca que descuidados los tropiezan son', 8),
(173, '1', 9),
(174, '2', 9),
(175, '3', 9),
(176, '4', 9),
(177, '5', 9),
(178, '6', 9),
(179, '7', 9),
(180, '8', 9),
(181, '9', 9),
(182, '10', 9),
(183, '11', 9),
(184, '12', 9),
(185, '13', 9),
(186, '14', 9),
(187, '15', 9),
(188, '16', 9),
(189, '17', 9),
(190, '18', 9),
(191, 'Primero  8  7  6  5  4  3', 10),
(192, 'Segundo  3  8  13  18  23  28', 10),
(193, 'Tercero  1  2  4  8  16  32', 10),
(194, 'Cuarto  8  8  6  6  4  4', 10),
(195, 'Quinto  11 1/4   12   12 1/4   12 1/2   12 3/4', 10),
(196, 'Sexto  8  9  12  13  16  17', 10),
(197, 'Séptimo  16  8  4  2  1  1/2', 10),
(198, 'Octavo  31.3  40.3  49.3  58.3  67.3  76.3', 10),
(199, 'Noveno  3  5  4  6  5  7', 10),
(200, 'Décimo  7  11  15  16  20  24  25  29', 10),
(201, 'Undécimo   1/25   1/5   1   5', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango`
--

CREATE TABLE `rango` (
  `id_rango` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `segmento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rango`
--

INSERT INTO `rango` (`id_rango`, `nombre`, `min`, `max`, `segmento_id`) VALUES
(1, 'Excelente', 16, 16, 1),
(2, 'Superior', 15, 15, 1),
(3, 'Superior Término Medio', 14, 14, 1),
(4, 'Término Medio', 12, 13, 1),
(5, 'Inferior Término Medio', 10, 11, 1),
(6, 'Inferior', -16, 9, 1),
(7, 'Deficiente', 0, 7, 1),
(8, 'Excelente', 22, 22, 2),
(9, 'Superior', 20, 20, 2),
(10, 'Superior Término Medio', 18, 18, 2),
(11, 'Término Medio', 12, 16, 2),
(12, 'Inferior Término Medio', 10, 11, 2),
(13, 'Inferior', 8, 8, 2),
(14, 'Deficiente', -22, 6, 2),
(15, 'Excelente', 29, 30, 3),
(16, 'Superior', 27, 28, 3),
(17, 'Superior Término Medio', 23, 26, 3),
(18, 'Término Medio', 14, 22, 3),
(19, 'Inferior Término Medio', 12, 13, 3),
(20, 'Inferior', 8, 11, 3),
(21, 'Deficiente', -30, 7, 3),
(22, 'Excelente', 18, 18, 4),
(23, 'Superior', 16, 17, 4),
(24, 'Superior Término Medio', 14, 15, 4),
(25, 'Término Medio', 10, 13, 4),
(26, 'Inferior Término Medio', 7, 9, 4),
(27, 'Inferior', 6, 6, 4),
(28, 'Deficiente', -18, 5, 4),
(29, 'Excelente', 24, 24, 5),
(30, 'Superior', 22, 22, 5),
(31, 'Superior Término Medio', 18, 20, 5),
(32, 'Término Medio', 10, 16, 5),
(33, 'Inferior Término Medio', 8, 8, 5),
(34, 'Inferior', 6, 6, 5),
(35, 'Deficiente', -24, 4, 5),
(36, 'Excelente', 20, 20, 6),
(37, 'Superior', 18, 19, 6),
(38, 'Superior Término Medio', 16, 17, 6),
(39, 'Término Medio', 9, 15, 6),
(40, 'Inferior Término Medio', 6, 8, 6),
(41, 'Inferior', 5, 5, 6),
(42, 'Deficiente', -20, 4, 6),
(43, 'Excelente', 19, 20, 7),
(44, 'Superior', 18, 18, 7),
(45, 'Superior Término Medio', 16, 17, 7),
(46, 'Término Medio', 9, 15, 7),
(47, 'Inferior Término Medio', 6, 8, 7),
(48, 'Inferior', 5, 5, 7),
(49, 'Deficiente', -20, 4, 7),
(50, 'Excelente', 17, 17, 8),
(51, 'Superior', 15, 16, 8),
(53, 'Superior Término Medio', 13, 14, 8),
(54, 'Término Medio', 8, 12, 8),
(55, 'Inferior Término Medio', 7, 7, 8),
(56, 'Inferior', 6, 6, 8),
(57, 'Deficiente', -17, 5, 8),
(58, 'Excelente', 18, 18, 9),
(59, 'Superior', 16, 17, 9),
(60, 'Superior Término Medio', 15, 15, 9),
(61, 'Término Medio', 9, 14, 9),
(62, 'Inferior Término Medio', 8, 8, 9),
(63, 'Inferior', 6, 7, 9),
(64, 'Deficiente', -18, 5, 9),
(65, 'Excelente', 20, 22, 10),
(66, 'Superior', 18, 18, 10),
(67, 'Superior Término Medio', 16, 16, 10),
(68, 'Término Medio', 10, 14, 10),
(69, 'Inferior Término Medio', 8, 8, 10),
(70, 'Inferior', 6, 6, 10),
(71, 'Deficiente', -22, 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango_ci`
--

CREATE TABLE `rango_ci` (
  `id` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `rango` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rango_ci`
--

INSERT INTO `rango_ci` (`id`, `max`, `min`, `rango`) VALUES
(1, 300, 120, 'Inteligencia Sobresalient'),
(2, 120, 111, 'Inteligencia Superior'),
(3, 110, 90, 'Inteligencia  Normal'),
(4, 89, 80, 'Inteligencia Limítrofe'),
(5, 79, 70, 'Debilidad Mental Superfic'),
(6, 69, 50, 'Debilidad Mental Mediana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `puntos` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `valor`, `puntos`, `id_pregunta`) VALUES
(1, 'Granos', -1, 5),
(2, 'Pretróleo', 1, 5),
(3, 'Trementina', -1, 5),
(4, 'Semillas', -1, 5),
(5, '1,000 kg.', 1, 6),
(6, '2,000 kg.', -1, 6),
(7, '3,000 kg.', -1, 6),
(8, '4, 000 kg.', -1, 6),
(9, 'Mazatlán', -1, 7),
(10, 'Acapulco', -1, 7),
(11, 'Progreso', -1, 7),
(12, 'Veracruz', 1, 7),
(13, 'Ver', 1, 8),
(14, 'Oir', -1, 8),
(15, 'Probar', -1, 8),
(16, 'Sentir', -1, 8),
(17, 'Corteza', -1, 9),
(18, 'Fruto', 1, 9),
(19, 'Hojas', -1, 9),
(20, 'Raíz', -1, 9),
(21, 'Carnero', -1, 10),
(22, 'Vaca', -1, 10),
(23, 'Gallina', -1, 10),
(24, 'Cerdo', 1, 10),
(25, 'Abdomen', -1, 11),
(26, 'Cabeza', -1, 11),
(27, 'Garganta', 1, 11),
(28, 'Espalda', -1, 11),
(29, 'Muerte', 1, 14),
(30, 'Enfermedad', -1, 14),
(31, 'Fiebre', -1, 14),
(32, 'Malestar', -1, 14),
(33, 'Perforar', -1, 15),
(34, 'Cortar', -1, 15),
(35, 'Levantar', 1, 15),
(36, 'Exprimir', -1, 15),
(41, 'Pentágono ', -1, 16),
(42, 'Paralelogramo', -1, 16),
(43, 'Hexágono', 1, 16),
(44, 'Trapecio', -1, 16),
(45, 'Lluvia', -1, 17),
(46, 'Viento', -1, 17),
(47, 'Electricidad', 1, 17),
(48, 'Presión', 1, 17),
(49, 'Agricultura', -1, 18),
(50, 'Música', 1, 18),
(51, 'Fotografía', -1, 18),
(52, 'Estenografía', -1, 18),
(53, 'Azules', -1, 19),
(54, 'Verdes', 1, 19),
(55, 'Rojas', -1, 19),
(56, 'Amarillas', -1, 19),
(57, 'Pie', -1, 20),
(58, 'Pulgada', 1, 20),
(59, 'Yarda', -1, 20),
(60, 'Milla', -1, 20),
(61, 'Animales', 1, 21),
(62, 'Yerbas', -1, 21),
(63, 'Bosques', -1, 21),
(64, 'Minas', -1, 21),
(65, 'Medicina', -1, 22),
(66, 'Teología', -1, 22),
(67, 'Leyes', 1, 22),
(68, 'Pedagogía', -1, 22),
(69, 'Las estrellas desaparecerían', -1, 23),
(70, 'Los meses serían más largos', -1, 23),
(71, 'La tierra estaría más caliente', 1, 23),
(120, 'El nogal es fuerte', 1, 34),
(121, 'Se corta fácilmente', -1, 34),
(122, 'Sus frenos son buenos', -1, 34),
(123, 'Tiene más ruedas', -1, 35),
(124, 'Es más pesado', 1, 35),
(125, 'Sus frenos no son buenos', -1, 35),
(126, 'Que los robles son débiles', -1, 36),
(127, 'Que son mejores los golpes pequeños', -1, 36),
(128, 'Que el esfuerzo constante logra resultados sorprendentes', 1, 36),
(129, 'Que no debemos vigilarla cuando está en el fuego', -1, 37),
(130, 'Que tarda en hervir', -1, 37),
(131, 'Que el tiempo se alarga cuando esperamos algo', 1, 37),
(132, 'Que el pasto se siembra en el verano', -1, 38),
(133, 'Que debemos aprovechar nuesras oportunidades', 1, 38),
(134, 'Que el pasto no debe cortarse en la noche', -1, 38),
(135, 'Que un zapatero no debe abandonar sus zapatos', -1, 39),
(136, 'Que los zapateros no deben estar de ociosos', -1, 39),
(137, 'Que debemos trabajar en lo que podemos hacer mejor', 1, 39),
(138, 'Que el palo sirve para apretar', -1, 40),
(139, 'Que las cuñas siempre son de madera', -1, 40),
(140, 'Nos exigen más las personas que nos conocen', 1, 40),
(141, 'La máquina lo hace flotar', -1, 41),
(142, 'Porque tiene grandes espacios huecos', 1, 41),
(143, 'Contiene algo de madera', -1, 41),
(144, 'Las alas ofrecen una amplia superficie ligera', 1, 42),
(145, 'Mantienen el aire fuera del cuerpo', -1, 42),
(146, 'Disminuye su peso', -1, 42),
(147, 'Que las golondrinas regresan', -1, 43),
(148, 'Que un simple dato no es suficiente', 1, 43),
(149, 'Que los pájaros se agregan a nuestros placeres de ', -1, 43),
(150, 'Igual', -1, 44),
(151, 'Opuesto', 1, 44),
(152, 'Igual', 1, 45),
(153, 'Opuesto', -1, 45),
(154, 'Igual', -1, 46),
(155, 'Opuesto', 1, 46),
(156, 'Igual', -1, 47),
(157, 'Opuesto', 1, 47),
(158, 'Igual', -1, 48),
(159, 'Opuesto', 1, 48),
(160, 'Igual', -1, 49),
(161, 'Opuesto', 1, 49),
(162, 'Igual', 1, 50),
(163, 'Opuesto', -1, 50),
(164, 'Igual', 1, 51),
(165, 'Opuesto', -1, 51),
(166, 'Igual', -1, 52),
(167, 'Opuesto', 1, 52),
(168, 'Igual', 1, 53),
(169, 'Opuesto', -1, 53),
(170, 'Igual', -1, 54),
(171, 'Opuesto', 1, 54),
(172, 'Igual', -1, 55),
(173, 'Opuesto', 1, 55),
(174, 'Igual', -1, 56),
(175, 'Opuesto', 1, 56),
(176, 'Igual', 1, 57),
(177, 'Opuesto', -1, 57),
(178, 'Igual', -1, 58),
(179, 'Opuesto', 1, 58),
(180, 'Igual', -1, 59),
(181, 'Opuesto', 1, 59),
(182, 'Igual', 1, 60),
(183, 'Opuesto', -1, 60),
(184, 'Igual', -1, 61),
(185, 'Opuesto', 1, 61),
(186, 'Igual', 1, 62),
(187, 'Opuesto', -1, 62),
(188, 'Igual', -1, 63),
(189, 'Opuesto', 1, 63),
(190, 'Igual', -1, 64),
(191, 'Opuesto', 1, 64),
(192, 'Igual', -1, 65),
(193, 'Opuesto', 1, 65),
(194, 'Igual', 1, 66),
(195, 'Opuesto', -1, 66),
(196, 'Igual', 1, 67),
(197, 'Opuesto', -1, 67),
(198, 'Igual', -1, 68),
(199, 'Opuesto', 1, 68),
(200, 'Igual', -1, 69),
(201, 'Opuesto', 1, 69),
(202, 'Igual', 1, 70),
(203, 'Opuesto', -1, 70),
(204, 'Igual', 1, 71),
(205, 'Opuesto', -1, 71),
(206, 'Igual', -1, 72),
(207, 'Opuesto', 1, 72),
(208, 'Igual', 1, 73),
(209, 'Opuesto', -1, 73),
(494, 'Altura', -1, 74),
(495, 'Circunferencia', 1, 74),
(496, 'Latitud', -1, 74),
(497, 'Longitud', -1, 74),
(498, 'Radio', 1, 74),
(499, 'Huesos', 1, 75),
(500, 'Huevos', -1, 75),
(501, 'Pico', 1, 75),
(502, 'Nido', -1, 75),
(503, 'Canto', -1, 75),
(504, 'Oyente', -1, 76),
(505, 'Piano', -1, 76),
(506, 'Ritmo', 1, 76),
(507, 'Sonido', 1, 76),
(508, 'Violín', -1, 76),
(509, 'Alimentos', 1, 77),
(510, ' Músicos', -1, 77),
(511, 'Personas', 1, 77),
(512, 'Discurso', -1, 77),
(513, 'Anfitrión', -1, 77),
(514, 'Arnés', -1, 78),
(515, 'Cascos', 1, 78),
(516, 'Herraduras', -1, 78),
(517, 'Establo', -1, 78),
(518, 'Cola', 1, 78),
(519, 'Cartas', -1, 79),
(520, 'Multas', -1, 79),
(521, 'Jugadores', 1, 79),
(522, 'Castigos', -1, 79),
(523, 'Reglas', 1, 79),
(524, 'Calor', -1, 80),
(525, 'Tamaño', 1, 80),
(526, 'Sabor', -1, 80),
(527, 'Valor', -1, 80),
(528, 'Peso', 1, 80),
(529, 'Acuerdos', -1, 81),
(530, 'Personas', 1, 81),
(531, 'Preguntas', -1, 81),
(532, 'Ingenio', -1, 81),
(533, 'Palabras', 1, 81),
(534, 'Acreedor', 1, 82),
(535, 'Deudor', 1, 82),
(536, 'Interés', -1, 82),
(537, 'Hipoteca', -1, 82),
(538, 'Pago', -1, 82),
(539, 'País', 1, 83),
(540, 'Ocupación', -1, 83),
(541, 'Derecho', 1, 83),
(542, 'Propiedad', -1, 83),
(543, 'Voto', -1, 83),
(544, 'Animales', -1, 84),
(545, 'Orden', 1, 84),
(546, 'Colecciones', 1, 84),
(547, 'Minerales', -1, 84),
(548, 'Visitantes', -1, 84),
(549, 'Obligación', 1, 85),
(550, 'Acuerdo', 1, 85),
(551, 'Amistad', -1, 85),
(552, 'Respeto', -1, 85),
(553, 'Satisfacción', -1, 85),
(554, 'Animales', -1, 86),
(555, 'Flores', -1, 86),
(556, 'Sombras', 1, 86),
(557, 'Maleza', -1, 86),
(558, 'Árboles', 1, 86),
(559, 'Dificultad', 1, 87),
(560, 'Desaliento', -1, 87),
(561, 'Fracaso', -1, 87),
(562, 'Impedimento', -1, 87),
(563, 'Estímulo', 1, 87),
(631, 'Desaliento', -1, 87),
(636, 'Desagrado', 1, 88),
(637, 'Temor', -1, 88),
(638, 'Ira', -1, 88),
(639, 'Timidez', -1, 88),
(640, 'Anuncios', -1, 89),
(641, 'Papel', 1, 89),
(642, 'Fotografías', -1, 89),
(643, 'Grabados', -1, 89),
(644, 'Impresión', 1, 89),
(645, 'Argumentos', 1, 90),
(646, 'Desacuerdo', 1, 90),
(647, 'Aversión', -1, 90),
(648, 'Público', -1, 90),
(649, 'Resumen', -1, 90),
(650, 'Maquinaria', -1, 91),
(651, 'Cañones', -1, 91),
(652, 'Quilla', 1, 91),
(653, 'Timón', 1, 91),
(654, 'Velas', -1, 91),
(655, '20', 1, 104),
(656, '11', 1, 105),
(657, '50', 1, 106),
(658, '5', 1, 107),
(659, '12', 1, 108),
(660, '19.2', 1, 109),
(661, '500', 1, 110),
(662, '2', 1, 111),
(663, '28', 1, 112),
(664, '360', 1, 113),
(665, '2', 1, 114),
(666, '25', 1, 115),
(667, 'Si', 1, 116),
(668, 'No', -1, 116),
(669, 'Si', -1, 117),
(670, 'No', 1, 117),
(671, 'Si', -1, 118),
(672, 'No', 1, 118),
(673, 'Si', 1, 119),
(674, 'No', -1, 119),
(675, 'Si', 1, 120),
(676, 'No', -1, 120),
(677, 'Si', -1, 121),
(678, 'No', 1, 121),
(679, 'Si', -1, 122),
(680, 'No', 1, 122),
(681, 'Si', -1, 123),
(682, 'No', 1, 123),
(683, 'Si', 1, 124),
(684, 'No', -1, 124),
(685, 'Si', 1, 125),
(686, 'No', -1, 125),
(687, 'Si', -1, 126),
(688, 'No', 1, 126),
(689, 'Si', -1, 127),
(690, 'No', 1, 127),
(691, 'Si', -1, 128),
(692, 'No', 1, 128),
(693, 'Si', 1, 129),
(694, 'No', -1, 129),
(695, 'Si', -1, 130),
(696, 'No', 1, 130),
(697, 'Si', -1, 131),
(698, 'No', 1, 131),
(699, 'Si', 1, 132),
(700, 'No', -1, 132),
(701, 'Si', -1, 133),
(702, 'No', 1, 133),
(703, 'Si', 1, 134),
(704, 'No', -1, 134),
(705, 'Si', 1, 135),
(706, 'No', -1, 135),
(707, 'Comer', 1, 136),
(708, 'Hambre', -1, 136),
(709, 'Agua', -1, 136),
(710, 'Cocinar', -1, 136),
(711, 'Año', 1, 137),
(712, 'Hora', -1, 137),
(713, 'Minuto', -1, 137),
(714, 'Siglo', -1, 137),
(715, 'Olor', -1, 138),
(716, 'Hoja', -1, 138),
(717, 'Planta', 1, 138),
(718, 'Espina', -1, 138),
(719, 'Negro', -1, 139),
(720, 'Esclavitud', 1, 139),
(721, 'Libre', -1, 139),
(722, 'Sufrir', -1, 139),
(723, 'Cantar', -1, 140),
(724, 'Estuvo', 1, 140),
(725, 'Hablando', -1, 140),
(726, 'Canto', -1, 140),
(727, 'Semana', -1, 141),
(728, 'Jueves', -1, 141),
(729, 'Día', 1, 141),
(730, 'Sábado', -1, 141),
(731, 'Botella', -1, 142),
(732, 'Peso', -1, 142),
(733, 'Ligero', -1, 142),
(734, 'Flotar', 1, 142),
(735, 'Tristeza', 1, 143),
(736, 'Suerte', -1, 143),
(737, 'Fracasar', -1, 143),
(738, 'Trabajo', -1, 143),
(739, 'Lobo', 1, 144),
(740, 'Ladrido', -1, 144),
(741, 'Mordida', -1, 144),
(742, 'Agarrar', -1, 144),
(743, '7', -1, 145),
(744, '45', -1, 145),
(745, '35', -1, 145),
(746, '25', 1, 145),
(747, 'Muerte', -1, 146),
(748, 'Alegre', 1, 146),
(749, 'Mortaja', -1, 146),
(750, 'Doctor', -1, 146),
(751, 'Comer', -1, 147),
(752, 'Pájaro', -1, 147),
(753, 'Vida', 1, 147),
(754, 'Malo', -1, 147),
(755, '18', -1, 148),
(756, '27', -1, 148),
(757, '36', -1, 148),
(758, '45', 1, 148),
(759, 'Beber', -1, 149),
(760, 'Claro', -1, 149),
(761, 'Sed', 1, 149),
(762, 'Puro', -1, 149),
(763, 'Estos', -1, 150),
(764, 'Aquel', -1, 150),
(765, 'Ese', 1, 150),
(766, 'Entonces', -1, 150),
(767, 'Agua', -1, 151),
(768, 'Pez', -1, 151),
(769, 'Escama', 1, 151),
(770, 'Nadar', -1, 151),
(771, 'Patría', -1, 152),
(772, 'Honrado', 1, 152),
(773, 'Canción', -1, 152),
(774, 'Estudio', -1, 152),
(775, 'Tercero', -1, 153),
(776, 'Último', -1, 153),
(777, 'Cuarto', 1, 153),
(778, 'Posterior', -1, 153),
(779, 'Marina', -1, 154),
(780, 'Soldado', -1, 154),
(781, 'General', 1, 154),
(782, 'Sargento', -1, 154),
(783, 'Pronombre', -1, 155),
(784, 'Adverbio', -1, 155),
(785, 'Verbo', -1, 155),
(786, 'Adjetivo', 1, 155),
(787, 'Verdadero', 1, 156),
(788, 'Falso', -1, 156),
(789, 'Verdadero', -1, 157),
(790, 'Falso', 1, 157),
(791, 'Verdadero', 1, 158),
(792, 'Falso', -1, 158),
(793, 'Verdadero', 1, 159),
(794, 'Falso', -1, 159),
(795, 'Verdadero', 1, 160),
(796, 'Falso', -1, 160),
(797, 'Verdadero', -1, 161),
(798, 'Falso', 1, 161),
(799, 'Verdadero', -1, 162),
(800, 'Falso', 1, 162),
(801, 'Verdadero', 1, 163),
(802, 'Falso', -1, 163),
(803, 'Verdadero', 1, 164),
(804, 'Falso', -1, 164),
(805, 'Verdadero', -1, 165),
(806, 'Falso', 1, 165),
(807, 'Verdadero', -1, 166),
(808, 'Falso', 1, 166),
(809, 'Verdadero', -1, 167),
(810, 'Falso', 1, 167),
(811, 'Verdadero', 1, 168),
(812, 'Falso', -1, 168),
(813, 'Verdadero', 1, 169),
(814, 'Falso', -1, 169),
(815, 'Verdadero', 1, 170),
(816, 'Falso', -1, 170),
(817, 'Verdadero', 1, 171),
(818, 'Falso', -1, 171),
(819, 'Verdadero', -1, 172),
(820, 'Falso', 1, 172),
(821, 'Saltar', -1, 173),
(822, 'Correr', -1, 173),
(823, 'Brincar', -1, 173),
(824, 'Pararse', 1, 173),
(825, 'Caminar', -1, 173),
(826, 'Monarquía', -1, 174),
(827, 'Comunista', -1, 174),
(828, 'Demócrata', -1, 174),
(829, 'Anarquía', -1, 174),
(830, 'Católico', 1, 174),
(831, 'Muerte', -1, 175),
(832, 'Duelo', -1, 175),
(833, 'Paseo', 1, 175),
(834, 'Pobreza', -1, 175),
(835, 'Tristeza', -1, 175),
(836, 'Carpintero', 1, 176),
(837, 'Doctor', -1, 176),
(838, 'Abogado', -1, 176),
(839, 'Ingeniero', -1, 176),
(840, 'Profesor', -1, 176),
(841, 'Cama', -1, 177),
(842, 'Silla', -1, 177),
(843, 'Plato', 1, 177),
(844, 'Sofá', -1, 177),
(845, 'Mesa', -1, 177),
(846, 'Francisco', -1, 178),
(847, 'Santiago', -1, 178),
(848, 'Juan', -1, 178),
(849, 'Sara', 1, 178),
(850, 'Mesa', -1, 178),
(851, 'Duro', -1, 179),
(852, 'Juan', -1, 179),
(853, 'Liso', -1, 179),
(854, 'Suave', -1, 179),
(855, 'Dulce', 1, 179),
(856, 'Digestión', 1, 180),
(857, 'Oído', -1, 180),
(858, 'Vista', -1, 180),
(859, 'Olfato', -1, 180),
(860, 'Tacto', -1, 180),
(861, 'Automóvil', -1, 181),
(862, 'Bicicleta', -1, 181),
(863, 'Guayin', -1, 181),
(864, 'Telégrafo', 1, 181),
(865, 'Tren', -1, 181),
(866, 'Abajo', -1, 182),
(867, 'Acá', -1, 182),
(868, 'Reciente', 1, 182),
(869, 'Arriba', -1, 182),
(870, 'Allá', -1, 182),
(871, 'Hidalgo', -1, 183),
(872, 'Morelos', -1, 183),
(873, 'Bravo', -1, 183),
(874, 'Matamoros', -1, 183),
(875, 'Bolivar', 1, 183),
(876, 'Danés', -1, 184),
(877, 'Galgo', -1, 184),
(878, 'Lino', -1, 184),
(879, 'Buldog', -1, 184),
(880, 'Pequines', 1, 184),
(881, 'Leghorn', 1, 184),
(882, 'Tela', 1, 185),
(883, 'Algodón', -1, 185),
(884, 'Lino', -1, 185),
(885, 'Seda', -1, 185),
(886, 'Lana', -1, 185),
(887, 'Ira', -1, 186),
(888, 'Odio', -1, 186),
(889, 'Alegría', -1, 186),
(890, 'Piedad', -1, 186),
(891, 'Razonamiento', 1, 186),
(892, 'Edison', -1, 187),
(893, 'Franklin', -1, 187),
(894, 'Macorni', -1, 187),
(895, 'Fulton', -1, 187),
(896, 'Shakespeare', 1, 187),
(897, 'Mariposa', 1, 188),
(898, 'Halcón', -1, 188),
(899, 'Avestruz', -1, 188),
(900, 'Petirrojo', -1, 188),
(901, 'Golodrina', -1, 188),
(902, 'Dar', -1, 189),
(903, 'Prestar', -1, 189),
(904, 'Perder', -1, 189),
(905, 'Ahorrar', 1, 189),
(906, 'Derrochar', -1, 189),
(907, 'Australia', -1, 190),
(908, 'Cuba', -1, 190),
(909, 'Córcega', -1, 190),
(910, 'Irlanda', -1, 190),
(911, 'España', 1, 190),
(912, '2', 1, 191),
(913, '1', 1, 191),
(914, '33', 1, 192),
(915, '38', 1, 192),
(916, '64', 1, 193),
(917, '128', 1, 193),
(918, '2', 1, 194),
(919, '2', 1, 194),
(920, '13', 1, 195),
(921, '13 1/4', 1, 195),
(922, '20', 1, 196),
(923, '21', 1, 196),
(924, '1/4', 1, 197),
(925, '1/8', 1, 197),
(926, '85.3', 1, 198),
(927, '84.3', 1, 198),
(928, '6', 1, 199),
(929, '8', 1, 199),
(930, '33', 1, 200),
(931, '34', 1, 200),
(932, '25', 1, 201),
(933, '125', 1, 201);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_usuario`
--

CREATE TABLE `resp_usuario` (
  `id` int(11) NOT NULL,
  `respuesta` int(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_total_seg` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `ci_rango_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segmentos`
--

CREATE TABLE `segmentos` (
  `id` int(11) NOT NULL,
  `segmento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `segmentos`
--

INSERT INTO `segmentos` (`id`, `segmento`) VALUES
(1, 'SERIE I'),
(2, 'SERIE II'),
(3, 'SERIE III'),
(4, 'SERIE IV'),
(5, 'SERIE V'),
(6, 'SERIE VI'),
(7, 'SERIE VII'),
(8, 'SERIE VIII'),
(9, 'SERIE IX'),
(10, 'SERIE X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_segmento`
--

CREATE TABLE `total_segmento` (
  `id` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rango` int(11) NOT NULL,
  `id_segmento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` double NOT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `curriculum` varchar(255) DEFAULT NULL,
  `ine` varchar(255) DEFAULT NULL,
  `contrasena` varchar(500) NOT NULL,
  `vacante_id` int(11) DEFAULT NULL,
  `estatus` varchar(15) DEFAULT 'EN PROCESO',
  `test` tinyint(1) NOT NULL,
  `verificador` int(11) NOT NULL,
  `validado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `edad`, `sexo`, `estado`, `correo`, `telefono`, `curp`, `curriculum`, `ine`, `contrasena`, `vacante_id`, `estatus`, `test`, `verificador`, `validado`) VALUES
(23, 'XOCHITL ARAMIS', 'DELGADO MONROY', 23, 'M', 'MN', 'aramis_de.mo@hotmail.com', 4433709024, 'DEMX960401MMNLNC08', 'INEDEMX960401MMNLNC08', 'CVDEMX960401MMNLNC08', '4433709024', 1, 'EN PROCESO', 0, 0, 1),
(25, 'MONSERRAT', 'DELGADO SANCHEZ', 30, 'M', 'GR', 'mon@hotmail.com', 443131559, 'DESM890324MGRLNN04', 'INEDESM890324MGRLNN04', 'CVDESM890324MGRLNN04', '0443131559', 0, 'EN PROCESO', 0, 0, 0),
(26, 'MIGUEL ANGEL', 'DE BLAS SOLORIO', 22, 'H', 'MN', 'miguel@hotmail.com', 1234567890, 'BASM961120HMNLLG06', 'INEBASM961120HMNLLG06', 'CVBASM961120HMNLLG06', '1234567890\'', 2, 'EN PROCESO', 0, 0, 0),
(33, 'LUIS ANTONIO', 'RESCALA ALVAREZ', 27, 'H', 'MN', 'luis.rescala@gmail.com', 4431835407, 'REAL920328HMNSLS02', 'INEREAL920328HMNSLS02', 'CVREAL920328HMNSLS02', '4431835407', 1, 'EN PROCESO', 0, 213692, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id` int(11) NOT NULL,
  `vacante` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`id`, `vacante`) VALUES
(0, 'Desarrollador Back-End'),
(1, 'Desarrollador Front-End'),
(2, 'Diseñador Gráfico'),
(3, 'Coordinador de Logistica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ci_rango`
--
ALTER TABLE `ci_rango`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rango_ci` (`id_rango_ci`),
  ADD KEY `is_ci` (`id_ci`);

--
-- Indices de la tabla `c_i`
--
ALTER TABLE `c_i`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `segmento_id` (`segmento_id`);

--
-- Indices de la tabla `rango`
--
ALTER TABLE `rango`
  ADD PRIMARY KEY (`id_rango`),
  ADD KEY `segmento_id` (`segmento_id`);

--
-- Indices de la tabla `rango_ci`
--
ALTER TABLE `rango_ci`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `resp_usuario`
--
ALTER TABLE `resp_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDusuario` (`id_usuario`),
  ADD KEY `ci_rango_id` (`ci_rango_id`),
  ADD KEY `ci_id` (`ci_id`),
  ADD KEY `id_total_seg` (`id_total_seg`);

--
-- Indices de la tabla `segmentos`
--
ALTER TABLE `segmentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `total_segmento`
--
ALTER TABLE `total_segmento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`id_usuario`),
  ADD KEY `id_rango` (`id_rango`),
  ADD KEY `id_segmento` (`id_segmento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacante_id` (`vacante_id`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ci_rango`
--
ALTER TABLE `ci_rango`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `c_i`
--
ALTER TABLE `c_i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `rango`
--
ALTER TABLE `rango`
  MODIFY `id_rango` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `rango_ci`
--
ALTER TABLE `rango_ci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=934;

--
-- AUTO_INCREMENT de la tabla `resp_usuario`
--
ALTER TABLE `resp_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `segmentos`
--
ALTER TABLE `segmentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `total_segmento`
--
ALTER TABLE `total_segmento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ci_rango`
--
ALTER TABLE `ci_rango`
  ADD CONSTRAINT `id_rango_ci` FOREIGN KEY (`id_rango_ci`) REFERENCES `rango_ci` (`id`),
  ADD CONSTRAINT `is_ci` FOREIGN KEY (`id_ci`) REFERENCES `c_i` (`id`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `segmento_id` FOREIGN KEY (`segmento_id`) REFERENCES `segmentos` (`id`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `id_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id`);

--
-- Filtros para la tabla `resp_usuario`
--
ALTER TABLE `resp_usuario`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `resp_usuario_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id`);

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `IDusuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ci_id` FOREIGN KEY (`ci_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ci_rango_id` FOREIGN KEY (`ci_rango_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `total_segmento`
--
ALTER TABLE `total_segmento`
  ADD CONSTRAINT `id_rango` FOREIGN KEY (`id_rango`) REFERENCES `rango` (`id_rango`),
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `vacante_id` FOREIGN KEY (`vacante_id`) REFERENCES `vacante` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
