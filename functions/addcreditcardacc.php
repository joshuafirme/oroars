<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$Names = $_POST['Names'];
$Creditcardno = $_POST['Creditcardno'];
$Expmonth = $_POST['Expmonth'];
$Expyear = $_POST['Expyear'];
$CCV = $_POST['CCV'];

// query
$sql = "INSERT INTO `billing`(`Series`,`Names`, `Creditcardno`, `Expmonth`, `Expyear`, `CCV`,) VALUES (:Series,:Names, :Creditcardno, :Expmonth, :Expyear, :CCV)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series':Names' => $Names, ':Creditcardno' => $Creditcardno, ':Expmonth' => $Expmonth, ':Expyear' => $Expyear, ':CCV' => $CCV,);
header("location:../form_billing.php");
?>
