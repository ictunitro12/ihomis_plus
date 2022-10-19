-- Dumping structure for table hospital_dbo.hspecialty
CREATE TABLE IF NOT EXISTS `hspecialty` (
  `hspecialcode` varchar(20) NOT NULL,
  `hspecial_name` varchar(50) DEFAULT NULL,
  `hspecial_desc` varchar(250) DEFAULT NULL,
  `hspecialstat` char(1) DEFAULT NULL,
  `hspecial_lock` char(1) DEFAULT NULL,
  `date_mod` datetime DEFAULT NULL,
  `updsw` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`hspecialcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hospital_dbo.hspecialty: ~4 rows (approximately)
/*!40000 ALTER TABLE `hspecialty` DISABLE KEYS */;
INSERT INTO `hspecialty` (`hspecialcode`, `hspecial_name`, `hspecial_desc`, `hspecialstat`, `hspecial_lock`, `date_mod`, `updsw`) VALUES
	('SP001', 'Disease', 'Tuberculosis', 'A', 'N', NULL, 'P'),
	('SP002', 'Organ', 'Eye', 'A', 'N', NULL, 'P'),
	('SP003', 'Patient Class', 'First Class', 'A', 'N', NULL, 'P'),
	('SP004', 'Others', 'others', 'A', 'N', NULL, 'P');
/*!40000 ALTER TABLE `hspecialty` ENABLE KEYS */;

