-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: fdb1034.awardspace.net
-- Tiempo de generación: 07-09-2025 a las 21:22:27
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `4667271_usuariosstem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_editorial`
--

CREATE TABLE `usuarios_editorial` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `edad` int NOT NULL,
  `tipo_empleado` enum('admin','editor','invitado') NOT NULL DEFAULT 'invitado',
  `ip` varchar(45) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_editorial`
--

INSERT INTO `usuarios_editorial` (`id`, `nombre`, `email`, `password`, `edad`, `tipo_empleado`, `ip`, `fecha_registro`) VALUES
(1, 'Mauricio Gonzales', 'maugon@gmail.com', '$2y$10$bkNPpJbJf8BkRXF8CWU1k.BZrb64i.64V.ByWtcFlV6X3.8H3FnIC', 23, 'invitado', '149.34.244.132', '2025-09-07 19:17:53'),
(2, 'Pedro Lozoya', 'open1234@gmail.com', '$2y$10$Hxhmd1dj05uaTwiFqWIZMufyE9zOKxj/EfruHwt7kP.997cdo/Kpm', 42, 'editor', '149.34.244.132', '2025-09-07 19:26:54'),
(3, 'Vanessa Reyes', 'lavane17@gmail.com', '$2y$10$uYeA.lbhCSNDNtSsSQMj7.U.S/vuTpWx7jmITuMPOb.4EDgdU.Gk.', 34, 'admin', '149.34.244.132', '2025-09-07 19:29:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios_editorial`
--
ALTER TABLE `usuarios_editorial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios_editorial`
--
ALTER TABLE `usuarios_editorial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
