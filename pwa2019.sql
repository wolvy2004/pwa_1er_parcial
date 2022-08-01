-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: BBDD:3306
-- Generation Time: Aug 01, 2022 at 03:15 PM
-- Server version: 5.7.27
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwa2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cod_mostrar` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calificacion`
--

INSERT INTO `calificacion` (`id`, `descripcion`, `cod_mostrar`) VALUES
(1, 'Solo apta para mayores de 13', 'A13'),
(2, 'Apta todo publico', 'ATP'),
(3, 'Solo apta para mayores de 16', 'A16'),
(4, 'Solo apta para mayores de 18', 'A18'),
(5, 'Solo apta para mayores de 7', 'A+7');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id`, `descripcion`) VALUES
(6, 'Accion'),
(2, 'Ciencia Ficcion'),
(4, 'Comedia'),
(3, 'Documental'),
(1, 'Drama'),
(5, 'Terror');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1659221204),
('m220727_234601_create_genero_table', 1659221206),
('m220728_003855_create_calificacion_table', 1659221206),
('m220728_004412_create_pais_table', 1659221206),
('m220728_004434_create_movie_table', 1659221207),
('m220728_043242_create_usuario_table', 1659221207);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `director` varchar(100) DEFAULT NULL,
  `actores` text,
  `genero_id` int(11) DEFAULT NULL,
  `calificacion_id` int(11) DEFAULT NULL,
  `image` text,
  `origen` int(4) DEFAULT NULL,
  `duracion` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `titulo`, `director`, `actores`, `genero_id`, `calificacion_id`, `image`, `origen`, `duracion`) VALUES
(1, 'Metegol', 'Campanella', 'pablo rago', 4, 2, '', 1, 85),
(2, 'Danza Con lobos', 'Kevin Costner', '', 1, 1, '', 1, 90),
(3, 'Danza Con lobos 2', 'Kevin Costner', '', 1, 1, '', 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `cod`) VALUES
(1, 'Argentina', 'AR'),
(2, 'Estados Unidos', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `accessToken` varchar(255) DEFAULT NULL,
  `authKey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `username`, `password`, `accessToken`, `authKey`) VALUES
(1, 'Ana Luz', 'analuz@gmail.com', 'aguerra', '$2y$10$plpKZp.76prWuE4oXkEw8.qVyrHSIcSWJv7Zsa/yzKHUJZv66Wv6S', '$2y$10$kkzN8ner/a.ZDexewdihiOi4rQ/6l0GupbYdBKjRdf75.TdzQHoq.', '8a2afb4ac72257c43a043a33215e2bd7'),
(2, 'Eduardo Guerra', 'eguerra@gmail.com', 'Eguerra', '$2y$10$yOEiWfDqS5oChlAxELERSOTwNzFYA7hGZ8Tz4mGPr3PkiLT9ygnTC', '$2y$10$rInBAQ4BqAqf4kGe9VuHieXs2JQ1zjC9bKX.uIoQ1UDRdLY04UQgK', '595d728051fddd46237ef6d908adb5f4'),
(3, 'Cesar Meloni', 'cesar@gmail.com', 'cmeloni', '$2y$10$ZrYfPLXG2yNXwn21Xk0aQ.6bsD55AFCjaCtNuW/PqqJPDR2Pw0Abm', '$2y$10$IPx8Ae8yWiOX4WePoFrLDex.82mOxLWOjdaUuhPHhOIMLCSeQdhe6', 'c8efb31929b87c4911431f69b5233801');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD KEY `idx-movie-genero` (`genero_id`),
  ADD KEY `idx-movie-calificacion` (`calificacion_id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `fk-movie-calificacion` FOREIGN KEY (`calificacion_id`) REFERENCES `calificacion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-movie-genero` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
