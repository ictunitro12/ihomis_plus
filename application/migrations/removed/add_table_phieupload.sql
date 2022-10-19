CREATE TABLE hphieupload(
  enccode varchar(48) NOT NULL,
  uploaddatetime datetime NOT NULL,
  datatype varchar(100) NOT NULL,
  uploadedby varchar(15) NOT NULL,
  remarks varchar(255) DEFAULT NULL,
  PRIMARY KEY (enccode,uploaddatetime,datatype));