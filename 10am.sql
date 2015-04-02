-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 02:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `10am`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`draft_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draft_id`, `user_id`, `sub`, `attach`, `msg`, `date`) VALUES
(1, 'hema', 'hiiiiiii', 'Winter.jpg', 'hiiiiiiiiiiii', '0000-00-00'),
(2, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(3, 'hema', 'my pics', 'Sunset.jpg', 'this is my pics', '0000-00-00'),
(4, 'hema', 'abhi', 'Water lilies.jpg', 'hhhhhhhhhhhhh', '2013-06-09'),
(5, 'abhishek', 'my resume ', '', 'this is my resume format..........', '2013-06-13'),
(6, 'dd', 'ssdd', 'web.docx', 'tfsgfdghodljoi', '2015-03-13'),
(7, 'muthu', 'dfhgkdf', '2014-08-17 11.00.54.jpg', 'rftsdryujtuyru', '2015-03-13'),
(8, 'dd', 'ffdhjgkjlkjl;ul', 'CARGO MANAGEMENT SYSTEM - ABSTRACT.docx', 'zcvj,hjlk;', '2015-03-14'),
(9, 'dd', 'dtfyu', 'odbcprog.doc', 'stuguyiyo', '2015-03-14'),
(10, 'dd', 'areshy', '', 'edryr', '2015-03-14'),
(11, 'dd', 'asdszgzxh', 'ch16[1] (1).ppt', 'fsdhdjg', '2015-03-16'),
(12, 'dd', 'HGFJHHGJ', '', 'FJHKJM', '2015-03-16'),
(13, 'dharanipreetha', 'ddddd', '', 'dstghysjh', '2015-03-16'),
(14, 'snega', 'super market', '8255.pptx', 'read', '2015-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `imagepath`) VALUES
(1, 'Winter.jpg'),
(2, 'Winter.jpg'),
(3, 'Blue hills.jpg'),
(4, 'Winter.jpg'),
(5, ''),
(6, 'Winter.jpg'),
(7, 'Winter.jpg'),
(8, 'Winter.jpg'),
(9, 'Winter.jpg'),
(10, 'Sunset.jpg'),
(11, 'Water lilies.jpg'),
(12, 'Sunset.jpg'),
(13, 'Sunset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestupd`
--

CREATE TABLE IF NOT EXISTS `latestupd` (
  `upd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`upd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(1, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(2, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(3, 'resue', 'resume......', 'Winter.jpg', '2013-06-13'),
(4, 'lkjlj', 'khkjhkh', '', '2013-06-13'),
(5, 'jjjjjjjjj', 'kkkkkkkkkkk', 'Water lilies.jpg', '2013-06-13'),
(6, 'dfhgfjjkg', 'dfhrj', '1982045_730860393615394_369422188_n.jpg', '2015-03-13'),
(7, 'picture', 'pic', 'autosave.jpg', '2015-03-16'),
(8, 'picture', 'flower', 'Tulips.jpg', '2015-03-16'),
(9, 'picture', 'flower', 'images (1).jpg', '2015-03-16'),
(10, 'picture', 'flower', 'Tulips.jpg', '2015-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachement` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `draft`, `trash`, `attachement`, `msgdate`) VALUES
(1, 'deepika', 'prabhat', 'hello', 'hello deepika', '', '', '', ''),
(2, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(3, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(4, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(5, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(6, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(7, 'prabhat', '', 'my resume', '', 'dkljfldjlf', '', '', ''),
(8, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 10:57:47'),
(9, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 11:00:13'),
(10, 'rexx', 'prabhat', 'hello', 'hello', '', '', '', '2013-03-03 11:01:22'),
(11, 'rexx', 'prabhat', 'welll', 'welcome.rexx........', '', '', '', '2013-03-03 11:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_jd` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`user_jd`),
  UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  KEY `gender` (`gender`,`dob`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `hobbies`, `dob`, `image`) VALUES
(1, 'hema', 'hema123', 222222, '', 'f', 'reading', '1902-03-04', 'Blue hills.jpg'),
(2, 'mehak', 'mehak', 11111, 'mehak@gmail.com', 'f', 'cricket,football', '1917-11-16', ''),
(3, 'sanjeev', 'sanjeev', 55578857878, 'sanjeev@yahoo.com', 'm', 'cricket,football', '0000-00-00', ''),
(4, 'dfdfdfd', 'fdf', 0, 'dfdfd@gmail.lcom', 'm', 'cricket', '0000-00-00', ''),
(5, 'satish@gmail.com', 'satish', 45444, 'sanjeev@yahoo.com', 'm', 'cricket,football', '1902-04-04', 'Winter.jpg'),
(6, 'xyz', 'xyz111', 444444, 'xyz@gmail.com', 'm', 'cricket,football', '1901-04-04', 'Blue hills.jpg'),
(7, 'ravi', 'ravi111', 44444444, 'ravi@gmail.com', 'm', 'cricket,football', '1901-03-03', 'Winter.jpg'),
(8, 'abhishek', 'abhi', 888888888, 'abhishek@gmail.com', 'm', 'cricket,football', '1915-10-16', 'Sunset.jpg'),
(9, 'muthu', 'dd', 988765432, 'muthu2345@gmail.com', 'm', 'cricket', '1917-01-19', '2014-08-05 18.46.05.jpg'),
(10, 'qwert', 'qwert', 988765432, 'muthu2345@gmail.com', 'm', 'cricket', '1918-12-17', ''),
(11, 'muthudfdshf', 'poiuyt', 988765432, 'muthu2345@gmail.com', 'm', 'cricket', '1934-11-18', 'Hydrangeas.jpg'),
(12, 'muthudfdshfkhg', 'mjtrdsdgh', 988765432, 'muthu2345@gmail.com', 'm', 'cricket', '1916-01-17', 'Penguins.jpg'),
(15, 'dharanipreetha', 'rama', 9994090182, 'dharanipreetha10@gmail.com', 'f', '', '1995-06-10', 'Tulip.jpg'),
(14, 'dd', 'dd', 123457891, 'dharanipreetha10@gmail.com', 'f', 'reading', '1914-05-14', 'dd(2).jpg'),
(16, 'amutha', 'amutha', 9445555569, 'amutha@gmail.com', '', '', '1995-05-02', 'images (1).jpg'),
(17, 'abi', 'abi', 9677673312, 'abiram@yahoo.com', '', '', '1936-10-17', 'DSC_0090.jpg'),
(18, 'RR', 'RE', 0, 'DD@GMAIL', '', '', '0000-00-00', ''),
(19, 'ddd', 'ddd', 123444555, 'DD@GMAIL', '', '', '1917-11-18', ''),
(20, 'kaviya', 'kaviya', 9768678234, 'kaviya@gmail.com', '', '', '1995-06-03', 'Chrysanthemum.jpg'),
(21, 'lakshmi', 'l', 5678867868, 'lakshmi@gmail.com', '', '', '1917-11-17', 'Tulips.jpg'),
(22, 'dhivi', 'dhivi', 4567887668, 'dhivi@mail.com', '', '', '1918-11-18', 'Hydrangeas.jpg'),
(23, 'snega', 'sn', 8765993422, 'snega@mail.com', '', '', '1918-11-18', 'Hydrangeas.jpg'),
(24, 'veera', 'veera', 3454678989, 'veera@mail.com', '', '', '1918-12-19', '10502495_10152598270572592_2645333398786416154_n.jpg'),
(25, 'sundhar', 'sundhar', 4555667788, 'sundhar@mail.com', '', '', '1918-11-19', 'images (1).jpg'),
(26, 'ash', 'ash', 4556576896, 'ash@gmail.com', '', '', '1980-12-19', 'images (2).jpg'),
(27, 'dha', 'dha', 6879897876, 'dha@mail.com', '', '', '1916-11-18', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE IF NOT EXISTS `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `sub` char(30) NOT NULL,
  `msg` text NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(2, 'deep', 'ravi', 'hello', 'hello deep hows you?......', '', '2013-03-05'),
(3, 'ravi', 'ravi', 'welcome--msg failed', 'dljfldjfldj', '', '2013-03-05'),
(4, 'prabhat', 'ravi', 'hiiiii', 'hii prabhat.........', '', '2013-03-06'),
(5, 'prabhat', 'ravi', 'docs', 'project docs.............', '', '2013-03-06'),
(7, 'ravi', 'hema', 'hello', 'hello ravi', '', '2013-06-09'),
(50, 'dharanipreetha', 'lakshmi', 'hgdfjadhgj', 'szdv', 'Supermarket-Management-System.docx', '2015-03-16'),
(58, 'kaviya', 'dharanipreetha', 'notes', 'read', '03-130918113118-phpapp02.ppt', '2015-03-16'),
(56, 'dharanipreetha', 'ash', 'dfhhvj', 'xxfgcgfch', '8255 1.pptx', '2015-03-16'),
(57, 'dd', 'dharanipreetha', 'notes', 'read ', '03-130918113118-phpapp02.ppt', '2015-03-16'),
(36, 'dd', 'dharanipreetha', 'gdsigtrlky;', 'asasrgedtydruru', 'ch16[1] (1).ppt', '2015-03-15'),
(47, 'dharanipreetha', 'dd', 'sdsd', 'sfdsdfg', '', '2015-03-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
