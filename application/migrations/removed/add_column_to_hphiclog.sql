ALTER TABLE hphiclog
ADD COLUMN spsuffix varchar(5) default null,
ADD COLUMN memcontactno varchar(50) default null,
ADD COLUMN empdistzip varchar(4) default null;