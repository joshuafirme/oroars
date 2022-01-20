<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$Name = $_POST['names'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Address = $_POST['address'];
$ContactNo = $_POST['contactno'];
$Position = $_POST['position'];
$Priviledge = $_POST['priviledge'];


// query
$sql = "UPDATE `employees` SET `name`= '". $Name ."', `email`= '". $Email ."',  `password`= '". $Password ."', `address`= '". $Address ."',
`contactno`= '". $ContactNo ."', `position`= '". $Position ."', `priviledge`= '". $Priviledge ."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute();
header("location:../employee.php");
?>
