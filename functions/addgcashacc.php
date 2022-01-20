<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$MobileNumber = $_POST['MobileNumber'];
$Vercode = $_POST['Vercode'];
$Gcashpin = $_POST['Gcashpin'];



// query
$sql = "INSERT INTO `billing`(`Series`,`MobileNumber`, `Vercode`, 'Gcashpin' ) VALUES (:Series,:MobileNumber, :Vercode, :Gcashpin)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series':MobileNumber' => $MobileNumber, ':Vercode' => $Vercode, ':Gcashpin' => $Gcashpin));
header("location:../form_billing.php");
?>
