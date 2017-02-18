USE sql9159534;

SET foreign_key_checks = 0;
DROP TABLE IF EXISTS ApplicantData, EmployerData;
SET foreign_key_checks = 1;

create table ApplicantData (
	ApplicantIdentifier INT NOT NULL AUTO_INCREMENT,
    AppUsername varchar(255) NOT NULL,
    AppPasswrd varchar(255) NOT NULL,
    AppTag varchar(255),
    AppLink varchar(255),
    AppPic varchar(255),
    AppLoginStat bit(16) not null,
    PRIMARY KEY(ApplicantIdentifier)
);

CREATE TABLE EmployerData(
	EmployerIdentifier INT NOT NULL AUTO_INCREMENT,
	EmpUsername VARCHAR(64),
    EmpPasswrd VARCHAR(64),
	EmpTag varchar(255),
    EmpLink varchar(255),
    AppPic varchar(255),
    EmpLoginStat bit(16) not null,
    PRIMARY KEY(EmployerIdentifier)
);

insert into ApplicantData(AppUsername, AppPasswrd, AppTag, AppLink, AppPic, AppLoginStat) values ('mpurcell', 'password123', 'Technology', 'www.youtube.com', 'imgur.com', '0');
insert into EmployerData(EmpUsername, EmpPasswrd, EmpTag, EmpLink, AppPic, EmpLoginStat) values ('CSG@csg.com', 'csgpassword', 'Technology', 'www.youtube.com', 'imgur.com', '0');