create table hhrw(
hpercode varchar(20) not null,
enccode varchar(48) not null  primary key,
dteassess datetime not null ,
fecun varchar(1) not null ,
partner varchar(1) null ,
fpmethod varchar(1) null ,
planchild varchar(1) null ,
dtechild datetime null ,
counsel varchar(1) null ,
what_type varchar(1) null ,
cmethod varchar(2) null ,
cmethod_sp varchar(200) null,
switch varchar(1) null ,
dtereport datetime not null,
toecode varchar(10) not null);



create table hfamrecord(
hpercode varchar(20) not null,
enccode varchar(48) not null  primary key,
dteassess datetime not null ,
dtereport datetime not null,
typeclient varchar(1) not null,
cmethod varchar(2) not null ,
cmethod_sp varchar(200) null,
administer varchar(10) null ,
schedvisit datetime not null ,
source varchar(2) null ,
givendeworm varchar(1) null,
dtedeworm datetime null ,
dewormdose varchar(1) null ,
remark varchar(200) null,
toecode varchar(10) not null);




CREATE TABLE hfamilyplanning(
hpercode varchar(20) not null,
enccode varchar(48) not null  primary key,
toecode varchar(10)  not null,
typeclient varchar(1) not null,
cmethod varchar(2) not null,
cmethod_sp varchar(200) null,
nhts varchar(1) null,
fourps varchar(1) null,
nolivechild varchar(2) null,
planchild varchar(1) null,
monthlyincome varchar(10) null,
spacing varchar(1) null,
limiting varchar(1) null,
oth_client varchar(1) null,
oth_client_sp varchar(200) null,
currentuser varchar(2) null,
medcondition varchar(1) null,
sideeffect varchar(1) null,
sideeffect_sp varchar(200) null,
severhmyn varchar(1) null,
historysahyn varchar(1) null,
nontraumaticyn varchar(1) null,
currenthisyn varchar(1) null,
severecpyn varchar(1) null,
cough14dyn varchar(1) null,
jaundice varchar(1) null,
vaginalbleedyn varchar(1) null,
vaginaldischargyn varchar(1) null,
intakantiyn varchar(1) null,
smokeryn varchar(1) null,
disabilityyn varchar(1) null,
disabilityyn_sp varchar(200) null,
gravida varchar(5) null,
para varchar(5) null,
fterm varchar(5) null,
premature varchar(5) null,
abortion varchar(5) null,
lchildren varchar(5) null,
dtedeliver datetime null,
typeofdliver varchar(2) null,
lmp varchar(200) null,
pmp varchar(200) null,
menstrualflow varchar(2) null,
dysmenorrhea varchar(1) null,
hydatidform varchar(1) null,
ectopcpreg varchar(1) null,
abnormaldischargyn varchar(1) null,
ifyesvp varchar(200) null,
soresyn varchar(1) null,
painorburning varchar(1) null,
sexualtransmit varchar(1) null,
hiv varchar(1) null,
vawyn varchar(1) null,
upleasantrelationyn varchar(1) null,
fpclinicyn varchar(1) null,
refferedto varchar(1) null,
refferedto_oth varchar(200) null,
weight varchar(5) null,
height varchar(5) null,
bloodpressure varchar(7) null,
pulserate varchar(5) null,
skinphy varchar(2) null,
extremephy varchar(2) null,
conjuncphy varchar(2) null,
neckphy varchar(2) null,
breastphy varchar(2) null,
abdomenphy varchar(2) null,
pelvicphy varchar(2) null,
cabnormalphy varchar(2) null,
cconsistentphy varchar(2) null,
upositionphy varchar(2) null,
udepthphy varchar(5) null,
dtereport datetime not null,
preg1 varchar(1) null,
preg2 varchar(1) null,
preg3 varchar(1) null,
preg4 varchar(1) null,
preg5 varchar(1) null,
preg6 varchar(1) null,
finalpreg varchar(1) null);
