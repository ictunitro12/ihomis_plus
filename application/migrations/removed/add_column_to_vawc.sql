ALTER TABLE vawc
add name_of_ser_provi varchar(100) null,
add type_pat varchar(50) not null,
add gender_identity varchar(100) null,
add wth_disab varchar(5) not null,
add disable_sp varchar(100) null,
add ra10627 varchar(3) null,
add name_of_ser_provi varchar(100) null;

ALTER TABLE vawc
add cb_others varchar(2) null,
add cb_sex varchar(2) null,
add  cb_psy varchar(2) null,
add cb_phy varchar(2) null,
add cb_eco varchar(2) null,
add cb_others varchar(2) null;


alter table vawc_perpet
add mobile varchar(15) null,
add per_zipcode varchar(4) null,
add child_perp varchar(200) null,
add child_perplast varchar(200) null,
add child_perpmiddle varchar(200) null,
add rel_of_guardian varchar(100) null,
add child_perpaddress varchar(300) null,
add landline varchar(15) null,
add mobile varchar(15) null;

ALTER TABLE `vawc` 
 MODIFY COLUMN `inj_fracture_sp` CHAR(1) NULL,
 MODIFY COLUMN `inj_abrasion_sp` VARCHAR(100) NULL,
 MODIFY COLUMN `inj_avulsion_sp` VARCHAR(100) NULL,
 MODIFY COLUMN `inj_concussion_sp` VARCHAR(100) NULL,
 MODIFY COLUMN `inj_contusion_sp` VARCHAR(100) NULL,
 MODIFY COLUMN `inj_fracture_sp2` VARCHAR(100) NULL,
 MODIFY COLUMN `inj_wound_sp` VARCHAR(100) null ;