-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2022 a las 11:10:01
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indumentaria`
--

CREATE DATABASE IF NOT EXISTS `indumentaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `indumentaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id_categoria` int(11) NOT NULL,
  `Categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Nombre_prod` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(90) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Precio` float (10) DEFAULT NULL,
  `Id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `user_coment` varchar(500) DEFAULT NULL,
  `puntaje` int(11) NOT NULL,
  `fecha` date DEFAULT  CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `productos`
--
--

ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);


--
-- Indices de la tabla `usuarios`
--
--

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- Indices de la tabla `comentarios`
--
--

ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Indice clave foranea tabla `productos`
--
--

ALTER TABLE `productos`
  ADD FOREIGN KEY (`Id_categoria`) REFERENCES `categorias`(`Id_categoria`) ON DELETE CASCADE;

--
-- Indice clave foranea tabla `productos`
--
--

ALTER TABLE `comentarios`
  ADD FOREIGN KEY (`Id_producto`) REFERENCES `productos`(`Id`) ON DELETE CASCADE;

--
-- Volcado de datos para la tabla `categorias`
--


INSERT INTO `categorias` (`Id_categoria`,`Categoria`) VALUES
(1,'Remeras'),
(2,'Pantalones'),
(3,'Shorts'),
(4,'Buzos'),
(5,'Conjuntos');


--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre_prod`, `Descripcion`, `Color`, `Marca`, `Precio`, `Id_categoria`) VALUES
(1,'Short Nike Training Dri-fit Story Flex Woven', 'Cintura elastica con cordon de ajuste. Material %100 poliester. Corte: estándar.', 'Azul', 'Nike' , 8000,3),
(2,'Remera Adidas Essential', 'Corte clásico. Cuello redondo. Material 100 % algodón. Mangas cortas.', 'Negro', 'Adidas',4500,1),
(3,'Buzo Fila Tenis Entrenamiento Aat 22', 'Bolsillo canguro. Capucha sin cordon de ajuste. Cintura y puños elasticos. Material algodon.', 'Negro', 'Fila',6500,4),
(4,'Pantalon Puma Moda Power Tr', 'Cintura elástica con cordones ocultos ajustables. Bolsillos laterales dobles.', 'Negro', 'Puma',6400,2),
(5,'Conjunto Adidas Training Aeroready Sereno Cut', 'Campera: Corte ajustado, Pantalón: Corte clásico. Cierre frontal y cuello alto. Material 1', 'Negro', 'Adidas',13000,5),
(6,'Conjunto Munster Punto', 'Material tela deportiva sin friza. Campera con recorte en frente y espalda contratono', 'Azul', 'Umbro',7300,5),
(7,'Remera Nike Running Dri-fit Miler Top', 'Elementos reflectantes. Cuello redondo. Logotipo al frente. Mangas cortas.', 'Azul', 'Nike',6300,1),
(8,'Pantalon Nike Futbol Strke21', 'Ajuste slim que ofrece una sensación personalizada. Cuerpo: 91% poliéster, 9% spandex.', 'Negro', 'Nike',11500,2);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`,`Email`,`Nombre`,`Password`,`Admin`) VALUES
(1,'admin@gmail.com','Administrador','$2y$10$s28K/cECIkHFDun8UVtCmOs8D70aA4jGqRE6MveJbgX/O4C60s3i.',1),
(2,'redolfofederico@gmail.com','Federico Redolfo','$2y$10$s28K/cECIkHFDun8UVtCmOs8D70aA4jGqRE6MveJbgX/O4C60s3i.',0);
COMMIT;