<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* Database config */
    $db_host		= 'localhost';
    $db_user		= 'root';
    $db_pass		= '';
    $db_database	= 'oroars';

    $production = true;
    $local_host = array('127.0.0.1', "::1");

    if(in_array($_SERVER['REMOTE_ADDR'], $local_host)){
        $production = false;
    }

/* End config */

if($production == true){
    $db_host		= '137.184.153.241';
    $db_user		= 'root';
    $db_pass		= 'J6maSscQWMxS8r7K';
    $db_database	= 'oroars';
}

    //$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_pass);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      date_default_timezone_set("Asia/Manila");
?>
