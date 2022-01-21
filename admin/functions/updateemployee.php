<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$Series = $_POST['Series'];
$Name = $_POST['names'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Address = $_POST['address'];
$ContactNo = $_POST['contactno'];
$Position = $_POST['position'];
$Priviledge = $_POST['priviledge'];


// query
$sql = "UPDATE `employees` SET `name`= '". $Name ."', `email`= '". $Email ."',  `password`= '". $Password ."', `address`= '". $Address ."',
`contactno`= '". $ContactNo ."', `position`= '". $Position ."', `priviledge`= '". $Priviledge ."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute();

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
                    $query_audit = $db->prepare($sql_audit);
                    $data_audit = [
                    "user_id" => $_SESSION["username"],
                    "module" => "Employee",
                    "action" => "Update",
                    "date_time" => date('Y-m-d H:m:s'),
                    ];

                    $query_audit->execute($data_audit);
header("location:../employee.php");
?>
