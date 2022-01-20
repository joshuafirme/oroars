<?php
/* Database config */
    $db_host		= 'localhost';
    $db_user		= 'root';
    $db_pass		= '';
    $db_database	= 'oroars';
$production = true;
/* End config */

if($production){
    $db_host		= '104.248.149.73';
    $db_user		= 'root';
    $db_pass		= 'uFh,cby{+ZP<w4fw';
    $db_database	= 'oroars';
}

    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
