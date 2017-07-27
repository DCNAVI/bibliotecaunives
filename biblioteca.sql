-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 23:34:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`) VALUES
('125', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libros` varchar(25) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `id_autor` varchar(25) NOT NULL,
  `id_categoria` varchar(25) NOT NULL,
  `fechadepublicacion` varchar(25) NOT NULL,
  `id_editorial` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `titulo`, `id_autor`, `id_categoria`, `fechadepublicacion`, `id_editorial`) VALUES
('u', 'u', 'u', 'u', 'u', 'u'),
('infantiles', 'corre', 'mateo', 'infantil', '10', 'santilla'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('AdministraciÃ³n e igenier', 'Similacion  de sistemas', 'Francisco Garcia', 'Sistemas informÃ¡ticas', '2005', 'Veronica Estrada'),
('book2', 'Los Dilemas de Karel', 'Edgar Alfredo DueÃ±ez', 'Matematicas', '2006', 'CIMAT'),
('book3', 'Personal learning Environ', 'Jesse Russell', 'Programacion', '2012', 'Pubmix'),
('book4', 'Una Mirada a la Cinetica ', 'Faustino Sanches', 'Matematicas Y Quimica', '2004', 'Sociedad MatemÃ¡tica Mexi'),
('book5', 'Introduccion a la Bioinfo', 'Teresa K. Attwood', 'Biologia', '2002', 'Prentice Hall'),
('book6', 'La Educacion Superior en ', 'Humberto MuÃ±os', 'Sociedad', '2004', 'Cuadernos del Seminario 1'),
('book7', 'Domine Joomla Manual Prac', 'Antonio Menchen', 'diseÃ±o web', '2013', 'Alfaomega Ra-Ma'),
('book8', 'SimulaciÃ³n un Enfoque Pr', 'Raul Coss Bu', 'Formulas Matematicas', '2008', 'Limusa'),
('book9', 'Lubricacion Tecnica Maqui', 'Saul Soto Molina', 'Maquinaria', '2005', 'Trillas'),
('book10', 'Fundamentos de Programaci', 'Jose Alfredo Jimenez', 'Diagrama de Flujo ', '2014', 'Alfaomega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamos` varchar(25) NOT NULL,
  `id_libros` varchar(25) NOT NULL,
  `fechadesalida` varchar(25) NOT NULL,
  `fechadeentrada` varchar(25) NOT NULL,
  `id_usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `fechadenacimiento`, `sexo`, `correo`, `direccion`, `pass`) VALUES
(1, 'juan', '0000-00-00', 'a', 'a', 'a', 'juan'),
(2, 'a', '0000-00-00', 'a', 'a', 'a', 'a'),
(3, 'o', '0000-00-00', 'o', 'u', 'o', 'ooo'),
(4, 'q', '0000-00-00', 'q', 'q', 'qq', 'e47ca7a09cf6781e296345023'),
(5, 'Yozareth', '2017-07-24', 'a', 'aa', 'aa', '47bce5c74f589f4867dbd57e9ca9f808'),
(6, '', '2017-07-04', 'masculino', '', '', '47bce5c74f589f4867dbd57e9ca9f808'),
(7, 'luis', '2017-07-29', 'masculino', 'luis', 'camino', 'e5e9b41c8f1ad39ffb22df4a7aa7d876'),
(8, 'Janet Juliana Mendoza Veg', '1996-08-10', 'masculino', 'janet_live@hotmail.com', 'San Antonio Viborillas', '960a4dc5e97a907408dc6ee91c52579a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
