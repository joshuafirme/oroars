<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$Name = $_POST['names'];
$Username = $_POST['username'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];
$ContactNo = $_POST['contactno'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Repeatpassword = $_POST['repeatpassword'];
$IDpicture = $_POST['idpic'];
$Billing = $_POST['billing'];


// query
$sql = "INSERT INTO `registration`(`Series`,`names`, `username`,'address', 'gender', 'contactno','email', 'password','repeatpassword', 'idpic' ) VALUES (:Series, :Name,  :Gender,:ContactNo, :Email, :Password, :Reapeatassword, :IDpicture), :billing";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':names' => $Name, ':username' => $Username,':address' => $Address, ':gender' => $Gender, ':contactno' => $ContactNo, ':email' => $Email,':password' => $Password, ':reapeatpassword' => $Reapeatassword, ':idpic' => $IDpicture, ':billing' => $Billing));
header("location:../form_clients.php");
?>
