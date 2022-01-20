<?php
/* Database config */
    $db_host		= 'localhost';
    $db_user		= 'root';
    $db_pass		= '';
    $db_database	= 'oroars';

    $production = false;

    if($_SERVER['REMOTE_ADDR'] == "136.158.34.32"){
        $production = true;
    }

/* End config */

if($production){
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

?>
