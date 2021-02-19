-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 09:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`uid`, `username`, `password`) VALUES
(1, 'e', 'e'),
(2, 'egzon', 'egzon');

-- --------------------------------------------------------

--
-- Table structure for table `containertwo`
--

CREATE TABLE `containertwo` (
  `id_contwo` int(11) NOT NULL,
  `contwo_title` varchar(50) NOT NULL,
  `contwo_description` varchar(500) NOT NULL,
  `contwo_pic` varchar(50) NOT NULL,
  `layout` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `containertwo`
--

INSERT INTO `containertwo` (`id_contwo`, `contwo_title`, `contwo_description`, `contwo_pic`, `layout`) VALUES
(1, 'MySQL', 'MySQL is a freely available open source Relational Database Management System (RDBMS) that uses Structured Query Language (SQL). SQL is the most popular language for adding, accessing and managing content in a database. It is most noted for its quick processing, proven reliability, ease and flexibility of use.', 'mysql.png', 'skills'),
(2, 'PHP', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.\r\n\r\nPHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.\r\n\r\nPHP 7 is the latest stable release.', 'php.jpg', 'skills'),
(3, 'HTML/CSS/JS', 'HTML provides the basic structure of sites, which is enhanced and modified by other technologies like CSS and JavaScript. CSS is used to control presentation, formatting, and layout. JavaScript is used to control the behavior of different elements.\r\n', 'html-css-js.jpg', 'skills'),
(4, 'Dental clinic', 'This project was made for a dental clinic which i named it EgzonSherifi Dent. The programming language that i used to built this web application also was PHP.', 'eshdent.png', 'projects'),
(5, 'Barber shop', 'This web application was my first project that i built with PHP programming language.  The purpose of this project was to create a web application for a barber shop to make it easier for clients to schedule their appointments.', 'haircuts.png', 'projects');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id_main` int(11) NOT NULL,
  `m_title` varchar(50) NOT NULL,
  `m_description` varchar(500) NOT NULL,
  `m_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id_main`, `m_title`, `m_description`, `m_pic`) VALUES
(1, 'Me', 'I am Egzon Sherifi and I\'ve recently graduated from the University \"Kadri Zeka\" in Gjilan on the Computer Science Faculty. I learned to work with HTML5, CSS3 and with some programming languages like PHP and a little bit of JS in my faculty during projects but I got more advanced skills by researching and attending courses on those specified programming languages.\r\n', 'image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_link` varchar(50) NOT NULL,
  `menu_module` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu_name`, `menu_link`, `menu_module`) VALUES
(1, 'Me', 'index.php', 'ModuliPerdoruesit'),
(2, 'Skills', 'index.php#skills', 'ModuliPerdoruesit'),
(3, 'Projects', 'index.php#projects', 'ModuliPerdoruesit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `containertwo`
--
ALTER TABLE `containertwo`
  ADD PRIMARY KEY (`id_contwo`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `containertwo`
--
ALTER TABLE `containertwo`
  MODIFY `id_contwo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
