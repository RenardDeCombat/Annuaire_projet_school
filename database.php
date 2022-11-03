<?php

$json = "connect.json";
$extractJson = file_get_contents($json);
$decodeData = json_decode($extractJson);
$newdb = new PDO("mysql:host=".$decodeData->server.";dbname=".$decodeData->db,$decodeData->username,$decodeData->password);

?>