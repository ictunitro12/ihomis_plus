ALTER TABLE hperson
ADD hipgroup varchar(5);

CREATE TABLE hipgroup(
	ipcode varchar(5) NOT NULL,
	ipdesc varchar(255) NOT NULL,
	ipstat varchar(1) NULL,
	updsw varchar(1) NULL,
	iplock varchar(1) NULL,
	datemod datetime NOT NULL,
PRIMARY KEY (ipcode)
);

INSERT INTO HIPGROUP
(ipcode, ipdesc, ipstat, updsw, iplock, datemod)
VALUES
('1', 'Aetas', 'A', '', '', CURDATE()),
('2', 'Ati', 'A', '', '', CURDATE()),
('3', 'Badjaos', 'A', '', '', CURDATE()),
('4', 'Batak', 'A', '', '', CURDATE()),
('5', 'Blaan', 'A', '', '', CURDATE()),
('6', 'Bontoc', 'A', '', '', CURDATE()),
('7', 'Bukidnon', 'A', '', '', CURDATE()),
('8', 'Higaonon', 'A', '', '', CURDATE()),
('9', 'Ibaloi', 'A', '', '', CURDATE()),
('10', 'Igorot', 'A', '', '', CURDATE()),
('11', 'Ilongots', 'A', '', '', CURDATE()),
('12', 'Isnag', 'A', '', '', CURDATE()),
('13', 'Isneg', 'A', '', '', CURDATE()),
('14', 'Kalinga', 'A', '', '', CURDATE()),
('15', 'Kankanaey', 'A', '', '', CURDATE()),
('16', 'Lumad ', 'A', '', '', CURDATE()),
('17', 'Mamanwa', 'A', '', '', CURDATE()),
('18', 'Mandaya', 'A', '', '', CURDATE()),
('19', 'Mangyan', 'A', '', '', CURDATE()),
('20', 'Manobo', 'A', '', '', CURDATE()),
('21', 'Mansaka', 'A', '', '', CURDATE()),
('22', 'Palawano', 'A', '', '', CURDATE()),
('23', 'Palaweño', 'A', '', '', CURDATE()),
('24', 'Sangir', 'A', '', '', CURDATE()),
('25', 'Subanen', 'A', '', '', CURDATE()),
('26', 'T’boli', 'A', '', '', CURDATE()),
('27', 'Tagabawa', 'A', '', '', CURDATE()),
('28', 'Tagakaulo', 'A', '', '', CURDATE()),
('29', 'Tagbanwa', 'A', '', '', CURDATE()),
('30', 'Tasaday', 'A', '', '', CURDATE()),
('31', 'Tinguian', 'A', '', '', CURDATE()),
('32', 'Tumandok', 'A', '', '', CURDATE()),
('33', 'Others', 'A', '', '', CURDATE());
