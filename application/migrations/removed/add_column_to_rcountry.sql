ALTER TABLE rcountry
ADD cstat varchar(1);

ALTER TABLE rcountry
ADD clock varchar(1);

ALTER TABLE rcountry
ADD updsw varchar(1);

ALTER TABLE rcountry
ADD datemod datetime;

update rcountry set
updsw='P' , cstat='A', clock='N';