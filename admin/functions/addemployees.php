<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$Series = $_POST['Series'];
$eName = $_POST['names'];
$Email = $_POST['email'];
$ePassword = $_POST['password'];
$eAddress = $_POST['address'];
$ContactNo = $_POST['contactno'];
$Position = $_POST['position'];
$Priviledge = $_POST['priviledge'];
$status = $_POST['status'];


// query
$sql = "INSERT INTO `employees`(`Series`,`names`, `email`, 'password', 'address', 'contactno', 'position', 'previledge', 'status' ) VALUES (:Series, :eName, :Email, :ePassword, :eAddress, :Contactno, :Position, :Previledge, :status)";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':names' => $eName, ':email' => $Email, ':password' => $Password, ':address' => $Address, ':contactno' => $ContactNo, ':position' => $Position, ':previledge' => $Priveledge, ':status' => $status,));

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
$query_audit = $db->prepare($sql_audit);
$data_audit = [
  "user_id" => $_SESSION["username"],
  "module" => "Employee",
  "action" => "Add",
  "date_time" => date('Y-m-d H:m:s'),
];

$query_audit->execute($data_audit);

header("location:../form_employees.php");
?>
