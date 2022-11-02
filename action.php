<?php


require_once('function.php');
require_once('database.php');


   if (isset($_POST["firstname"])&&
      isset($_POST["lastname"])&&
      isset($_POST["email"])&&
      isset($_POST["birth"])&&
      isset($_POST["phone_number"])&&
      isset($_POST["address_street"])&&
      isset($_POST["address_city"])&&
      isset($_POST["address_postal_code"])&&
      isset($_POST["address_country"])&&
      isset($_POST["year_guess"])&&
      isset($_POST["speciality_guess"])&&
      isset($_POST["sexe"])&&
      isset($_POST["student_status"])){
            addStudent($newdb);
      }

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








?>