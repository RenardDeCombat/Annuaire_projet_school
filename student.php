<?php

require_once('function.php');
require_once('database.php');
require_once('action.php');


class Student {
    public string $fname;
    public string $lname;
    public string $mail;
    public string $birth;
    public int $phone_number;
    public string $address_street;
    public string $address_city;
    public int $address_postal_code;
    public string $address_country;
    public int $year_guess;
    public int $speciality_guess;
    public int $sexe;
    public int $student_status;


    public function __construct(string $myFName, string $myLName, string $myMail, string $myBirth,
                                int $myPhoneNumber, string $myStreet, string $myCity, int $myPostalCode,
                                string $myCountry, int $myYear, int $mySpeciality, int $mySexe, int $myStatut){
        $this->fname = $myFName;
        $this->lname = $myLName;
        $this->mail = $myMail;
        $this->birth = $myBirth;
        $this->phone_number = $myPhoneNumber;
        $this->address_street = $myStreet;
        $this->address_city = $myCity;
        $this->address_postal_code = $myPostalCode;
        $this->address_country = $myCountry;
        $this->year_guess = $myYear;
        $this->speciality_guess = $mySpeciality;
        $this->sexe = $mySexe;
        $this->student_status = $myStatut;
    
    }

    public function setStudent(){

    }
}


$student = new Student()