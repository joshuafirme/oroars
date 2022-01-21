    <?php
    require_once('../includes/auth.php');
    include('../includes/connect.php');
    $Series = $_POST['Series'];
    $Name = $_POST['names'];
    $Username = $_POST['username'];
    $Address = $_POST['address'];
    $Gender = $_POST['gender'];
    $ContactNo = $_POST['contactno'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Repeatpassword = $_POST['repeatpassword'];
    $Billing = $_POST['billing'];



    // query
    $sql = "UPDATE `client` SET `Name`= '". $Name ."', `username`= '". $Username ."', `address`= '". $Address ."',
    `gender`= '". $Gender ."', `contactno`= '". $ContactNo ."', `email`= '". $Email ."', `password`= '". $Password ."',
    `repeatpassword`= '". $Repeatpassword ."', `billing`= '". $Billing ."' WHERE `ID`= '". $Series ."'";
    $q = $db->prepare($sql);
    $q->execute();

    $sql_audit = "INSERT INTO audit_trail(user_id,module,action,date_time)VALUES(:user_id,:module,:action,:date_time)";
                    $query_audit = $db->prepare($sql_audit);
                    $data_audit = [
                    "user_id" => $_SESSION["username"],
                    "module" => "Client",
                    "action" => "Update",
                    "date_time" => date('Y-m-d H:m:s'),
                    ];

                    $query_audit->execute($data_audit);

    header("location:../client.php");
    ?>
