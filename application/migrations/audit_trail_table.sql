CREATE TABLE `user_audit_trails` (
	`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` VARCHAR(25) NULL DEFAULT NULL,
	`event` ENUM('insert','update','delete') NOT NULL,
	`table_name` VARCHAR(128) NOT NULL,
	`old_values` TEXT NULL,
	`new_values` TEXT NOT NULL,
	`url` VARCHAR(255) NOT NULL,
	`name` VARCHAR(128) NULL DEFAULT NULL,
	`ip_address` VARCHAR(45) NOT NULL,
	`user_agent` VARCHAR(255) NOT NULL,
	`created_at` DATETIME NULL,
	PRIMARY KEY (`id`)
);

// MSSQL
CREATE TABLE user_audit_trails (
	[id] BIGINT CHECK ([id] > 0) NOT NULL IDENTITY,
	[user_id] VARCHAR(25) NULL DEFAULT NULL,
	[event] VARCHAR(25) NOT NULL,
	[table_name] VARCHAR(128) NOT NULL,
	[old_values] TEXT NULL,
	[new_values] TEXT NOT NULL,
	[url] VARCHAR(255) NOT NULL,
	[name] VARCHAR(128) NULL DEFAULT NULL,
	[ip_address] VARCHAR(45) NOT NULL,
	[user_agent] VARCHAR(255) NOT NULL,
	[created_at] DATETIME NULL,
	PRIMARY KEY ([id])
);