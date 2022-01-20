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



// query
$sql = "UPDATE `registration` SET `names`=:Name, `username`=:Username, `address`=:Address, `gender`=:Gender, `contactno`=:ContactNo, `email`=:Email, `password`=:Password, `repeatpassword`=:Repeatpassword, `idpic`=:IDpicture WHERE `Series`=:Series";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':names' => $Name, ':username' => $Username,':address' => $Address, ':gender' => $Gender, ':contactno' => $ContactNo, ':email' => $Email,':password' => $Password, ':reapeatpassword' => $Reapeatassword, ':idpic' => $IDpicture));
header("location:../registration.php");
?>
