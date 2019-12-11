-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 02:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutri`
--

-- --------------------------------------------------------

--
-- Table structure for table `acciones`
--

CREATE TABLE `acciones` (
  `id_acciones` int(11) NOT NULL,
  `datos_personales` int(11) NOT NULL,
  `datos_usuarios` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `id_personales` int(10) NOT NULL,
  `fecha_paciente` date NOT NULL,
  `estatura_paciente` float NOT NULL,
  `peso_paciente` float NOT NULL,
  `imc_paciente` float NOT NULL,
  `categoria_paciente` varchar(80) NOT NULL,
  `datos_persona` int(11) NOT NULL,
  `datos_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_persona` int(11) NOT NULL,
  `dni_persona` int(12) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `edad_persona` int(4) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `pais_proced` varchar(100) NOT NULL,
  `ciudad_proced` varchar(100) NOT NULL,
  `celular_cont` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_personales`
--

INSERT INTO `datos_personales` (`id_persona`, `dni_persona`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `edad_persona`, `estado_civil`, `sexo`, `pais_proced`, `ciudad_proced`, `celular_cont`) VALUES
(3, 1450130008, 'Danis', 'Ignacio', 'Manchu', 'Tumink', 21, 'Soltero/a', 'Masculino', 'Ecuador', 'Macas', 997250045),
(4, 1450130006, 'Mercy', 'Clelia', 'Manchu', 'Tumink', 20, 'Casado/a', 'Femenino', 'Ecuador', 'Taisha', 999785469),
(5, 210081155, 'Darwin', 'Enrique', 'Cacay', 'Espinoza', 29, 'Soltero/a', 'Masculino', 'Ecuador', 'Lago Agrio', 98282987);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `codigo_prod` varchar(45) NOT NULL,
  `nombre_prod` varchar(100) NOT NULL,
  `descrip_prod` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_prod`, `codigo_prod`, `nombre_prod`, `descrip_prod`) VALUES
(1, '000101', 'nutri', 'Fortalecimiento de los huesos y de las calulas'),
(2, '000202', 'nutri', 'Para fortalecimiento'),
(3, '000303', 'nutri', 'Para fortalecmiento'),
(4, '000404', 'Nutri-2019', 'Para fortalecmiento de los huesos'),
(5, '000505', 'nutri', 'Para fortalecimiento de los huesos');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usua` int(11) NOT NULL,
  `cedula_usua` int(10) NOT NULL,
  `nombre_usua` varchar(50) NOT NULL,
  `apellido_usua` varchar(50) NOT NULL,
  `email_usua` varchar(80) NOT NULL,
  `carrera_usua` varchar(80) NOT NULL,
  `usuario_usua` varchar(50) NOT NULL,
  `password_usua` varchar(300) NOT NULL,
  `agree` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usua`, `cedula_usua`, `nombre_usua`, `apellido_usua`, `email_usua`, `carrera_usua`, `usuario_usua`, `password_usua`, `agree`) VALUES
(1, 1450130008, 'Danis', 'Manchu', 'danis.manchu@itsae.edu.ec', 'Sistemas', '@ignacio1998', 'c5b2cebf15b205503560c4e8e6d1ea78', 'on'),
(2, 1450134509, 'Daniel', 'Machado', 'danie.manchado@itsae.edu.ec', 'Enfermeria', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_acciones`),
  ADD KEY `datos_personales` (`datos_personales`,`datos_usuarios`);

--
-- Indexes for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `datos_persona` (`datos_persona`),
  ADD KEY `datos_producto` (`datos_producto`);

--
-- Indexes for table `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD UNIQUE KEY `codigo_prod` (`codigo_prod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usua`),
  ADD UNIQUE KEY `cedula_usua` (`cedula_usua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_acciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `acciones_ibfk_1` FOREIGN KEY (`datos_personales`) REFERENCES `datos_personales` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
