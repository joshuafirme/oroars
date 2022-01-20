<?php
/* Database config */
    $db_host		= 'localhost';
    $db_user		= 'root';
    $db_pass		= '';
    $db_database	= 'oroars';
$production = false;
/* End config */

if($production){
    $db_host		= '127.0.0.1';
    $db_user		= 'remote';
    $db_pass		= 'TUBoYWJhaGFiYW5nUEA1NXcwcmQxdDAh';
    $db_database	= 'oroars';
}

    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
