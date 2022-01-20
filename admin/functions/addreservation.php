<?php
require_once('../includes/auth.php');
include('../includes/connect.php');
$Series = $_POST['Series'];
$Name = $_POST['names'];
$ContactNo = $_POST['contactno'];
$Date = $_POST['rdate'];
$Time = $_POST['rtime'];


// query

$sql = "INSERT INTO `reservation`(`Series`, `names`, `contactno`, `rdate`, 'rtime' ) VALUES (:Series, :Name, :ContactNo, :Date, :Time)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':names' => $Name,':contactno' => $ContactNo, ':rdate' => $Date, ':rtime' => $Time,));
header("location:../reservation.php");
?>

