<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$Name = $_POST['names'];
$ContactNo = $_POST['contactno'];
$Date = $_POST['rdate'];
$Time = $_POST['rtime'];


// query
$sql = "UPDATE `reservation` SET `Name`= '". $Name ."', `contactno`= '". $ContactNo ."',
`rdate`= '". $Date."', `rtime= '". $Time ."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
header("location:../reservation.php");
?>
