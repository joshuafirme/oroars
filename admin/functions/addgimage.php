<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$filepath = "images/" . $_FILES["Photo"]["name"];

if(move_uploaded_file($_FILES['Photo']['tmp_name'], '../'.$filepath)){

          echo 'Files has uploaded';
};



// query
$sql = "INSERT INTO `gallery`(`Image`)";
$q = $db->prepare($sql);
$q->execute(array(':Image' => $Image));
header("location:../form_gimage.php");
?>