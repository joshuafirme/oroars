<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$ProductName = $_POST['ProductName'];
$Description= $_POST['Description'];
$Quantity = $_POST['Quantity'];
$Price = $_POST['Price'];
$Totalprice = $_POST['Totalprice'];
$Subtotal = $_POST['Subtotal'];
$ShippingFee = $_POST['ShippingFee'];
$Vouchercode = $_POST['Vouchercode'];
$TotalBill = $_POST['TotalBill'];
$Paymentmethod = $_POST['Paymentmethod'];


// query
$sql = "UPDATE `cart` SET `ProductName`= '". $ProductName ."', `Description`= '". $Description ."',
`Quantity`= '". $Quantity ."', `Price`= '". $Price ."', `Totalprice`= '". $Totalprice ."', `Subtotal`= '". $Subtotal ."',
`ShippingFee`= '". $ShippingFee  ."', `Vouchercode`= '". $Vouchercode  ."', `TotalBill`= '". $TotalBill ."', `Paymentmethod`= '". $Paymentmethod ."',,
WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute(array);
header("location:../cart.php");
?>
