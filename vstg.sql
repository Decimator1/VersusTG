-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 07:12 PM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vstg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
`itemid` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `rule_text` text NOT NULL,
  `flavor_text` text NOT NULL,
  `mana_cost` varchar(20) NOT NULL,
  `card_set` varchar(255) NOT NULL,
  `card_condition` varchar(20) NOT NULL,
  `rarity` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cards table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `ship_date` datetime NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `to_state` varchar(2) NOT NULL,
  `to_street` varchar(255) NOT NULL,
  `to_zip` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders2items`
--

CREATE TABLE IF NOT EXISTS `orders2items` (
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='blog posts' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'Test Post', 'Ignore please', '2015-03-07 17:43:53', '2015-03-07 17:43:53'),
(2, 'another test', 'let''s do this', '2015-03-07 17:58:13', '2015-03-07 17:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
`tournament_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL COMMENT 'stand/leg/vin/etc',
  `tournament_date` datetime NOT NULL,
  `max_entries` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tournaments2users`
--

CREATE TABLE IF NOT EXISTS `tournaments2users` (
  `userid` int(11) NOT NULL,
  `tournamentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `group_id` int(2) NOT NULL COMMENT '1-Admin, 2-Super, 3-Reg',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Users table' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fname`, `lname`, `address`, `phone`, `group_id`, `created`, `modified`) VALUES
(1, 'IWillScoop', 'peetee90', 'juliusmedranoo@gmail.com', 'Julius', 'Medrano', '1010 Address St.', 2099864431, 0, '2015-03-31 20:12:50', '2015-03-31 20:12:50'),
(2, 'testaccount', '$2a$10$fYirrsjrhqp15lO2yOfe9usUV3VnchR8INlkTNwceR/X1.EZLYKVW', 'test@test.com', 'j', 'man', '1010 Address St.', 2099864431, 0, '2015-04-04 20:23:29', '2015-04-04 20:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
 ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders2items`
--
ALTER TABLE `orders2items`
 ADD PRIMARY KEY (`orderid`,`itemid`), ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
 ADD PRIMARY KEY (`tournament_id`);

--
-- Indexes for table `tournaments2users`
--
ALTER TABLE `tournaments2users`
 ADD PRIMARY KEY (`userid`,`tournamentid`), ADD KEY `tournamentid` (`tournamentid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders2items`
--
ALTER TABLE `orders2items`
ADD CONSTRAINT `orders2items_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `orders2items_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `cards` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tournaments2users`
--
ALTER TABLE `tournaments2users`
ADD CONSTRAINT `tournaments2users_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tournaments2users_ibfk_2` FOREIGN KEY (`tournamentid`) REFERENCES `tournaments` (`tournament_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
