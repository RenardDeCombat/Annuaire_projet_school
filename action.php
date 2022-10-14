<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "annuaire_nws";

   try {
      $newdb = new PDO("mysql:host=$host;dbname=$db", $username, $password);
      echo "Connected successfully";
      
   } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      die;
   }
   if (isset($_POST["firstname"])&&
      isset($_POST["lastname"])&&
      isset($_POST["email"])&&
      isset($_POST["birth"])&&
      isset($_POST["phone_number"])&&
      isset($_POST["address_street"])&&
      isset($_POST["address_city"])&&
      isset($_POST["address_postal_code"])&&
      isset($_POST["address_country"])&&
      isset($_POST["speciality_guess"])&&
      isset($_POST["year_guess"])){
            $insertion=$newdb->prepare("INSERT INTO student VALUES (NULL,:firstname,:lastname,:email,:phone_number,:)")
      }











?>