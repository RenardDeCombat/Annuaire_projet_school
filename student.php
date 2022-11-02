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

         public function __construct(){
            
         }

         public function setStudent(){

         }


      }