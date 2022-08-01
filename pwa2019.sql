
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


INSERT INTO `calificacion` (`id`, `descripcion`, `cod_mostrar`) VALUES
(1, 'Solo apta para mayores de 13', 'A13'),
(2, 'Apta todo publico', 'ATP'),
(3, 'Solo apta para mayores de 16', 'A16'),
(4, 'Solo apta para mayores de 18', 'A18'),
(5, 'Solo apta para mayores de 7', 'A+7');


INSERT INTO `genero` (`id`, `descripcion`) VALUES
(6, 'Accion'),
(2, 'Ciencia Ficcion'),
(4, 'Comedia'),
(3, 'Documental'),
(1, 'Drama'),
(5, 'Terror');


INSERT INTO `movie` (`id`, `titulo`, `director`, `actores`, `genero_id`, `calificacion_id`, `image`, `origen`, `duracion`) VALUES
(1, 'Metegol', 'Campanella', 'pablo rago', 4, 2, '', 1, 85),
(2, 'Danza Con lobos', 'Kevin Costner', '', 1, 1, '', 1, 90),
(3, 'Danza Con lobos 2', 'Kevin Costner', '', 1, 1, '', 1, 90);


CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `pais` (`id`, `nombre`, `cod`) VALUES
(1, 'Argentina', 'AR'),
(2, 'Estados Unidos', 'USA');



INSERT INTO `usuario` (`id`, `nombre`, `email`, `username`, `password`, `accessToken`, `authKey`) VALUES
(1, 'Ana Luz', 'analuz@gmail.com', 'aguerra', '$2y$10$plpKZp.76prWuE4oXkEw8.qVyrHSIcSWJv7Zsa/yzKHUJZv66Wv6S', '$2y$10$kkzN8ner/a.ZDexewdihiOi4rQ/6l0GupbYdBKjRdf75.TdzQHoq.', '8a2afb4ac72257c43a043a33215e2bd7'),
(2, 'Eduardo Guerra', 'eguerra@gmail.com', 'Eguerra', '$2y$10$yOEiWfDqS5oChlAxELERSOTwNzFYA7hGZ8Tz4mGPr3PkiLT9ygnTC', '$2y$10$rInBAQ4BqAqf4kGe9VuHieXs2JQ1zjC9bKX.uIoQ1UDRdLY04UQgK', '595d728051fddd46237ef6d908adb5f4'),
(3, 'Cesar Meloni', 'cesar@gmail.com', 'cmeloni', '$2y$10$ZrYfPLXG2yNXwn21Xk0aQ.6bsD55AFCjaCtNuW/PqqJPDR2Pw0Abm', '$2y$10$IPx8Ae8yWiOX4WePoFrLDex.82mOxLWOjdaUuhPHhOIMLCSeQdhe6', 'c8efb31929b87c4911431f69b5233801');

