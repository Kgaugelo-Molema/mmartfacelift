
--
-- Database: 'mmartworkdb'
--

IF DB_ID('mmartworkdb') IS NULL
	CREATE DATABASE mmartworkdb
GO

USE mmartworkdb
GO
-- --------------------------------------------------------

--
-- Table structure for table 'artist_table'
--

DROP TABLE IF EXISTS [artist_table];
CREATE TABLE [artist_table] (
  [ArtistID] int NOT NULL IDENTITY,
  [Name] varchar(50) NOT NULL,
  [Date Of Birth] date NOT NULL,
  [Gender] varchar(6) NOT NULL,
  [Thumbnail] VARBINARY(MAX),
  PRIMARY KEY ([ArtistID])
) 

-- --------------------------------------------------------

--
-- Table structure for table 'artwork_table'
--

DROP TABLE IF EXISTS [artwork_table];
CREATE TABLE [artwork_table] (
  [ArtworkID] int(11) NOT NULL IDENTITY,
  [Art Name] varchar(50) NOT NULL,
  [Artist] varchar(50) NOT NULL,
  [Price] decimal(6,2) NOT NULL,
  [Picture] VARBINARY(MAX),
  PRIMARY KEY ([ArtworkID])
) 

-- --------------------------------------------------------

--
-- Table structure for table 'image_table'
--

DROP TABLE IF EXISTS [image_table];
CREATE TABLE [image_table] (
  [ImageID] int(11) NOT NULL IDENTITY,
  [image URL] varchar(200) NOT NULL,
  [Thumbnail] VARBINARY(MAX),
  PRIMARY KEY ([ImageID])
)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
