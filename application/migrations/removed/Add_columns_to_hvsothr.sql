ALTER TABLE `hvsothr`
ADD COLUMN `vsheight` DECIMAL(10,2) NULL DEFAULT NULL,
ADD COLUMN `vsweight` DECIMAL(10,2) NULL DEFAULT NULL,
ADD COLUMN `vswaist` DECIMAL(10,2) NULL DEFAULT NULL,
ADD COLUMN `vsbmi` DECIMAL(10,2) NULL DEFAULT NULL,
ADD COLUMN `vsbmicat` VARCHAR(10) NULL DEFAULT NULL,
ADD COLUMN `entryby` VARCHAR(10) NULL DEFAULT NULL;