-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2023 a las 08:09:50
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
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `libro_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `formato` varchar(50) DEFAULT NULL,
  `ano_publicacion` int(11) DEFAULT NULL,
  `idioma` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `descripcion`, `precio`, `imagen`, `formato`, `ano_publicacion`, `idioma`, `categoria`) VALUES
(21, 'Harry Potter y el prisionero de Azkaban', 'J.K. Rowling', 'Harry Potter 3', 14700.00, 'prisionero_azkaban.jpg', 'Libro Ilustrado', 1999, 'Español', 'Fantasía'),
(22, 'Harry Potter y el cáliz de fuego', 'J.K. Rowling', 'Harry Potter 4', 16100.00, 'caliz_de_fuego.jpg', 'Edicion Especial', 2000, 'Español', 'Fantasía'),
(23, 'Harry Potter y la Orden del Fénix', 'J.K. Rowling', 'Harry Potter 5', 20300.00, 'orden_del_fenix.jpg', 'Libro Basico', 2003, 'Español', 'Fantasía'),
(24, 'Harry Potter y la Piedra Filosofal', 'J.K. Rowling', 'Harry Potter y la Piedra Filosofal', 8400.00, 'piedra_filosofal.jpg', 'De Bolsillo', 1997, 'Español', 'Fantasía'),
(25, 'Harry Potter y el prisionero de Azkaban (Edición ilustrada)', 'J.K. Rowling', 'Harry Potter [edición ilustrada] 3', 23800.00, 'prisionero_azkaban1.jpg', 'Libro Ilustrado', 2017, 'Español', 'Fantasía'),
(26, 'Harry Potter y la Cámara Secreta', 'J.K. Rowling', 'Harry Potter y la Cámara Secreta', 9100.00, 'camara_secreta.jpg', 'Libro Basico', 1998, 'Español', 'Fantasía'),
(27, 'Sinsajo los Juegos del Hambre', 'Suzanne Collins', 'Sinsajo los Juegos del Hambre', 10790.00, 'juegos_del_hambre.jpg', 'Libro Basico', 2010, 'Español', 'Ciencia Ficción'),
(28, 'En llamas los Juegos del Hambre', 'Suzanne Collins', 'Los Juegos del Hambre 2 - En Llamas', 8020.00, 'en_llamas.jpg', 'Libro Basico', 2009, 'Español', 'Ciencia Ficción'),
(29, 'El Señor de los Anillos El retorno del rey', 'J.R.R. Tolkien', 'El Señor de los Anillos III: El Retorno del rey', 12030.00, 'retorno_del_rey.jpg', 'Libro Ilustrado', 1955, 'Español', 'Fantasía'),
(30, 'El Señor de los Anillos Las dos torres', 'J.R.R. Tolkien', 'El Señor de los Anillos II: Las dos Torres', 12030.00, 'las_dos_torres.jpg', 'Libro Ilustrado', 1954, 'Español', 'Fantasía'),
(31, 'Cien años de soledad', 'Gabriel García Márquez', 'Cien años de soledad', 18900.00, 'cien_anos_soledad.jpg', 'Libro Basico', 1967, 'Español', 'Realismo Mágico'),
(32, '1984', 'George Orwell', '1984', 13500.00, '1984.jpg', 'Libro Basico', 1949, 'Inglés', 'Ciencia Ficción'),
(33, 'Orgullo y prejuicio', 'Jane Austen', 'Orgullo y prejuicio', 9800.00, 'orgullo_prejuicio.jpg', 'Libro Basico', 1813, 'Inglés', 'Clásico'),
(34, 'Los juegos del hambre', 'Suzanne Collins', 'Los juegos del hambre', 11800.00, 'juegos_del_hambre2.jpg', 'Libro Basico', 2008, 'Español', 'Ciencia Ficción'),
(35, 'La sombra del viento', 'Carlos Ruiz Zafón', 'La sombra del viento', 15600.00, 'sombra_del_viento.jpg', 'Libro Ilustrado', 2001, 'Español', 'Misterio'),
(36, 'Crónicas de una muerte anunciada', 'Gabriel García Márquez', 'Crónicas de una muerte anunciada', 8900.00, 'cronicas_muerte_anunciada.jpg', 'De Bolsillo', 1981, 'Español', 'Realismo Mágico'),
(37, 'Matar a un ruiseñor', 'Harper Lee', 'Matar a un ruiseñor', 11200.00, 'matar_un_ruisenor.jpg', 'Libro Ilustrado', 1960, 'Español', 'Ficción'),
(38, 'El Gran Gatsby', 'F. Scott Fitzgerald', 'El Gran Gatsby', 12450.00, 'gran_gatsby.jpg', 'Libro Basico', 1925, 'Inglés', 'Clásico'),
(39, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'Don Quijote de la Mancha', 16500.00, 'don_quijote.jpg', 'Edicion Especial', 1605, 'Español', 'Clásico'),
(40, 'La Odisea', 'Homero', 'La Odisea', 14500.00, 'odisea.jpg', 'Libro Basico', 800, 'Griego', 'Épico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(5, 'admin', 'admin@email.es', '$2y$10$MzVeZCuGk6Q6q3MorD3mtelEeMylFXehnV/fHtMSeedDo1nYT8O32', 'admin'),
(6, 'ccc', 'ccc@email.es', '$2y$10$zTNSXdiGk4spKkgng3KLiODQVf/.KykUq5QiXvADNUKX.N7Ya71Ee', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `libro_id` (`libro_id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`libro_id`) REFERENCES `libros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
