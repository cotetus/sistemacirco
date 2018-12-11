-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2018 a las 21:38:27
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

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `email`, `pass`, `rango`) VALUES
(1, 'Brucely', 'user', 'user', 'adm');

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
(1, 'Una batalla en la que el ataque puede surgir de cualquier lado.', 25, 'El reto: el combate vertical; el objetivo: conquistar y vencer las tres mismÃ­simas dimensiones de la tierra. La gravedad desafiada, los enemigos confrontados, un noble combate acrobÃ¡tico.', '01k.png'),
(2, 'Una expediciÃ³n que asimila fronteras y amargas rivalidades', 25, 'No es una misiÃ³n fÃ¡cil. Una tierra desolada poblada por maestros donde las artes marciales y escÃ©nicas permanecen al acecho. Sea digno de esta aventura.\r\n', '02k.png'),
(3, 'Un escenario nunca antes imaginado, el mayor reto del viaje.', 25, 'Los guerreros mÃ¡s hÃ¡biles libran un combate mortal en un campo de batalla que desafÃ­a las dimensiones. Cuando la tierra se transforma en el cielo, sÃ³lo los mÃ¡s valientes pueden sobrevivir.\r\n', '03k.png'),
(4, 'Una tormenta que desafÃ­a hasta al corazÃ³n marinero mÃ¡s decidido.', 25, 'Mares crueles, marineros aguerridos, barcos que enfrentan olas violentas. La seguridad de la orilla estÃ¡ muy, muy lejos.\r\n', '04.png'),
(5, 'FusiÃ³n rock-danza', 26, 'Artistas amarrados a un bungee giratorio bailan al ritmo de Beat It, acompaÃ±ados de un solo de guitarra electrizante. El espÃ­ritu creativo de Michael Jackson encarnado.\r\n', '01.png'),
(6, 'EmociÃ³n a mÃ¡s no poder', 26, 'â€œDirty Dianaâ€ fue, histÃ³ricamente, un solo interpretado por Michael, pero ahora es un increÃ­ble nÃºmero de Michael Jackson ONE.\r\n', '02.png'),
(7, 'Ritmos legendarios', 26, 'MÃºsica histÃ³rica que sigue siendo tan emotiva y actual como cuando sorprendiÃ³ y maravillÃ³ al pÃºblico por primera vez.\r\n', '03m.png'),
(8, 'EnergÃ­a. Electrizante.', 26, 'Hay mÃ¡s de 550 luces, casi 300 LEDs integrados a los diferentes elementos escenogrÃ¡ficos, 26 proyectores, 11 monitores de televisiÃ³n y una pared de LED de 12 mts. x 9 mts.\r\n', '04m.png'),
(9, 'Cuando se trata de hacer algo espectacular, jack y las habichuelas ya no estÃ¡n en primer lugar.', 27, 'La naturaleza se pone a jugar de forma vivaz, con forma humana.\r\n', '01mis.png'),
(10, 'Los cuerpos se contorsionan de maneras increÃ­bles.', 27, 'La fuerza y la resistencia se armonizan en mÃºsica exquisita para los ojos.\r\n', '02miss.png'),
(11, 'Una locura contagiosa, sonrisas insaciables.', 27, 'Un elenco entusiasta de personajes que emprenden un paseo feliz por un mundo de aventura.\r\n', '03miss.png'),
(12, 'Ligero, maravilloso, incontenible y desenfrenado', 27, 'Un viaje por los cielos en un insulto alegre a la gravedad.\r\n', '04miss.png'),
(13, 'Aros aÃ©reos', 28, 'Una vertiginosa coreografÃ­a con impresionantes acrobacias aÃ©reas y acuÃ¡ticas.\r\n', '01O.png'),
(14, 'Barco', 28, 'Un barco fantasma emerge de la neblina. AcrÃ³batas que demuestran una sincronizaciÃ³n increÃ­ble.\r\n', '02O.png'),
(15, 'Cadre', 28, 'Una manada de zebras acuÃ¡ticas se columpia en un cuadrado gigante bajo una lluvia constante.\r\n', '03O.png'),
(16, 'Fuego', 28, 'La furia del fuego y la pureza del agua se hacen uno y luego se exhiben en este acto brillantemente visual.\r\n', '04O.png');

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
(2, 'Santana do Livramento'),
(3, 'Porto Alegre'),
(4, 'Montevideo'),
(5, 'New York '),
(6, 'Las Vegas'),
(7, 'Buenos Aires'),
(8, 'Tranqueras'),
(9, 'Dubai');

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

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`id_esp`, `id_ciu`, `date_in`, `date_end`) VALUES
(26, 1, '2018-12-01', '2018-12-08'),
(28, 9, '2018-12-18', '2018-12-21'),
(27, 4, '2018-12-04', '2018-12-10'),
(26, 6, '2018-12-31', '2019-01-04'),
(25, 8, '2019-01-10', '2018-12-21'),
(28, 3, '2019-01-22', '2019-01-26'),
(27, 7, '2019-02-01', '2019-02-05'),
(25, 5, '0000-00-00', '0000-00-00'),
(25, 5, '2019-03-08', '2019-03-12');

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
(25, 'KÃ€', '', 'Â¡Ingresa al imperio de KÃ€! Una aventura Ã©pica de amor y conflicto.', 'kÃ¡.png', 'ka.png'),
(26, 'Michael Jackson ONE', 'Aclamado por Rolling Stone como una \"exhibiciÃ³n virtual de escenas increÃ­bles\", el musical Michael Jackson ONE es una fusiÃ³n electrizante de acrobacias, bailes y efectos visuales que refleja el talento dinÃ¡mico del Rey del Pop, y sumerge a la audiencia en el mundo musical de Michael. Impulsado por sus grandes Ã©xitos, que se oyen como nunca antes gracias a un fascinante entorno de sonido envolvente de Ãºltima generaciÃ³n, Michael Jackson ONE de Cirque du Soleil se presenta Ãºnicamente en el Mandalay Bay Resort and Casino en Las Vegas.', 'Un viaje multisensorial', 'michael jack.png', 'michael ONE.png'),
(27, 'MystÃ¨re', 'Este mundo es una aventura alegre llena de mÃºsica y de colores brillantes, atletismo y amigos burbujeantes. Abundan las tonterÃ­as, las acrobacias locas y las bromas alucinantes.\r\n\r\nUna alegre casa de risas... y usted estÃ¡ en la puerta principal. Toc, Toc... Â¿QuiÃ©n es? MYSTERE. \r\n\r\nDescubra el lado bonito de la vida, sÃ³lo en Treasure Island, Las Vegas. Â¡Reserve hoy mismo!', 'Dentro de la imaginaciÃ³n hay un lugar divertido donde estar. ', 'mistere.png', 'mistere.png'),
(28, 'O', 'Con un tapiz acuÃ¡tico intemporal de arte, surrealismo y romance teatral, \"O\" brinda un tributo a la belleza del teatro. Inspirada en el concepto de infinidad y elegancia del agua, con acrÃ³batas de primer nivel y nadadores y clavadistas sincronizados que crean una experiencia imponente. Solo en Bellagio, Las Vegas.\r\n', 'Vive una obra maestra acuÃ¡tica', 'O.png', 'O.png');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `atracciones`
--
ALTER TABLE `atracciones`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
