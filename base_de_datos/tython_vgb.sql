-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2025 a las 00:18:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tython_vgb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `descripcion`) VALUES
(1, 'comercial'),
(2, 'rrhh'),
(3, 'ciberseguridad'),
(4, 'redes'),
(5, 'administracion_de_sistemas'),
(6, 'bbdd'),
(7, 'servidores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `referente` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `servicios_contratados` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `tk_abierto` int(11) NOT NULL,
  `tk_en_proceso` int(11) NOT NULL,
  `tk_cerrado` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `area_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre_completo`, `email`, `usuario`, `password`, `area_id`, `rol_id`, `fecha_ingreso`, `perfil_id`, `baja`) VALUES
(1, 'Leia Organa', 'leiajedi@tython.com', 'leiajedi', '$2y$10$1/BdCCthMXQA/K3cmU2Mz.RK.hEU1n6QeKrw29dzlJPkWzQdOdxhO', 0, 0, '2025-06-25', 2, 'NO'),
(2, 'Luke Skywalker', 'lukesky@tyhton.com', 'lukeskyboy', '$2y$10$8YO3TPxw79Wh0pVciVl/xundRZIRDhiAdoEP4WN1fQnZq5VXCxGiK', 0, 0, '0000-00-00', 2, 'NO'),
(4, 'Owen LArs', 'owenlars@tyhton.com', 'olars', '$2y$10$cqZ6R6PNT6010hkVr9HXY.WhV0.Ko0Un/4OPQj.7IXP7AIHUTN8R2', 0, 0, '0000-00-00', 2, 'NO'),
(6, 'gabi admin', 'gabi@tython.com', 'gabiadmin', '$2y$10$rkiI6SwtXl/vPl.VB9btk.Lxgo0LgCAmvI4NrREBmiItZhSs99wJC', 0, 0, '0000-00-00', 1, 'NO'),
(8, 'Veronica Acevedo Moreira', 'veroacev@tython.com', 'veroac', '$2y$10$QkOz5IEH8bzx5IS6vhMVJ.0r4AQdkp6OqHHa0ilqg/m.mruasra6a', 0, 0, '0000-00-00', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'empleado'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `permisos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `descripcion`, `permisos`) VALUES
(1, 'jefe', ''),
(2, 'coordinador', ''),
(3, 'analista', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
