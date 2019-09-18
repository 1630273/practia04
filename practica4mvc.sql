-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2019 a las 07:55:17
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica4mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `no_alu` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_paterno` varchar(100) NOT NULL,
  `ape_materno` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `no_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`no_alu`, `nombre`, `ape_paterno`, `ape_materno`, `edad`, `no_padre`) VALUES
(1, 'Brian Alejandro', 'Mireles', 'Ortiz', 21, 1),
(3, 'Ivan', 'Castro', 'Castro', 22, 2),
(23, 'Claud', 'Russo', 'Montano', 22, 3),
(24, 'Rafael', 'Ramos', 'Ramos', 21, 3),
(28, 'Juan', 'Mireles', 'Montano', 18, 1),
(29, 'Jose', 'Wong', 'Montana', 21, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `no_grupo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `no_maestro` int(11) NOT NULL,
  `no_alu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`no_grupo`, `descripcion`, `no_maestro`, `no_alu`) VALUES
(1, '211', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `no_maestro` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_paterno` varchar(100) NOT NULL,
  `ape_materno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`no_maestro`, `nombre`, `ape_paterno`, `ape_materno`) VALUES
(1, 'tonito', 'tonote', 'tonota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `no_padre` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_paterno` varchar(100) NOT NULL,
  `ape_materno` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`no_padre`, `nombre`, `ape_paterno`, `ape_materno`, `telefono`, `email`) VALUES
(1, 'Roberto', 'Mireles', 'Morata', 312124, 'roberto@gmail.com'),
(2, 'Tomas', 'Castro', 'Pineda', 234235, 'tomas@gmail.com'),
(3, 'Claud', 'Russo', 'tonota', 2137483647, 'claud@hotmail.com'),
(17, 'Isaac', 'Wong', 'Chino', 123455, 'wong@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `no_pago` int(11) NOT NULL,
  `no_padre` int(11) NOT NULL,
  `no_usu` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`no_pago`, `no_padre`, `no_usu`, `descripcion`, `monto`) VALUES
(1, 2, 7, 'Constancia', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `no_perfil` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`no_perfil`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Apoyo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `no_usu` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_paterno` varchar(100) NOT NULL,
  `ape_materno` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`no_usu`, `nombre`, `ape_paterno`, `ape_materno`, `usuario`, `password`, `email`, `no_perfil`) VALUES
(7, 'Hector Abraham', 'Posada', 'Reyna', 'bramh24', 'abraham24', 'abbram23@gmail.com', 1),
(8, 'Jose', 'Montantes', 'Arroyo', 'pepe123', '123', 'arroyo@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`no_alu`),
  ADD KEY `no_padre` (`no_padre`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`no_grupo`),
  ADD KEY `no_maestro` (`no_maestro`),
  ADD KEY `no_alu` (`no_alu`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`no_maestro`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`no_padre`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`no_pago`),
  ADD KEY `no_padre` (`no_padre`),
  ADD KEY `no_usu` (`no_usu`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`no_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`no_usu`),
  ADD KEY `no_perfil` (`no_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `no_alu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `no_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `no_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `no_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `no_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `no_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `no_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`no_padre`) REFERENCES `padres` (`no_padre`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`no_usu`) REFERENCES `usuarios` (`no_usu`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`no_padre`) REFERENCES `padres` (`no_padre`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`no_perfil`) REFERENCES `perfil` (`no_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
