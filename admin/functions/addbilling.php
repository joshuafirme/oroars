<?php
require_once('../include/auth.php');
include('../include/connect.php');
$Series = $_POST['Series'];
$CardNo = $_POST['CardNo'];
$Expmonth = $_POST['Expmonth'];
$Expyear = $_POST['Expyear'];
$CCVNo = $_POST['CCVNo'];
$DateExpired = $_POST['DateExpired'];



// query
$sql = "INSERT INTO `billing`(`Series`,`CardNo`, `Expmonth`, `Expyear`, `CCVNo`, `DateExpired` ) VALUES (:Series,:CardNo, :Expmonth, :Expyear :CCVNo, :DateExpired)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series':CardNo' => $CardNo, ':Expmonth' => $Expmonth, ':Expyear' => $Expyear, ':CCVNo' => $CCVNo, ':DateExpired' => $DateExpired));
header("location:../form_billing.php");
?>
