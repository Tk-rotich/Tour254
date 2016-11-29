-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 11:52 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `site_title`, `page_title`, `body`) VALUES
(1, 'Kenya Tours254', 'Home Page', 'jdcjv jfvjjnioos,mxpnfnvoneonvenovneninvienipew[kwnvvnekldkkvrorog\r\njswkgfglffpl,v\r\n;ppffihudndnjbnffkkmvkbemeofmjkmkcirlmjodmssswwvif\r\nnifnelkmevpvlkppdfpomvindnls\r\nwppefvnbeo;;lwa,clvme;l[efvfpdosw,x,mduwfdrm\r\nmrlddforovrppvckor[,c;ecrv;,omv;,oc cmoroov\r\n omo mrvorotkof  rlrvrpvjnfjnrrnrjnvjnjrdkmvimeo,bn,mvrtmed\r\ne[vgptppr,rprpem froorrrt\r\nrrrjrnrnnrrknnjoermfrnvrovmoempmvpofmpwm\r\nvinnv5g5rgh5h6h5mnnj\r\nngfngnjgnjnrjkenjenjgrnneneknkenkjngi\r\nuugu4fnkejnjngjtngjrenkgthtrergh\r\n\r\nkpewmpvm pepvn epvepn n '),
(2, 'Kenya Tours254', 'About Us', 'jdcjv jfvjjnioos,mxpnfnvoneonvenovneninvienipew[kwnvvnekldkkvrorog jswkgfglffpl,v ;ppffihudndnjbnffkkmvkbemeofmjkmkcirlmjodmssswwvif nifnelkmevpvlkppdfpomvindnls wppefvnbeo;;lwa,clvme;l[efvfpdosw,x,mduwfdrm mrlddforovrppvckor[,c;ecrv;,omv;,oc cmoroov omo mrvorotkof rlrvrpvjnfjnrrnrjnvjnjrdkmvimeo,bn,mvrtmed e[vgptppr,rprpem froorrrt rrrjrnrnnrrknnjoermfrnvrovmoempmvpofmpwm vinnv5g5rgh5h6h5mnnj ngfngnjgnjnrjkenjenjgrnneneknkenkjngi uugu4fnkejnjngjtngjrenkgthtrergh kpewmpvm pepvn epvepn n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
