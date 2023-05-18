-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor:
-- Tiempo de generación: 
-- Versión del servidor: 
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbvehiculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_combustible`
--

CREATE TABLE `carga_combustible` (
  `id` bigint(20) NOT NULL,
  `vehiculo_id` bigint(20) NOT NULL,
  `combustible_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cantidadGalon` decimal(15,1) NOT NULL,
  `valorGalon` decimal(15,1) NOT NULL,
  `valorTotal` decimal(15,1) NOT NULL,
  `fecha` date NOT NULL,
  `kilometrosActuales` decimal(15,1) NOT NULL,
  `estacionServicio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase_vehiculo`
--

CREATE TABLE `clase_vehiculo` (
  `id` bigint(20) NOT NULL,
  `clase_v` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` bigint(20) NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_inicial`
--

CREATE TABLE `estado_inicial` (
  `id` bigint(20) NOT NULL,
  `vehiculo` bigint(20) NOT NULL,
  `kilometraje` decimal(15,1) NOT NULL,
  `condicion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kilometraje`
--

CREATE TABLE `kilometraje` (
  `id` bigint(20) NOT NULL,
  `vehiculo` bigint(20) NOT NULL,
  `cantidad` decimal(15,1) DEFAULT NULL,
  `origen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `destino` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `salida` datetime NOT NULL,
  `llegada` datetime DEFAULT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` bigint(20) NOT NULL,
  `linea` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id` bigint(20) NOT NULL,
  `vehiculo` bigint(20) NOT NULL,
  `tipo` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `precio` decimal(15,1) NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kilometros_actuales` decimal(15,1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` bigint(20) NOT NULL,
  `marca` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_usuarios`
--

CREATE TABLE `nivel_usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion_mantenimiento`
--

CREATE TABLE `recomendacion_mantenimiento` (
  `id` bigint(20) NOT NULL,
  `vehiculo` bigint(20) NOT NULL,
  `tipo` bigint(20) NOT NULL,
  `kilometros` decimal(15,1) NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mantenimiento`
--

CREATE TABLE `tipo_mantenimiento` (
  `id` bigint(20) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_identificacion` bigint(20) NOT NULL,
  `identificacion` bigint(20) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_usuario` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `clase_vehiculo` bigint(20) NOT NULL,
  `marca` bigint(20) NOT NULL,
  `linea` bigint(20) NOT NULL,
  `modelo` date NOT NULL,
  `color` bigint(20) NOT NULL,
  `cilindrada_cc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `propietario` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` bigint(20) NOT NULL,
  `updated_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga_combustible`
--
ALTER TABLE `carga_combustible`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carga_combustible_fk0` (`vehiculo_id`);

--
-- Indices de la tabla `clase_vehiculo`
--
ALTER TABLE `clase_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_inicial`
--
ALTER TABLE `estado_inicial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehiculo` (`vehiculo`);

--
-- Indices de la tabla `kilometraje`
--
ALTER TABLE `kilometraje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kilometraje_fk0` (`vehiculo`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mantenimiento_fk0` (`vehiculo`),
  ADD KEY `mantenimiento_fk1` (`tipo`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_usuarios`
--
ALTER TABLE `nivel_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recomendacion_mantenimiento`
--
ALTER TABLE `recomendacion_mantenimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recomendacion_mantenimiento_fk0` (`vehiculo`),
  ADD KEY `recomendacion_mantenimiento_fk1` (`tipo`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_fk0` (`tipo_identificacion`),
  ADD KEY `usuarios_fk1` (`nivel_usuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placa` (`placa`),
  ADD KEY `vehiculo_fk0` (`clase_vehiculo`),
  ADD KEY `vehiculo_fk1` (`marca`),
  ADD KEY `vehiculo_fk2` (`linea`),
  ADD KEY `vehiculo_fk3` (`color`),
  ADD KEY `vehiculo_fk4` (`propietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carga_combustible`
--
ALTER TABLE `carga_combustible`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clase_vehiculo`
--
ALTER TABLE `clase_vehiculo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado_inicial`
--
ALTER TABLE `estado_inicial`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `kilometraje`
--
ALTER TABLE `kilometraje`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=887;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivel_usuarios`
--
ALTER TABLE `nivel_usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recomendacion_mantenimiento`
--
ALTER TABLE `recomendacion_mantenimiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carga_combustible`
--
ALTER TABLE `carga_combustible`
  ADD CONSTRAINT `carga_combustible_fk0` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `estado_inicial`
--
ALTER TABLE `estado_inicial`
  ADD CONSTRAINT `estado_inicial_fk0` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `kilometraje`
--
ALTER TABLE `kilometraje`
  ADD CONSTRAINT `kilometraje_fk0` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_fk0` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculo` (`id`),
  ADD CONSTRAINT `mantenimiento_fk1` FOREIGN KEY (`tipo`) REFERENCES `tipo_mantenimiento` (`id`);

--
-- Filtros para la tabla `recomendacion_mantenimiento`
--
ALTER TABLE `recomendacion_mantenimiento`
  ADD CONSTRAINT `recomendacion_mantenimiento_fk0` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculo` (`id`),
  ADD CONSTRAINT `recomendacion_mantenimiento_fk1` FOREIGN KEY (`tipo`) REFERENCES `tipo_mantenimiento` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_fk0` FOREIGN KEY (`tipo_identificacion`) REFERENCES `tipo_identificacion` (`id`),
  ADD CONSTRAINT `usuarios_fk1` FOREIGN KEY (`nivel_usuario`) REFERENCES `nivel_usuarios` (`id`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_fk0` FOREIGN KEY (`clase_vehiculo`) REFERENCES `clase_vehiculo` (`id`),
  ADD CONSTRAINT `vehiculo_fk1` FOREIGN KEY (`marca`) REFERENCES `marca` (`id`),
  ADD CONSTRAINT `vehiculo_fk2` FOREIGN KEY (`linea`) REFERENCES `linea` (`id`),
  ADD CONSTRAINT `vehiculo_fk3` FOREIGN KEY (`color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `vehiculo_fk4` FOREIGN KEY (`propietario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
