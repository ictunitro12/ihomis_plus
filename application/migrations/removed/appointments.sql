CREATE TABLE `appointments` (
	`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`appointment_id` CHAR(36) NOT NULL ,
	`appointment_date` DATE NOT NULL,
	`facility` TEXT NULL  ,
	`patient` TEXT NULL  ,
	`patient_name` VARCHAR(50) NULL DEFAULT NULL  ,
	`service_type` TEXT NULL  ,
	`complaint` TEXT NOT NULL  ,
	`type` VARCHAR(10) NOT NULL  ,
	`slot` VARCHAR(10) NULL DEFAULT NULL  ,
	`doctor_id` CHAR(10) NULL DEFAULT NULL  ,
	`doctor` TEXT NULL  ,
	`license_number` VARCHAR(10) NULL DEFAULT NULL  ,
	`consultation_mode` VARCHAR(20) NULL DEFAULT NULL  ,
	`terms` TINYINT(1) NULL DEFAULT '0',
	`remarks` TEXT NULL  ,
	`is_paid` TINYINT(1) NULL DEFAULT '0',
	`status` VARCHAR(50) NOT NULL  ,
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `appointment_id` (`appointment_id`)
)
ENGINE=InnoDB
AUTO_INCREMENT=1
;
