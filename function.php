<?php

require_once('action.php');


function addStudent($newdb,$lastId){
    $insertion=$newdb->prepare("INSERT INTO student (student_id,student_fname,student_lname,student_mail,
                                        student_dateofbirth,student__phonenumber,student_annee,student_speciality,
                                        address_id,student_gender,student_status) VALUES (NULL,:firstname,:lastname,:email,
                                       :birth,:phone_number,:year_guess,:speciality_guess,:lastId,:sexe,
                                       :student_status)");
            $insertion->bindValue("firstname",$_POST["firstname"]);
            $insertion->bindValue("lastname",$_POST["lastname"]);
            $insertion->bindValue("email",$_POST["email"]);
            $insertion->bindValue("birth",$_POST["birth"]);
            $insertion->bindValue("phone_number",$_POST["phone_number"]);
            $insertion->bindValue("year_guess",$_POST["year_guess"]);
            $insertion->bindValue("speciality_guess",$_POST["speciality_guess"]);
            $insertion->bindValue("sexe",$_POST["sexe"]);
            $insertion->bindValue("student_status",$_POST["student_status"]);
            $insertion->bindValue("lastId",$lastId);
        $verification= $insertion->execute();
            if ($verification){
                echo "Insertion réussie";
            }
            else {
                echo "Echec de l'insertion";
            }
}


function addAdress($newdb){
    $insertion2=$newdb->prepare("INSERT INTO `address`(address_id,address_street,address_postal_code,
                                address_country,address_city) VALUES (NULL,:address_street,
                                :address_postal_code,:address_country,:address_city)");
            $insertion2->bindValue("address_street",$_POST["address_street"]);
            $insertion2->bindValue("address_postal_code",$_POST["address_postal_code"]);
            $insertion2->bindValue("address_country",$_POST["address_country"]);
            $insertion2->bindValue("address_city",$_POST["address_city"]);
        $verification2= $insertion2->execute();
            if ($verification2){
                echo "Insertion réussie";
            }
            else {
                echo "Echec de l'insertion";
            }
            return $newdb->lastInsertId();
}