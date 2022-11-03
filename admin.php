<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/logo_nws_item.svg"  rel="shortcut icon">
    <link href="style.css" rel="stylesheet">
    <title>Interface Administrateur</title>
</head>
<body>
    
</body>
</html>

<h1 class=titre>Gestions des étudiants</h1>
<table>
    <tr>
        <td width = 2% scope="row"><strong>ID</strong></td>
        <td width = 7%><strong>Prénom</strong></td>
        <td width = 7%><strong>Nom</strong></td>
        <td width = 7%><strong>Email</strong></td>
        <td width = 7%><strong>Date de naissance</strong></td>
        <td width = 7%><strong>Numéro de téléphone</strong></td>
        <td width = 7%><strong>Rue</strong></td> 
        <td width = 7%><strong>Ville</strong></td>
        <td width = 7%><strong>Code Postal</strong></td>
        <td width = 7%><strong>Pays</strong></td>
        <td width = 7%><strong>Spécialité</strong></td>
        <td width = 7%><strong>Année d'entrée</strong></td>
        <td width = 7%><strong>Sexe</strong></td>
        <td width = 7%><strong>Statut</strong></td>
    </tr>



<?php

require_once('database.php');
require_once('function.php');
require_once('delete.php');

try {
    foreach ($newdb->query('SELECT * FROM `student`') as $row) {
        $row = array_map("utf8_encode", $row);

        $id = $row ['student_id'];
        $firstName = $row['student_fname'];
        $lastName = $row['student_lname'];
        $mail = $row['student_mail'];
        $dateOfBirth = $row['student_dateofbirth'];
        $phoneNumber = $row['student_phonenumber'];
        $street = $row['address_street'];
        $country = $row['address_country'];
        $postalCode = $row['address_postal_code'];
        $city = $row['address_city'];
        $year = $row['student_annee'];
        $speciality = $row['student_speciality'];
        $gender = $row['student_gender'];
        $status = $row['student_status'];


        print "<tr> 
        
        <td>$id</td>
        <td>$firstName</td>
        <td>$lastName</td>
        <td>$mail</td>
        <td>$dateOfBirth</td>
        <td>$phoneNumber</td>
        <td>$street</td>
        <td>$city</td>
        <td>$postalCode</td>
        <td>$country</td>
        <td>$year</td>
        <td>$speciality</td>
        <td>$gender</td>
        <td>$status</td>
        ";
        // if ($valid == 0) {
        //    echo "<td>Non<a href='gestion.php?id_valid=".$id."' id='update'>&nbsp&nbsp&nbspCliquez pour valider</a></td>";
        // }

        // else {
        //     echo "<td>Oui<a href='gestion.php?id_annul=".$id."' id='update'>&nbsp&nbsp&nbspCliquez pour annuler</a></td>";
        // }
        echo "<td><a href='admin.php?delete_id=".$id."' id='delete'>Supprimer</a></td>";
        echo "<td><a href='update.php?id=".$id."'>Edit</a></td>
        </tr>";
    }
    
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die;
}

?>

</table>

    <div class="nav">
        <button class="bouton_admin">
            <a href="index.html">Ajouter un étudiant</a>
        </button>
    </div>