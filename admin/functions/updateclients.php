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
    header("location:../client.php");
    ?>
