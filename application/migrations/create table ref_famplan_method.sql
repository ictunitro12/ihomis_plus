create table ref_famplan_method(
familyplan_method_code varchar(20) not null primary key,
familyplan_method_desc varchar(100) not null,
familyplan_method_sex varchar(3),
validity varchar(50)
);

create table ref_famplan_type(
familyplan_type_code varchar(2) not null primary key,
familyplan_type_desc varchar(100) not null
);


create table hfamplan_assessment(
typepatient varchar(10) not null,
hpercode varchar(20) not null,
enccode varchar(48) not null  primary key,
dteassess datetime not null ,
typecode varchar(2) not null,
method_code varchar(20) not null ,
method_code_sp varchar(200) null,
personnel varchar(50) null ,
schedvisit datetime not null ,
source varchar(5) null ,
givendeworm varchar(1) null,
dtedeworm datetime null ,
dewormdose varchar(4) null ,
remark varchar(200) null);

create table hhrw(
typepatient varchar(10) not null,
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
method_code varchar(20) null ,
method_code_sp varchar(200) null,
switch varchar(1) null ,
dtereport datetime not null);



CREATE TABLE hfamilyplanning(
typepatient varchar(10) not null,
hpercode varchar(20) not null,
enccode varchar(48) not null  primary key,
typecode varchar(2) not null,
method_code varchar(20) not null,
method_code_sp varchar(100) null,
nhts varchar(1) null,
fourps varchar(1) null,
living_child varchar(10) null,
planchild varchar(1) null,
monthlyincome varchar(10) null,
reasons_fp varchar(1) null,
reasons_fp_sp varchar(100) null,
currentuser varchar(2) null,
reason_changing varchar(1) null,
sideeffect_sp varchar(100) null,

severeheadache varchar(1) null,
historystroke varchar(1) null,
non_traumatic varchar(1) null,
breast_cancer varchar(1) null,
chestpain varchar(1) null,
cough14day varchar(1) null,
jaundice varchar(1) null,
vaginalbleed varchar(1) null,
vaginaldischarge varchar(1) null,
phenobarbital varchar(1) null,
smoker varchar(1) null,
disability varchar(1) null,
disability_sp varchar(50) null,

gravida varchar(5) null,
parity varchar(5) null,
preterm varchar(10) null,
premature varchar(10) null,
abortion varchar(10) null,
livebirths varchar(10) null,

dtedeliver datetime null,
typeofdliver varchar(2) null,
lmp datetime null,
pmp datetime null,

menstrualflow varchar(2) null,
dysmenorrhea varchar(1) null,
hydatidform varchar(1) null,
ectopcpreg varchar(1) null,
abnormaldischargyn varchar(1) null,

ifyesgen varchar(200) null,
ulcer varchar(1) null,
burning_sensation varchar(1) null,
sti varchar(1) null,
hiv varchar(1) null,
domestic_violence varchar(1) null,
upleasantrelation varchar(1) null,
partnernotapprove varchar(1) null,
refferedto varchar(1) null,
refferedto_oth varchar(50) null,

weight varchar(5) null,
height varchar(5) null,
bloodpressure varchar(7) null,
pulserate varchar(5) null,

skin varchar(10) null,
extreme varchar(10) null,
conjunctiva varchar(10) null,
neck varchar(10) null,
breast varchar(10) null,
abdomen varchar(10) null,
pelvic varchar(10) null,
cervic_abnormal varchar(10) null,
cervic_consistency varchar(10) null,
uterine_position varchar(10) null,
uterine_depth varchar(10) null,

dtereport datetime not null,
baby_less_six varchar(1) null,
abstain_sex varchar(1) null,
baby_four_weeks varchar(1) null,
lmp_past_seven varchar(1) null,
miscarriage varchar(1) null,
reliable_contraceptive varchar(1) null,
final varchar(1) null);


INSERT INTO ref_famplan_method (familyplan_method_code , familyplan_method_desc )
VALUES
('01', 'Combined Oral Contraceptives (COC) '),
('02', 'Progestin Only Pill (POP)'),
('03', 'Injectible'),
('04', 'Implant'),
('05', 'Intra-Uterine Device - Interval'),
('06', 'Intra-Uterine Device - Postpartum'),
('07', 'Condom'),
('08', 'Natural Family Planning - Cervical Mucus Method'),
('09', 'Natural Family Planning - Basal Body Temperature'),
('10', 'Natural Family Planning - Symptothermal Method'),
('11', 'Natural Family Planning - Standard Days Method'),
('12','Lactational Amenorrhea Method'),
('13', 'Others, specify');

INSERT INTO ref_famplan_type (familyplan_type_code , familyplan_type_desc )
VALUES
('01', 'New Acceptor'),
('02', 'Current User');