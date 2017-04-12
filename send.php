<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Connection.php';

$db = connectdb();
$date = date("Y-m-d H:i:s");
if(isset($_POST['submitimg']))
{
    $commentaire = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    
    $sql = $db->prepare("INSERT INTO post (commentaire,datePost) VALUES (:com,:date)");
    $sql->bindParam(':com', $commentaire, PDO::PARAM_STR);
    $sql->bindParam(':date', $date, PDO::PARAM_STR);
    $sql->execute();
    $idNewPost = $db->lastInsertId();
    $folderimg = '.\img\\';

//boucle pour parcourir $_FILES
    for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
        $sql2 = $db->prepare("INSERT INTO media (nomFichierMedia,typeMedia,idPost) VALUES (:name,:type,:idpost)");
        $sql2->bindParam(':name', $_FILES['image']['name'][$i], PDO::PARAM_STR);
        $sql2->bindParam(':type', $_FILES['image']['type'][$i], PDO::PARAM_STR);
        $sql2->bindParam(':idpost', $idNewPost, PDO::PARAM_INT);
        $sql2->execute();
        $result = move_uploaded_file($_FILES['image']['tmp_name'][$i], $folderimg . $_FILES['image']['name'][$i]);
    }
}

if(isset($_POST['submitvid'])){
    $commentairevid = trim(filter_input(INPUT_POST, 'descriptionvid', FILTER_SANITIZE_STRING));

    $foldervid = '.\vid\\';

    $sql = $db->prepare("INSERT INTO post (commentaire,datePost) VALUES (:com,:date)");
    $sql->bindParam(':com', $commentairevid, PDO::PARAM_STR);
    $sql->bindParam(':date', $date, PDO::PARAM_STR);
    $sql->execute();
    $idNewPost = $db->lastInsertId();
//boucle pour parcourir $_FILES
    for ($i = 0; $i < count($_FILES['video']['name']); $i++) {
        $sql2 = $db->prepare("INSERT INTO media (nomFichierMedia,typeMedia,idPost) VALUES (:name,:type,:idpost)");
        $sql2->bindParam(':name', $_FILES['video']['name'][$i], PDO::PARAM_STR);
        $sql2->bindParam(':type', $_FILES['video']['type'][$i], PDO::PARAM_STR);
        $sql2->bindParam(':idpost', $idNewPost, PDO::PARAM_INT);
        $sql2->execute();
        $result = move_uploaded_file($_FILES['video']['tmp_name'][$i], $foldervid . $_FILES['video']['name'][$i]);
    }
}


//fin boucle
header("Location:home.php");
