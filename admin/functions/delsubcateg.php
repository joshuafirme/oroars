<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$id = $_GET['id'];



// query
$sql = "DELETE FROM `subcategory` WHERE `ID` = '" . $id . "'"; //are naman yung subcategory dine eh yung nasa database yung table
$q = $db->prepare($sql);
$q->execute();
header("location:../subcat.php");//eto yung main ang ilalagay hindi yung nasa table
?>
