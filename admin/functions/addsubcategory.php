<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$SubCategoryName = $_POST['SubCategoryName'];


// query
$sql = "INSERT INTO `subcategory`(`Series`,`SubCategoryName` ) VALUES (:Series, :SubCategoryName)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':SubCategoryName' => $SubCategoryName));
header("location:../subcat.php");
?>
