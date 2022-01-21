<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$Series = $_POST['Series'];
$Name = $_POST['names'];
$Username = $_POST['username'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];
$ContactNo = $_POST['contactno'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Repeatpassword = $_POST['repeatpassword'];
$IDpicture = $_POST['idpic'];
$Billing = $_POST['billing'];


// query
$sql = "INSERT INTO `registration`(`Series`,`names`, `username`,'address', 'gender', 'contactno','email', 'password','repeatpassword', 'idpic' ) VALUES (:Series, :Name,  :Gender,:ContactNo, :Email, :Password, :Reapeatassword, :IDpicture), :billing";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':names' => $Name, ':username' => $Username,':address' => $Address, ':gender' => $Gender, ':contactno' => $ContactNo, ':email' => $Email,':password' => $Password, ':reapeatpassword' => $Reapeatassword, ':idpic' => $IDpicture, ':billing' => $Billing));

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
$query_audit = $db->prepare($sql_audit);
$data_audit = [
  "user_id" => $_SESSION["username"],
  "module" => "Client",
  "action" => "Add",
  "date_time" => date('Y-m-d H:m:s'),
];

$query_audit->execute($data_audit);

header("location:../form_clients.php");
?>
