alter table hpostpartum
add attenddr VARCHAR(15) NULL DEFAULT NULL,
add attendsigndate DATE NULL DEFAULT NULL;

/** MSSQL **/
alter table hpostpartum
add attenddr VARCHAR(15) NULL DEFAULT NULL;

alter table hpostpartum
add attendsigndate DATE NULL DEFAULT NULL;