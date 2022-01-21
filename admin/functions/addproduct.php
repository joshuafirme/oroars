<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$ProductName = $_POST['ProductName'];
$CategoryID = $_POST['CategoryID'];
$SubCategoryID = $_POST['SubCategoryID'];
$ProductPrice = $_POST['ProductPrice'];
$SRP = $_POST['SRP'];
$filepath = "app/upload/" . $_FILES["Photo"]["name"];

if(move_uploaded_file($_FILES['Photo']['tmp_name'], '../../'.$filepath)){

       //   echo 'Files has uploaded';
};

// query
$sql = "INSERT INTO `product`(`ProductName`, `CategoryID`, `SubCategoryID`, `ProductPrice`, `SRP`, `photo` ) VALUES (:ProductName, :CategoryID, :SubCategoryID, :ProductPrice, :SRP, :photo)";
$q = $db->prepare($sql);
$q->execute(array(':ProductName' => $ProductName, ':CategoryID' => $CategoryID, ':SubCategoryID' => $SubCategoryID, ':ProductPrice' => $ProductPrice, ':SRP' => $SRP, ':photo' => $filepath));

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
$query_audit = $db->prepare($sql_audit);
$data_audit = [
  "user_id" => $_SESSION["username"],
  "module" => "Product",
  "action" => "Add",
  "date_time" => date('Y-m-d H:m:s'),
];
$query_audit->execute($data_audit);

header("location:../product.php");
?>
