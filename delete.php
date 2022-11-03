<?php

require_once('database.php');

if(isset($_GET['delete_id'])){
    $delete=$_GET['delete_id'];
    $delData="DELETE FROM student WHERE student_id = $delete";
    $newdb->prepare($delData)->execute(); 
    header("Location:admin.php");
}

