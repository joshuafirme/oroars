<?php 
	include_once 'connect.php';

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
		header("location: index.php");
		exit();
	}
	try {
		$session_id  = $_SESSION['username'];

		$query = "SELECT * FROM employees WHERE ID = :ID";
		$statement = $db->prepare($query);
		$statement->execute( array(
				'ID'     =>     $session_id
		   ));
		  $row = $statement->fetch();
		   $name = $row['Name'];
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }

?>
