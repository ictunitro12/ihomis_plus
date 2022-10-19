CREATE TABLE `hsari` (
	`enccode` VARCHAR(48) NOT NULL,
	`hpercode` VARCHAR(20) NOT NULL,
	`hfhudcode` VARCHAR(19) NOT NULL,
	`toecode` VARCHAR(5) NULL DEFAULT NULL,
	`date_seen` DATETIME NULL DEFAULT NULL,
	`date_report` DATETIME NULL DEFAULT NULL,
	`date_onset` DATETIME NOT NULL,
	`entryby` VARCHAR(15) NOT NULL,
	`sari_fever` CHAR(1) NULL DEFAULT NULL,
	`duration` INT(11) NULL DEFAULT NULL,
	`sari_headache` CHAR(1) NULL DEFAULT NULL,
	`sari_cough` CHAR(1) NULL DEFAULT NULL,
	`sari_sore` CHAR(1) NULL DEFAULT NULL,
	`sari_breathing` CHAR(1) NULL DEFAULT NULL,
	`sari_hospadm1` CHAR(1) NULL DEFAULT NULL,
	`sari_others1` VARCHAR(255) NULL DEFAULT NULL,
	`imci_pneumonia1` CHAR(1) NULL DEFAULT NULL,
	`imci_pneumonia2` CHAR(1) NULL DEFAULT NULL,
	`imci_pneumonia3` CHAR(1) NULL DEFAULT NULL,
	`imci_pneumonia4` CHAR(1) NULL DEFAULT NULL,
	`sari_hospadm2` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia1` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia2` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia3` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia4` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia5` CHAR(1) NULL DEFAULT NULL,
	`imci_spneumonia6` CHAR(1) NULL DEFAULT NULL,
	`sari_hospadm3` CHAR(1) NULL DEFAULT NULL,
	`sari_pathogen` TEXT NULL,
	`sari_household` CHAR(1) NULL DEFAULT NULL,
	`sari_school` CHAR(1) NULL DEFAULT NULL,
	`sari_dcontact` CHAR(1) NULL DEFAULT NULL,
	`sari_histtravel` CHAR(1) NULL DEFAULT NULL,
	`date_travel` DATETIME NULL DEFAULT NULL,
	`date_arrival` DATETIME NULL DEFAULT NULL,
	`sari_pentry` CHAR(5) NULL DEFAULT NULL,
	`sari_country` CHAR(5) NULL DEFAULT NULL,
	`sari_flight` VARCHAR(15) NULL DEFAULT NULL,
	`sari_pexit` CHAR(5) NULL DEFAULT NULL,
	`sari_bats` CHAR(1) NULL DEFAULT NULL,
	`sari_camels` CHAR(1) NULL DEFAULT NULL,
	`sari_horses` CHAR(1) NULL DEFAULT NULL,
	`sari_poultry` CHAR(1) NULL DEFAULT NULL,
	`sari_pigs` CHAR(1) NULL DEFAULT NULL,
	`sari_others2` VARCHAR(255) NULL DEFAULT NULL,
	`sari_ainfluenza` CHAR(1) NULL DEFAULT NULL,
	`date_vaccination` DATETIME NULL DEFAULT NULL,
	`sari_others3` VARCHAR(255) NULL DEFAULT NULL,
	`sari_testinfluenza` CHAR(1) NULL DEFAULT NULL,
	`sari_virusisolation` CHAR(1) NULL DEFAULT NULL,
	`sari_others4` VARCHAR(255) NULL DEFAULT NULL,
	`sari_lineage1` CHAR(1) NULL DEFAULT NULL,
	`sari_lineagetext1` VARCHAR(255) NULL DEFAULT NULL,
	`sari_lineage_ndeter1` CHAR(1) NULL DEFAULT NULL,
	`date_released1` DATETIME NULL DEFAULT NULL,
	`sari_lineage2` CHAR(1) NULL DEFAULT NULL,
	`sari_lineagetext2` VARCHAR(255) NULL DEFAULT NULL,
	`sari_lineage_ndeter2` CHAR(1) NULL DEFAULT NULL,
	`date_released2` DATETIME NULL DEFAULT NULL,
	`sari_lineage3` CHAR(1) NULL DEFAULT NULL,
	`sari_lineagetext3` VARCHAR(255) NULL DEFAULT NULL,
	`sari_lineage_ndeter3` CHAR(1) NULL DEFAULT NULL,
	`date_released3` DATETIME NULL DEFAULT NULL,
	`date_released5` DATETIME NULL DEFAULT NULL,
	`date_released6` DATETIME NULL DEFAULT NULL,
	`date_released7` DATETIME NULL DEFAULT NULL,
	`sari_lineage4` CHAR(1) NULL DEFAULT NULL,
	`sari_lineagetext4` VARCHAR(255) NULL DEFAULT NULL,
	`sari_lineage_ndeter4` CHAR(1) NULL DEFAULT NULL,
	`date_released4` DATETIME NULL DEFAULT NULL,
	`date_released8` DATETIME NULL DEFAULT NULL,
	`date_released9` DATETIME NULL DEFAULT NULL,
	`date_released10` DATETIME NULL DEFAULT NULL,
	`sari_others5` VARCHAR(255) NULL DEFAULT NULL,
	`date_released11` DATETIME NULL DEFAULT NULL,
	`specimen_code` VARCHAR(3) NULL DEFAULT NULL,
	`member_of_IP` VARCHAR(50) NULL DEFAULT NULL,
	`influenza_A_H7N9` VARCHAR(1) NULL DEFAULT NULL,
	`influenza_A_H5N1` VARCHAR(1) NULL DEFAULT NULL,
	`influenza_A_subtype` VARCHAR(1) NULL DEFAULT NULL,
	`influenza_A_and_B` VARCHAR(1) NULL DEFAULT NULL,
	`MERS_detected` VARCHAR(1) NULL DEFAULT NULL,
	`inconclusive_test` VARCHAR(1) NULL DEFAULT NULL,
	`entry_date` DATETIME NULL DEFAULT NULL,
	`date_modified` DATETIME NULL DEFAULT NULL,
	`modified_by` VARCHAR(15) NULL DEFAULT NULL,
	`coldte` DATETIME NULL DEFAULT NULL,
	`nottested_due` VARCHAR(500) NULL DEFAULT NULL,
	`nottested_recollect` VARCHAR(500) NULL DEFAULT NULL,
	`date_released12` DATETIME NULL DEFAULT NULL,
	`sequelae_specify` VARCHAR(500) NULL DEFAULT NULL,
	`sequelae` VARCHAR(1) NULL DEFAULT NULL,
	`caseclasscode` VARCHAR(10) NULL DEFAULT NULL,
	PRIMARY KEY (`enccode`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;