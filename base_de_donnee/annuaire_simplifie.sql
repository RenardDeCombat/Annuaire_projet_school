#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: address
#------------------------------------------------------------

CREATE TABLE address(
        address_id          Int  Auto_increment  NOT NULL ,
        address_street      Varchar (100) NOT NULL ,
        address_postal_code Int NOT NULL ,
        address_country     Varchar (100) NOT NULL ,
        address_city        Varchar (50) NOT NULL
	,CONSTRAINT address_PK PRIMARY KEY (address_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: student
#------------------------------------------------------------

CREATE TABLE student(
        student_id           Int  Auto_increment  NOT NULL ,
        student_fname        Varchar (40) NOT NULL ,
        student_lname        Varchar (50) NOT NULL ,
        student_mail         Varchar (100) NOT NULL ,
        student_dateofbirth  Date NOT NULL ,
        student__phonenumber Int NOT NULL ,
        student_annee        Int NOT NULL ,
        student_speciality   Int NOT NULL ,
        address_id           Int NOT NULL
	,CONSTRAINT student_PK PRIMARY KEY (student_id)

	,CONSTRAINT student_address_FK FOREIGN KEY (address_id) REFERENCES address(address_id)
)ENGINE=InnoDB;

