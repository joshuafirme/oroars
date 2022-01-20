<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$CategoryName = $_POST['CategoryName'];



// query
$sql = "INSERT INTO `category`(`Series`,`CategoryName`) VALUES (:Series, :CategoryName)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series, ':CategoryName' => $CategoryName));
header("location:../category.php");
?>
