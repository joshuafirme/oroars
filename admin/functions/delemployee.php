<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$id = $_GET['id'];



// query
$sql = "DELETE FROM `employees` WHERE `ID` = '" . $id . "'";
$q = $db->prepare($sql);
$q->execute();

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
$query_audit = $db->prepare($sql_audit);
$data_audit = [
  "user_id" => $_SESSION["username"],
  "module" => "Employee",
  "action" => "Delete",
  "date_time" => date('Y-m-d H:m:s'),
];
$query_audit->execute($data_audit);

header("location:../employee.php");
?>
