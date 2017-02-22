<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Connection.php';

function getPost() {
    $db = connectdb();
    $sql = $db->prepare("SELECT * FROM post");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
