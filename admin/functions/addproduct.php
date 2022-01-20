<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$ProductName = $_POST['ProductName'];
$CategoryID = $_POST['CategoryID'];
$SubCategoryID = $_POST['SubCategoryID'];
$ProductPrice = $_POST['ProductPrice'];
$SRP = $_POST['SRP'];
$filepath = "app/upload/" . $_FILES["Photo"]["name"];

if(move_uploaded_file($_FILES['Photo']['tmp_name'], '../../'.$filepath)){

          echo 'Files has uploaded';
};

// query
$sql = "INSERT INTO `product`(`ProductName`, `CategoryID`, `SubCategoryID`, `ProductPrice`, `SRP`, `photo` ) VALUES (:ProductName, :CategoryID, :SubCategoryID, :ProductPrice, :SRP, :photo)";
$q = $db->prepare($sql);
$q->execute(array(':ProductName' => $ProductName, ':CategoryID' => $CategoryID, ':SubCategoryID' => $SubCategoryID, ':ProductPrice' => $ProductPrice, ':SRP' => $SRP, ':photo' => $filepath));
header("location:../product.php");
?>
