-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2018 a las 11:39:14
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemacirco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `rango` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atracciones`
--

CREATE TABLE `atracciones` (
  `id` int(100) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `id_esp` int(11) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(100) NOT NULL,
  `nombre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`) VALUES
(1, 'Rivera'),
(2, 'Santana do Livramento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `id_esp` int(100) NOT NULL,
  `id_ciu` int(100) NOT NULL,
  `date_in` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espectaculos`
--

CREATE TABLE `espectaculos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `artista` varchar(200) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `banner` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `espectaculos`
--

INSERT INTO `espectaculos` (`id`, `nombre`, `descripcion`, `artista`, `img`, `banner`) VALUES
(14, 'SEP7IMO DIA â€“ No D', 'Una banda de rock Soda Stereo es una banda de rock argentina que se formÃ³ en Buenos Aires en 1982, integrada por Gustavo Cerati (voz y guitarrra), Hector \"Zeta\" Bosio (bajo) y Charly Alberti (baterÃ­a). Pionera del movimiento de \"rock en espaÃ±ol\" de los aÃ±os 80, es considerada la mÃ¡s influyente e importante de toda LatinoamÃ©rica, con records de convocatoria y de venta de discos a lo largo de toda su carrera. Soda se caracterizÃ³ por innovar y tomar riesgos en todo momento, manteniendo al mismo tiempo su popularidad masiva. Se separaron en 1997 y diez aÃ±os despuÃ©s se reunieron para la exitosa gira â€œMe Veras Volverâ€ que llenÃ³ estadios en todo el continente, con mÃ¡s de un millÃ³n de tickets vendidos.', 'Saltarines Cabulosos', 'sep7imo dia - no descansarÃ©.jpg', ''),
(18, 'KÃ€', 'La gravedad se ve desafiada, los enemigos se confrontan en un noble combate que se transforma en acrobacia.  Nunca se ha librado una batalla de tal manera. El campo de batalla es un escenario colosal en movimiento. Todo se invierte: la tierra se torna en cielo. Estos enfrentamientos de otra dimensiÃ³n redefinen lo que significa pelear.  Cuerpos llenos de fuerza resplandecen con la luz y el calor. Mentes Ã¡giles y nÃ­tidas como la amplitud del paraÃ­so, la grandeza del ocÃ©ano y la cima mÃ¡s alta.  El camino es la determinaciÃ³n y la victoria, la recompensa.  AtrÃ©vase a formar parte de la batalla, en vivo en el MGM Grand, Las Vegas. Â¡Reserve ahora!', 'La gloria de la bata', 'ka-show-thumb.jpg', ''),
(19, 'Mystere', 'Dentro de la imaginaciÃ³n hay un lugar divertido donde estar.   Este mundo es una aventura alegre llena de mÃºsica y de colores brillantes, atletismo y amigos burbujeantes. Abundan las tonterÃ­as, las acrobacias locas y las bromas alucinantes.  Una alegre casa de risas... y usted estÃ¡ en la puerta principal. Toc, Toc... Â¿QuiÃ©n es? MYSTERE.   Descubra el lado bonito de la vida, sÃ³lo en Treasure Island, Las Vegas. Â¡Reserve hoy mismo!', 'RÃ­e con la vida', 'mystere-espectaculo.jpg', ''),
(20, 'O', 'Con un tapiz acuÃ¡tico intemporal de arte, surrealismo y romance teatral, \"O\" brinda un tributo a la belleza del teatro. Inspirada en el concepto de infinidad y elegancia del agua, con acrÃ³batas de primer nivel y nadadores y clavadistas sincronizados que crean una experiencia imponente. Solo en Bellagio, Las Vegas.', 'Vive una obra maestra acuÃ¡tica', 'o-espectaculo.jpg', ''),
(21, 'Michael Jackson ONE ', 'Aclamado por Rolling Stone como una \"exhibiciÃ³n virtual de escenas increÃ­bles\", el musical Michael Jackson ONE es una fusiÃ³n electrizante de acrobacias, bailes y efectos visuales que refleja el talento dinÃ¡mico del Rey del Pop, y sumerge a la audiencia en el mundo musical de Michael. Impulsado por sus grandes Ã©xitos, que se oyen como nunca antes gracias a un fascinante entorno de sonido envolvente de Ãºltima generaciÃ³n, Michael Jackson ONE de Cirque du Soleil se presenta Ãºnicamente en el Mandalay Bay Resort and Casino en Las Vegas.', 'EN VIVO!', 'michael-jackson-one-espectaculo.jpg', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `atracciones`
--
ALTER TABLE `atracciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_esp` (`id_esp`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD KEY `id_esp` (`id_esp`),
  ADD KEY `id_ciu` (`id_ciu`);

--
-- Indices de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `atracciones`
--
ALTER TABLE `atracciones`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atracciones`
--
ALTER TABLE `atracciones`
  ADD CONSTRAINT `atracciones_ibfk_1` FOREIGN KEY (`id_esp`) REFERENCES `espectaculos` (`id`);

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `cronograma_ibfk_1` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id`),
  ADD CONSTRAINT `cronograma_ibfk_2` FOREIGN KEY (`id_esp`) REFERENCES `espectaculos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
