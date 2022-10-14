#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: city
#------------------------------------------------------------
DROP TABLE IF EXISTS city ;
CREATE TABLE city(
        city_id   Int  Auto_increment  NOT NULL ,
        city_name Varchar (100) NOT NULL
	,CONSTRAINT city_PK PRIMARY KEY (city_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: address
#------------------------------------------------------------
DROP TABLE IF EXISTS address ;
CREATE TABLE address(
        address_id          Int  Auto_increment  NOT NULL ,
        address_street      Varchar (100) NOT NULL ,
        address_postal_code Int NOT NULL ,
        address_country     Varchar (100) NOT NULL ,
        city_id             Int NOT NULL
	,CONSTRAINT address_PK PRIMARY KEY (address_id)

	,CONSTRAINT address_city_FK FOREIGN KEY (city_id) REFERENCES city(city_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: speciality
#------------------------------------------------------------
DROP TABLE IF EXISTS speciality ;
CREATE TABLE speciality(
        speciality_id   Int  Auto_increment  NOT NULL ,
        speciality_name Int NOT NULL
	,CONSTRAINT speciality_PK PRIMARY KEY (speciality_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: student
#------------------------------------------------------------
DROP TABLE IF EXISTS student ;
CREATE TABLE student(
        student_id           Int  Auto_increment  NOT NULL ,
        student_fname        Varchar (40) NOT NULL ,
        student_lname        Varchar (50) NOT NULL ,
        student_mail         Varchar (100) NOT NULL ,
        student_dateofbirth  Date NOT NULL ,
        student__phonenumber Int NOT NULL ,
        address_id           Int NOT NULL ,
        speciality_id        Int NOT NULL
	,CONSTRAINT student_PK PRIMARY KEY (student_id)

	,CONSTRAINT student_address_FK FOREIGN KEY (address_id) REFERENCES address(address_id)
	,CONSTRAINT student_speciality0_FK FOREIGN KEY (speciality_id) REFERENCES speciality(speciality_id)
)ENGINE=InnoDB;

