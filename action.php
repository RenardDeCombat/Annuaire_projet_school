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











?>