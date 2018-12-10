-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2018 a las 03:06:16
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

--
-- Volcado de datos para la tabla `atracciones`
--

INSERT INTO `atracciones` (`id`, `nombre`, `id_esp`, `descripcion`, `img`) VALUES
(1, 'Una batalla en la que el ataque puede surgir de cualquier lado.', 25, 'El reto: el combate vertical; el objetivo: conquistar y vencer las tres mismÃ­simas dimensiones de la tierra. La gravedad desafiada, los enemigos confrontados, un noble combate acrobÃ¡tico.', '01.png'),
(2, 'Una expediciÃ³n que asimila fronteras y amargas rivalidades', 25, 'No es una misiÃ³n fÃ¡cil. Una tierra desolada poblada por maestros donde las artes marciales y escÃ©nicas permanecen al acecho. Sea digno de esta aventura.\r\n', '02.png'),
(3, 'Un escenario nunca antes imaginado, el mayor reto del viaje.', 25, 'Los guerreros mÃ¡s hÃ¡biles libran un combate mortal en un campo de batalla que desafÃ­a las dimensiones. Cuando la tierra se transforma en el cielo, sÃ³lo los mÃ¡s valientes pueden sobrevivir.\r\n', '03.png'),
(4, 'Una tormenta que desafÃ­a hasta al corazÃ³n marinero mÃ¡s decidido.', 25, 'Mares crueles, marineros aguerridos, barcos que enfrentan olas violentas. La seguridad de la orilla estÃ¡ muy, muy lejos.\r\n', '04.png'),
(5, 'FusiÃ³n rock-danza', 26, 'Artistas amarrados a un bungee giratorio bailan al ritmo de Beat It, acompaÃ±ados de un solo de guitarra electrizante. El espÃ­ritu creativo de Michael Jackson encarnado.\r\n', '01.png'),
(6, 'EmociÃ³n a mÃ¡s no poder', 26, 'â€œDirty Dianaâ€ fue, histÃ³ricamente, un solo interpretado por Michael, pero ahora es un increÃ­ble nÃºmero de Michael Jackson ONE.\r\n', '02.png'),
(7, 'Ritmos legendarios', 26, 'MÃºsica histÃ³rica que sigue siendo tan emotiva y actual como cuando sorprendiÃ³ y maravillÃ³ al pÃºblico por primera vez.\r\n', '03.png');

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
(25, 'KÃ€', 'La gravedad se ve desafiada, los enemigos se confrontan en un noble combate que se transforma en acrobacia.\r\n\r\nNunca se ha librado una batalla de tal manera. El campo de batalla es un escenario colosal en movimiento. Todo se invierte: la tierra se torna en cielo. Estos enfrentamientos de otra dimensiÃ³n redefinen lo que significa pelear.\r\n\r\nCuerpos llenos de fuerza resplandecen con la luz y el calor. Mentes Ã¡giles y nÃ­tidas como la amplitud del paraÃ­so, la grandeza del ocÃ©ano y la cima mÃ¡s alta.\r\n\r\nEl camino es la determinaciÃ³n y la victoria, la recompensa.\r\n\r\nAtrÃ©vase a formar parte de la batalla, en vivo en el MGM Grand, Las Vegas. Â¡Reserve ahora!', 'Â¡Ingresa al imperio de KÃ€! Una aventura Ã©pica de amor y conflicto.', 'kÃ¡.png', 'ka.png'),
(26, 'Michael Jackson ONE', 'Aclamado por Rolling Stone como una \"exhibiciÃ³n virtual de escenas increÃ­bles\", el musical Michael Jackson ONE es una fusiÃ³n electrizante de acrobacias, bailes y efectos visuales que refleja el talento dinÃ¡mico del Rey del Pop, y sumerge a la audiencia en el mundo musical de Michael. Impulsado por sus grandes Ã©xitos, que se oyen como nunca antes gracias a un fascinante entorno de sonido envolvente de Ãºltima generaciÃ³n, Michael Jackson ONE de Cirque du Soleil se presenta Ãºnicamente en el Mandalay Bay Resort and Casino en Las Vegas.', 'Un viaje multisensorial', 'michael jack.png', 'michael ONE.png');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
