<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$MobileNumber = $_POST['MobileNumber'];
$Vercode = $_POST['Vercode'];
$Gcashpin = $_POST['Gcashpin'];



// query
$sql = "UPDATE `billing` SET `MobileNumber`=:MobileNumber, `Vercode`=:Vercode, `Gcashpin`=:Gcashpin WHERE `Series`=:Series";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series':MobileNumber' => $MobileNumber, ':Vercode' => $Vercode, ':Gcashpin' => $Gcashpin));
header("location:../form_billing.php");
?>
