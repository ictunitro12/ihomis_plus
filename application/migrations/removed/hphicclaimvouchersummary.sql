-- Dumping structure for table hospital_dbo.hphicclaimvouchersummary
CREATE TABLE `hphicclaimvouchersummary` (
	`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`pVoucherNo` VARCHAR(20) NOT NULL DEFAULT '',
	`pCheckNo` VARCHAR(20) NOT NULL DEFAULT '',
	`pCheckDate` VARCHAR(10) NOT NULL DEFAULT '',
	`pPayeeType` VARCHAR(10) NOT NULL DEFAULT '',
	`pPayeeCode` VARCHAR(10) NOT NULL DEFAULT '',
	`pPayeeName` VARCHAR(100) NOT NULL DEFAULT '',
	`pRMBD` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pDRUGS` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pXRAY` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pOPRM` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pSPFee` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pGPFee` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pSURFee` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pANESFee` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pGrossAmount` DECIMAL(20,2) NOT NULL DEFAULT '0.00',
	`pTaxAmount` DECIMAL(20,2) NULL DEFAULT '0.00',
	`pNetAmount` DECIMAL(20,2) NOT NULL DEFAULT '0.00',
	PRIMARY KEY (`id`),
	INDEX `pVoucherNo` (`pVoucherNo`),
	INDEX `pCheckNo` (`pCheckNo`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;


ALTER TABLE hphicclaimvoucher 
ADD column pTotalAmount decimal(20,2) default null;

ALTER TABLE hphicclaimvoucher 
ADD column pNumberOfClaims int(11) default null;
