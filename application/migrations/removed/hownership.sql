
CREATE TABLE IF NOT EXISTS `hownership` (
  `howner_code` varchar(10) NOT NULL,
  `howner_name` varchar(50) DEFAULT NULL,
  `howner_desc` varchar(250) DEFAULT NULL,
  `hownerstat` char(1) DEFAULT NULL,
  `hownerlock` char(1) DEFAULT NULL,
  `datemod` datetime DEFAULT NULL,
  `updsw` char(1) DEFAULT NULL,
  PRIMARY KEY (`howner_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hospital_dbo.hownership: ~14 rows (approximately)
/*!40000 ALTER TABLE `hownership` DISABLE KEYS */;
INSERT INTO `hownership` (`howner_code`, `howner_name`, `howner_desc`, `hownerstat`, `hownerlock`, `datemod`, `updsw`) VALUES
	('GAFP', 'Government - DND-AFP', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GDILG', 'Government - DILG-PNP', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GDND', 'DND', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GDOH', 'Government-National-DOH Retained/ Renationalized', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GDOJ', 'Government - DOJ', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GLOCC', 'Government - Local(City)', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GLOCD', 'Government - Local(District)', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GLOCP', 'Government - Local(Province)', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('GOTH', 'Government - Others', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('PCO', 'Private - Civic Organization', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('PF', 'Private - Foundation', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('PO', 'Private - Others', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('PR', 'Private-Religious', '', 'A', 'N', '2018-01-01 00:00:00', 'P'),
	('PSPPC', 'Private - Single Proprietorship/Partnership/Corp', '', 'A', 'N', '2018-01-01 00:00:00', 'P');

