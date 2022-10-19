ALTER TABLE webpais_indorsementdtl
ADD deduct  varchar(8) not null,
ADD chrgcode  varchar(5) not null,
ADD entryby  varchar(15) null,
ADD datemod  datetime null,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`hpercode`, `unique_code`, `enccode`, `deduct`, `chrgcode`);