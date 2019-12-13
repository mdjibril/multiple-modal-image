-- Database: `imagemodal`

-- Table structure for table `imagetb`
CREATE TABLE `imagetb` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(200) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `imagetb`
INSERT INTO `imagetb` (`imageId`, `imageName`) VALUES
(1, 'Chrysanthemum'),
(2, 'Lighthouse'),
(3, 'Desert'),
(4, 'Hydrangeas');
