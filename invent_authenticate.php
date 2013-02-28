<?php 
require_once 'classes/invent_database.php';
 $username = $_POST['username'];
 $password =  $_POST['password'];
 $invent_database = new InventDatabase($username, md5($password), 'invent');
 if($invent_database->authenticate()) {
   header('Location: invent_upload.php');
 } else {
   header('Location: invent_error.php');
 }
?>