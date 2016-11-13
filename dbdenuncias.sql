-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2016 a las 01:03:43
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbdenuncias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `idarchivo` int(11) NOT NULL,
  `iddenuncia` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `archivo` varchar(45) DEFAULT NULL,
  `tipo` enum('VIDEO','IMAGEN','AUDIO','ARCHIVO','TEXTO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncia`
--

CREATE TABLE `denuncia` (
  `iddenuncia` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idubigeo` char(6) NOT NULL,
  `idtipo_denuncia` int(11) NOT NULL,
  `denunciado` varchar(100) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `organismo_implicado` varchar(100) NOT NULL,
  `institucion_nombre` varchar(100) DEFAULT NULL,
  `institucion_direccion` varchar(45) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos_denuncia`
--

CREATE TABLE `pasos_denuncia` (
  `idpasos_denuncia` int(11) NOT NULL,
  `idtipo_denuncia` int(11) NOT NULL,
  `numero` varchar(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_denuncia`
--

CREATE TABLE `tipo_denuncia` (
  `idtipo_denuncia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubigeo`
--

CREATE TABLE `ubigeo` (
  `idubigeo` char(6) NOT NULL,
  `coddpto` varchar(2) DEFAULT NULL,
  `codprov` varchar(2) DEFAULT NULL,
  `coddist` varchar(2) DEFAULT NULL,
  `nombre` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idusuario` int(11) NOT NULL,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(100) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  `idubigeo` char(6) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `num_documento` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`idarchivo`),
  ADD KEY `fk_archivo_denuncia_idx` (`iddenuncia`);

--
-- Indices de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`iddenuncia`),
  ADD KEY `fk_denuncia_ubigeo_idx` (`idubigeo`),
  ADD KEY `fk_denuncia_tipo_denuncia_idx` (`idtipo_denuncia`),
  ADD KEY `fk_denuncia_users_idx` (`idusuario`);

--
-- Indices de la tabla `pasos_denuncia`
--
ALTER TABLE `pasos_denuncia`
  ADD PRIMARY KEY (`idpasos_denuncia`),
  ADD KEY `fk_pasos_denuncia_tipo_denuncia_idx` (`idtipo_denuncia`);

--
-- Indices de la tabla `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  ADD PRIMARY KEY (`idtipo_denuncia`);

--
-- Indices de la tabla `ubigeo`
--
ALTER TABLE `ubigeo`
  ADD PRIMARY KEY (`idubigeo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_ubigeo_idx` (`idubigeo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `idarchivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `iddenuncia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pasos_denuncia`
--
ALTER TABLE `pasos_denuncia`
  MODIFY `idpasos_denuncia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  MODIFY `idtipo_denuncia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `fk_archivo_denuncia` FOREIGN KEY (`iddenuncia`) REFERENCES `denuncia` (`iddenuncia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `fk_denuncia_tipo_denuncia` FOREIGN KEY (`idtipo_denuncia`) REFERENCES `tipo_denuncia` (`idtipo_denuncia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_denuncia_ubigeo` FOREIGN KEY (`idubigeo`) REFERENCES `ubigeo` (`idubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_denuncia_users` FOREIGN KEY (`idusuario`) REFERENCES `users` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pasos_denuncia`
--
ALTER TABLE `pasos_denuncia`
  ADD CONSTRAINT `fk_pasos_denuncia_tipo_denuncia` FOREIGN KEY (`idtipo_denuncia`) REFERENCES `tipo_denuncia` (`idtipo_denuncia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usuario_ubigeo` FOREIGN KEY (`idubigeo`) REFERENCES `ubigeo` (`idubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
