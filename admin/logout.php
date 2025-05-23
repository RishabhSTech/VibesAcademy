<?php

session_start();
unset($_SESSION['loggedin']);
unset($_SESSION['username']);
$_SESSION['loggedin'] = false;

session_destroy();
header('Location: index.php');

?>