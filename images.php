<?php
/*
 * 
 */

require_once 'Connection.php';

function getPost() {
    $db = connectdb();
    $sql = $db->prepare("SELECT * FROM post");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
function getMedia($id){
    $db = connectdb();
    $sql = $db->prepare("SELECT * FROM media WHERE idPost = ?");
    $sql->execute(array($id));
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
function getStuff(){
    $db = connectdb();
    $sql= $db->prepare("SELECT * FROM post NATURAL JOIN media");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}