
--
-- Database: 'mmartworkdb'
--

-- --------------------------------------------------------

--
-- Table structure for table 'artist_table'
--

DROP TABLE IF EXISTS [artist_table];
CREATE TABLE IF NOT EXISTS [artist_table] (
  'ArtistID' int(11) NOT NULL AUTO_INCREMENT,
  'Name' varchar(50) NOT NULL,
  'Date Of Birth' date NOT NULL,
  'Gender' varchar(6) NOT NULL,
  'Thumbnail' blob,
  PRIMARY KEY ('ArtistID')
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'artwork_table'
--

DROP TABLE IF EXISTS [artwork_table];
CREATE TABLE IF NOT EXISTS [artwork_table] (
  'ArtworkID' int(11) NOT NULL AUTO_INCREMENT,
  'Art Name' varchar(50) NOT NULL,
  'Artist' varchar(50) NOT NULL,
  'Price' decimal(6,2) NOT NULL,
  'Picture' blob NOT NULL,
  PRIMARY KEY ('ArtworkID')
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'image_table'
--

DROP TABLE IF EXISTS [image_table];
CREATE TABLE IF NOT EXISTS [image_table] (
  'ImageID' int(11) NOT NULL AUTO_INCREMENT,
  'image URL' varchar(200) NOT NULL,
  'Thumbnail' blob NOT NULL,
  PRIMARY KEY (`ImageID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
