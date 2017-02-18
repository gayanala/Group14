USE sql9159534;

SET foreign_key_checks = 0;
DROP TABLE IF EXISTS ApplicantData, EmployerData;
SET foreign_key_checks = 1;

create table ApplicantData (
	ApplicantIdentifier INT NOT NULL AUTO_INCREMENT,
    AppUsername varchar(255) NOT NULL,
    AppPasswrd varchar(255) NOT NULL,
    PRIMARY KEY(ApplicantIdentifier)
);

CREATE TABLE EmployerData(
	EmployerIdentifier INT NOT NULL AUTO_INCREMENT,
	EmpUsername VARCHAR(64),
    EmpPasswrd VARCHAR(64),
    PRIMARY KEY(EmployerIdentifier)
);