-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2024 a las 13:46:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misregistros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rocas`
--

CREATE TABLE `rocas` (
  `roca_id` int(11) NOT NULL,
  `ruta` varchar(300) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `roca` varchar(30) NOT NULL,
  `clasederoca` varchar(100) NOT NULL,
  `textura` varchar(200) NOT NULL,
  `dureza` varchar(300) NOT NULL,
  `color` text NOT NULL,
  `ambiente_formacion` text NOT NULL,
  `tipocemento` varchar(200) NOT NULL,
  `composicion` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rocas`
--

INSERT INTO `rocas` (`roca_id`, `ruta`, `descripcion`, `roca`, `clasederoca`, `textura`, `dureza`, `color`, `ambiente_formacion`, `tipocemento`, `composicion`, `video`) VALUES
(17, 'img/anfibolita.webp', 'La anfibolita es una roca metamórfica de blastos gruesos, y se compone principalmente de anfíboles verdes, marrones o negros, feldespatos y plagioclasas.', 'Anfibolita', 'Roca Metamórfica', 'Granoblástica', '5-6', 'Gris verdoso son tonalidades amarillentas', 'Las anfibolitas se forman a partir de rocas magmáticas básicas que generalmente contienen anfíboles de magnesio (antofilita), y las que surgen de rocas magmáticas básicas a intermedias que contienen cantidades casi iguales de hornblenda y plagioclasas de calcio.', 'N/A', 'La composición mineral de las anfibolitas es simple y contiene principalmente hornblenda y plagioclasa, con cantidades variables de antofilita, granate, mica, cuarzo y epidota.', 'https://www.youtube.com/watch?v=aUzTpsTx-U8'),
(28, 'img/gneis.jpg', 'El gneis es una roca metamórfica foliada identificada por sus bandas y lentes de composición y mineral variable.', 'Gneis', 'Roca Metamórfica', 'Bandeada', '2,4-2,6', 'Gris con tonalidades blancas y amarillentas', 'El gneis generalmente se forma por metamorfismo regional, específicamente en los límites de las placas convergentes, por lo tanto, es una roca de alto grado, en la que los blastos minerales se recristalizan por acción del intenso calor y presión.', '', 'Cuarzo, biotita, feldespatos, granate', 'https://www.youtube.com/watch?v=XREsVa32quM'),
(43, 'img/cuarcita.jpeg', 'La cuarcita es una roca metamórfica que se forma producto de la recristalización del cuarzo, de un protolito de arenisca, la cual está compuesta principalmente de clastos de cuarzo, y esta se ve alterada por el calor, la presión y la actividad química del metamorfismo. El metamorfismo recristaliza los granos de arena y cemento de sílice que los une. Constituye, de este modo, una red de granos de cuarzo unidos entre si.', 'Cuarcita', 'Roca metamórfica', 'Granoblástica', '7', 'Gris con tonalidades blancas', '', '', '', 'https://www.youtube.com/watch?v=8R8gOiE2ohg'),
(53, 'img/conglomerado.jpeg', 'Roca sedimentaria detrítica formada por clastos de diámetro > 2mm y una matriz de grano fino (< 2mm de diámetro).\r\n\r\nEstos dos componentes son producto de rocas preexistentes que se han sometido a procesos de erosión para luego ser depositados en un determinado sitio y, a través de procesos de litificación formar dichos conglomerados.', 'Conglomerado', 'Sedimentaria', 'Clástica', 'Dependiente de la composición de la roca', 'Colores oscuros y grises', 'Ambiente sedimentario acuoso', 'Clastos: tamaños > a 2mm\r\nMatriz: tamaños < a 2mm', 'Escasa abundancia, los más comunes son el cuarzo y los feldespatos', 'https://www.youtube.com/watch?v=oerNUmu41IA'),
(54, 'img/caliza.webp', 'Roca sedimentaria que posee más del 50% de CaCO3 (carbonato de calcio), fundamentalmente calcita y aragonito.\r\n\r\nEsta puede formarse por efectos de la precipitación del agua (caliza, química o inorgánica), segregarse mediante el uso de organismos marinos, como algas y corales (caliza bioquímica), o puede formarse a partir de esqueletos carbonatados de organismos marinos (caliza bioclástica). ', 'Caliza', 'Roca sedimentaria', 'Generalmente no clástica, y clástica en el caso de las calizas bioclásticas', '3', 'Variable, pero normalmente colores claros, especialmente blanco', 'Es una roca sedimentaria. Se forma predominantemente en el fondo del mar donde se acumula material rico en carbonato de calcio (material ‘calcáreo’). ', 'Matriz (a menudo micrita, caliza micrítica) y cemento (esparita, caliza esparítica).', 'Calcita y dolomita', 'https://www.youtube.com/watch?v=Se87OjOyFEA'),
(56, 'img/arenisca.jpeg', 'Roca sedimentaria, con cuarzo, feldespatos, intercesiones de tipos de cemento y canales cortantes.', 'Arenisca', 'Roca sedimentaria', 'Clástica', 'Dependiente de la composición de la roca, pero frecuentemente entre 6 y 7', 'Colores claros y oscuros', 'Una arenisca es una roca sedimentaria detrítica, formada netamente por sedimentos entre 2 a 0.063 milímetros de diámetro.\r\n\r\nEstos detritos pueden ser fragmentos de minerales (cuarzo, plagioclasa, feldespatos), y en algunos casos de rocas (comúnmente rocas ígneas ácidas).\r\n', 'Sílice, carbonato, cemento ferruginoso o minerales arcillosos.', 'Comúnmente cuarzo', 'https://www.youtube.com/watch?v=iLXViOxMF8k'),
(60, 'img/gabro.jpeg', 'El Gabro es una roca ígnea intrusiva de grano grueso y color oscuro, tonos verdosos o negro y compuesta por plagioclasa y piroxeno. Es el equivalente plutónico del basalto, roca volcánica. Es la roca mayoritaria en la corteza oceánica.', 'Gabro', 'Roca ígnea', 'Fanerítica de grano fino a grueso', '', 'Verde oscuro a negro\r\n', 'El basalto se produce en la superficie de la corteza porque las rocas allí se han enfriado rápidamente. A mayor profundidad, la velocidad de enfriamiento es más lenta y los cristales grandes tienen tiempo para desarrollarse', '', 'Piroxeno (más abundante), anfibol, biotita y olivino (escaso)', 'https://www.youtube.com/watch?v=FXxILv_17HI'),
(67, 'img/lutita.jpeg', 'Una lutita es una roca formada por sedimentos muy finos, menores a 0,063 mm de diámetro.\r\nPetrológicamente se encuentra conformada por materiales arcillosos o comúnmente conocidos como minerales de arcilla, y que son en esencia, silicatos alumÍnicos hidratados. ', 'Lutita', 'Sedimentaria', 'Clástica', 'Dependiente de la composición y nivel de consolidación de la roca, pero frecuentemente entre 2 y 5', 'Variable, pero normalmente colores grises, marrones y ocres.', 'Sedimentario', 'Los materiales de cementación comunes son sílice, óxido de hierro y calcita o cal.', 'Minerales de arcilla', 'https://www.youtube.com/watch?v=C-E7klURqCo'),
(77, 'img/andesita.webp', 'Andesita es el nombre de una familia de rocas ígneas extrusivas de grano fino que suelen ser de color gris claro a oscuro. Tienen una composición mineral intermedia entre granito y basalto. La andesita es una roca que se encuentra típicamente en volcanes por encima de los límites de las placas convergentes entre las placas continentales y oceánicas.', 'Andesita', 'Roca Ígnea', 'Afanítica', '', 'Gris con tonalidades negras', 'La andesita se encuentra típicamente en los flujos de lava producidos por los estratovolcanes por encima de las zonas de subducción. Debido a que estas lavas se enfriaron rápidamente en la superficie, generalmente están compuestas por pequeños cristales. Los granos minerales suelen ser tan pequeños que no se pueden ver claramente sin el uso de una lupa u otro dispositivo de aumento.', '', 'Cuarzo (4%); Feldespato K (16%); Plagioclasa (56%)', 'https://www.youtube.com/watch?v=WasuVJ6yNE8'),
(78, 'img/limolita.jpeg', 'La limolita se caracteriza por ser una roca sedimentaria clástica de grano fino. Se formó a partir de granos cuyo tamaño se encuentra entre el de arenisca y arcillolita (tamaño limo).', 'Limolita', 'Sedimentaria', 'Clástica', 'Cuando está formada netamente de cuarzo, su dureza es 7; mientras que, si está formada de minerales arcillosos, su dureza estar dentro de un rango entre 2-5', 'Variable', 'Ambientes sedimentarios', 'Sedimento limoso, generalmente uniforme, moderadamente consolidado a semilitificado.', 'Cuarzo, minerales arcillosos', 'https://www.youtube.com/watch?v=PlnR2DDatsA'),
(99, 'img/basalto.jpg', 'El basalto es una roca ígnea volcánica de color oscuro, negro o gris, grano fino y compuesta principalmente de minerales máficos con abundancia de plagioclasa y piroxeno.', 'Basalto', 'Roca Ígnea', 'Afanítica', '', 'Negro', '', 'N/A', '', 'https://www.youtube.com/watch?v=WWNXaTvf1pg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rocas`
--
ALTER TABLE `rocas`
  ADD PRIMARY KEY (`roca_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rocas`
--
ALTER TABLE `rocas`
  MODIFY `roca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
