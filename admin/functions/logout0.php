<?php
require_once('../include/auth.php');

session_destroy();

header('location:../index.php');


?>
