SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `lookuptable`;
CREATE TABLE IF NOT EXISTS `lookuptable` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(10) NOT NULL,
  `ParentCode` varchar(10) DEFAULT NULL,
  `Code` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `lookuptableview`;
CREATE TABLE IF NOT EXISTS `lookuptableview` (
  `Type` varchar(10) DEFAULT NULL,
  `ParentCode` varchar(10) DEFAULT NULL,
  `ParentDesc` varchar(50) DEFAULT NULL,
  `Code` varchar(10) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `nick_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `Privileges` int(11) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `members` (`id`, `name`, `nick_name`, `email`, `password`, `Privileges`, `Timestamp`) VALUES
(1, 'KKK', NULL, 'kkk@test', '28ce7cc8cffb8ad07472fd8cfe373639', 1, '2018-11-01 23:30:53'),
(2, 'rare@dice', NULL, 'rare@dice', '791b1df3d28adfd8be24dce9153c03e6', 2, '2018-11-02 20:18:52'),
(3, 'do@done', NULL, 'do@done', '202cb962ac59075b964b07152d234b70', 2, '2018-11-02 20:41:09');

DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) NOT NULL DEFAULT 'None',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `privileges` (`ID`, `Description`) VALUES
(0, 'None'),
(1, 'Admin'),
(2, 'Guest');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
