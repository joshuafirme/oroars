<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$id = $_GET['id'];



// query
$sql = "DELETE FROM `gallery` WHERE `ID` = '" . $id . "'";
$q = $db->prepare($sql);
$q->execute();
header("location:../gallery.php");
?>
