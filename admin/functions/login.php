<?php
include('../includes/connect.php');

 function function_alert($message) {

     // Display the alert box
     echo "<script>alert('$message');</script>";
 }

 try
 {
	     if(empty($_POST["username"]) || empty($_POST["password"]))
           {
                function_alert("All fields are required!");
           }
           else
           {
                $query = "SELECT * FROM `employees` WHERE `Email` = :username AND `Password` = :password";
                $statement = $db->prepare($query);
                $statement->execute(
                     array(
                          'username'     =>     $_POST["username"],
                          'password'     =>     $_POST["password"]
                     )
                );
                $count = $statement->rowCount();
                if($count > 0)
                {
                    $row = $statement->fetch();
                     $_SESSION["username"] = $row['ID'];
                     function_alert("Access Granted!");
                     function_alert("Welcome to OROARS System, Enjoy your day!");
                     echo '<script type="text/javascript">location.href = "../home.php";</script>';
                }
                else
                {
                     function_alert("Access Denied!");
                     echo '<script type="text/javascript">location.href = "../index.php";</script>';

                }
           }
      }
	  catch(PDOException $error)
 {
      function_alert($error->getMessage());
 }
?>
