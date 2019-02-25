-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql106.unaux.com
-- Generation Time: Feb 25, 2019 at 02:32 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unaux_23484127_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorties`
--

CREATE TABLE IF NOT EXISTS `favorties` (
  `Fav_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Movie_ID` int(11) NOT NULL,
  PRIMARY KEY (`Fav_ID`),
  UNIQUE KEY `Movie_ID` (`Movie_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `favorties`
--

INSERT INTO `favorties` (`Fav_ID`, `Movie_ID`) VALUES
(52, 480530),
(51, 9323),
(46, 315837),
(66, 324857),
(62, 122917),
(63, 1362),
(64, 68728);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `M_id` int(11) NOT NULL AUTO_INCREMENT,
  `Movie_ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Poster` text,
  `Movie_Description` text,
  `Geners` text,
  PRIMARY KEY (`M_id`),
  UNIQUE KEY `Movie_ID` (`Movie_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`M_id`, `Movie_ID`, `Name`, `Poster`, `Movie_Description`, `Geners`) VALUES
(116, 324857, 'Spider-Man: Into the Spider-Verse', '/iiZZdoQBEYBv6id8su7ImL0oCbD.jpg', 'Miles Morales is juggling his life between being a high school student and being a spider-man. When Wilson ', 'Action'),
(95, 4192, 'Death on the Nile (1978)', 'http://image.tmdb.org/t/p/w300/j58X2xzDjrHBk6VzRIfHNPYtgub.jpg', NULL, NULL),
(96, 10303, 'The Jewel of the Nile (1985)', 'http://image.tmdb.org/t/p/w300/gz4ytKq2oHi040GEakUszYXmOrJ.jpg', NULL, NULL),
(97, 428495, 'The Nile Hilton Incident (2017)', 'http://image.tmdb.org/t/p/w300/mF1JKUX513VAvA6MeCvw9sPMDrP.jpg', NULL, NULL),
(98, 42432, 'Christmas on the Nile (2002)', 'http://image.tmdb.org/t/p/w300/XrRzgUl95BymMdpwwE69vo3lFw.jpg', NULL, NULL),
(99, 583890, 'Death on the Nile', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(100, 57418, 'Birds of the Nile (2010)', 'http://image.tmdb.org/t/p/w300/fQVFE6bbt42xMBvLmIPZcXfh0RT.jpg', NULL, NULL),
(101, 114771, 'Serpent of the Nile (1953)', 'http://image.tmdb.org/t/p/w300/10XXISSWjGfxtf5UAKs2rbs6o5P.jpg', NULL, NULL),
(102, 226565, 'Nile Perch (2013)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(103, 253458, 'Adrift on the Nile (1971)', 'http://image.tmdb.org/t/p/w300/Af3AmcX3tO9aUIaGhvsf6bfoBce.jpg', NULL, NULL),
(104, 200386, 'Princess of the Nile (1954)', 'http://image.tmdb.org/t/p/w300/7ZSfjvYeUikdeip1Y75QMRtIWQp.jpg', NULL, NULL),
(105, 505026, 'Death on the Nile (2020)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(106, 76238, 'Struggle on the Nile (1959)', 'http://image.tmdb.org/t/p/w300/bRx4a0o2lDQEnuojGt9QpKmxk1J.jpg', NULL, NULL),
(107, 329463, 'Blood on the Nile (1961)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(108, 414010, 'Bride of the Nile (1963)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(109, 332033, 'Pearl of the Nile (1972)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(110, 13431, 'Mystery of the Nile (2005)', 'http://image.tmdb.org/t/p/w300/6ybedDhQb4gIjjPMFvUnqiyfWw9.jpg', NULL, NULL),
(111, 571404, 'Legend of Nile (2008)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(112, 76269, 'Storm Over the Nile (1955)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(113, 228946, 'Nile Rodgers: The Hitmaker (2013)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL),
(114, 576059, 'Nile: River of Gods (1995)', '/MyMovies1/image/no-gambar.jpg', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
