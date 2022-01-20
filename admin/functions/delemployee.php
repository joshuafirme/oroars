<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$id = $_GET['id'];



// query
$sql = "DELETE FROM `employees` WHERE `ID` = '" . $id . "'";
$q = $db->prepare($sql);
$q->execute();
header("location:../employee.php");
?>
