<?php
require_once('../includes/auth.php');
$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
                    $query_audit = $db->prepare($sql_audit);
                    $data_audit = [
                    "user_id" => $_SESSION["username"],
                    "module" => "Logout",
                    "action" => "User logout",
                    "date_time" => date('Y-m-d H:m:s'),
                    ];

                    $query_audit->execute($data_audit);
session_destroy();
header('location:../index.php');


?>
