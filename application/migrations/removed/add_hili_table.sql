CREATE TABLE `hili` (
	`enccode` VARCHAR(48) NOT NULL,
	`hpercode` VARCHAR(20) NOT NULL,
	`hfhudcode` VARCHAR(19) NOT NULL,
	`toecode` VARCHAR(5) NULL DEFAULT NULL,
	`date_seen` DATETIME NULL DEFAULT NULL,
	`date_report` DATETIME NULL DEFAULT NULL,
	`travelhistory` VARCHAR(255) NULL DEFAULT NULL,
	`member_of_IP` VARCHAR(50) NULL DEFAULT NULL,
	`admitted` VARCHAR(1) NOT NULL,
	`date_onset` DATETIME NULL DEFAULT NULL,
	`ili_ainfluenza` CHAR(1) NULL DEFAULT NULL,
	`date_vaccination` DATETIME NULL DEFAULT NULL,
	`coldte` DATETIME NULL DEFAULT NULL,
	`labor_test` VARCHAR(50) NULL DEFAULT NULL,
	`labor_result` VARCHAR(50) NULL DEFAULT NULL,
	`case_classification` VARCHAR(1) NULL DEFAULT NULL,
	`outcome` VARCHAR(1) NULL DEFAULT NULL,
	`entryby` VARCHAR(15) NOT NULL,
	`entry_date` DATETIME NOT NULL,
	`modifiedby` VARCHAR(15) NULL DEFAULT NULL,
	`date_modified` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`enccode`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
