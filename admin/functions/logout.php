<?php
require_once('../includes/auth.php');
session_destroy();
header('location:../index.php');


?>
