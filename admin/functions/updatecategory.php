<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$CategoryName = $_POST['CategoryName'];



// query
$sql = "UPDATE `category` SET `CategoryName`= '". $CategoryName ."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute();
header("location:../category.php");
?>
