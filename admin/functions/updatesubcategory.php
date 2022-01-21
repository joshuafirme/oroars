<?php
include_once '../includes/auth.php';
include_once '../includes/connect.php';
$Series = $_POST['Series'];
$SubCategoryName = $_POST['SubCategoryName'];


// query
$sql = "UPDATE `subcategory` SET `SubCategoryName`= '". $SubCategoryName."' WHERE `ID`= '". $Series ."'";
$q = $db->prepare($sql);
$q->execute(array(':Series' => $Series,':SubCategoryName' => $SubCategoryName));

$sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
                    $query_audit = $db->prepare($sql_audit);
                    $data_audit = [
                    "user_id" => $_SESSION["username"],
                    "module" => "Subcategory",
                    "action" => "Update",
                    "date_time" => date('Y-m-d H:m:s'),
                    ];

                    $query_audit->execute($data_audit);

header("location:../subcat.php");
?>
