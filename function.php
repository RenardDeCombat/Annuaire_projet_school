<?php

require_once('action.php');
require_once('database.php');


function addStudent($newdb){
    $insertion=$newdb->prepare("INSERT INTO `student` (student_id,student_fname,student_lname,student_mail,
                                        student_dateofbirth,student_phonenumber,address_street,
                                        address_country,address_postal_code,address_city,student_annee,student_speciality,
                                        student_gender,student_status) VALUES (NULL,:firstname,:lastname,:email,
                                       :birth,:phone_number,:address_street,:address_country,:address_postal_code,
                                       :address_city,:year_guess,:speciality_guess,:sexe,:student_status)");
            $insertion->bindValue(":firstname",$_POST["firstname"]);
            $insertion->bindValue(":lastname",$_POST["lastname"]);
            $insertion->bindValue(":email",$_POST["email"]);
            $insertion->bindValue(":birth",$_POST["birth"]);
            $insertion->bindValue(":phone_number",$_POST["phone_number"]);
            $insertion->bindValue(":address_street",$_POST["address_street"]);
            $insertion->bindValue(":address_country",$_POST["address_country"]);
            $insertion->bindValue(":address_postal_code",$_POST["address_postal_code"]);
            $insertion->bindValue(":address_city",$_POST["address_city"]);
            $insertion->bindValue(":year_guess",$_POST["year_guess"]);
            $insertion->bindValue(":speciality_guess",$_POST["speciality_guess"]);
            $insertion->bindValue(":sexe",$_POST["sexe"]);
            $insertion->bindValue(":student_status",$_POST["student_status"]);
        $verification= $insertion->execute();
            if ($verification){
                echo "Insertion réussie";
            }
            else {
                echo "Echec de l'insertion";
            }
}
