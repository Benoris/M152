<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Connection.php';

$commentaire = trim(filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING));
$file = $_FILES['image'];
$type = $file['type'];
$name = $file['name'];
$date = date("Y-m-d H:i:s");


$db = connectdb();
$sql = $db->prepare("INSERT INTO post VALUES (:com,:type,:name,:date)");
$sql->bindParam(':com',$commentaire, PDO::PARAM_STR);
$sql->bindParam(':type',$type, PDO::PARAM_STR,10);
$sql->bindParam(':name', $name, PDO::PARAM_STR,10);
$sql->bindParam(':date', $date, PDO::param);
$sql->execute();