<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$ProductName = $_POST['ProductName'];
$CategoryID = $_POST['CategoryID'];
$SubCategoryID = $_POST['SubCategoryID'];
$ProductPrice = $_POST['ProductPrice'];
$SRP = $_POST['SRP'];
// $filepath = "images/" . $_FILES["Photo"]["name"];

// if(move_uploaded_file($_FILES['Photo']['tmp_name'], '../'.$filepath)){

//           echo 'Files has uploaded';
// };

// query

$sql = "UPDATE `product` SET `ProductName`= '". $ProductName ."', `CategoryID`= '". $CategoryID ."',
`SubCategoryID`= '". $SubCategoryID ."', `ProductPrice`= '". $ProductPrice ."', `SRP`= '". $SRP ."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute();
header("location:../product.php");
?>
