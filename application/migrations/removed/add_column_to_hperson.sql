ALTER TABLE hperson
add column bldtype VARCHAR(5) NULL,
add column henlistdte DATETIME NULL,
add column henlist VARCHAR(1) NULL,
add column pat_tin VARCHAR(12) NULL,
add column pat_unit VARCHAR(100) NULL,
add column pat_bldg VARCHAR(100) NULL,
add column pat_lot VARCHAR(50) NULL,
add column pat_subd VARCHAR(100) NULL,
add column pat_email VARCHAR(100) NULL,
add column spphicnum VARCHAR(14) NULL,
add column spbirth DATETIME NULL,
add column spsex CHAR(1) NULL,
add column fatphicnum VARCHAR(14) NULL,
add column fatbirth DATETIME NULL,
add column fatdisable CHAR(1) NULL,
add column motphicnum VARCHAR(14) NULL,
add column motbirth DATETIME NULL,
add column motdisable CHAR(1) NULL,
add column hipgroup VARCHAR(20) NULL,
add column Client_DOHID VARCHAR(18) NULL;

ALTER TABLE hopdlog
ADD column opdpregstat CHAR(1) NULL;