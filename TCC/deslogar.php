<?php

if(!isset($_SESSION)){
    session_start();
}
unset($_SESSION['email']);
unset($_SESSION['senha']);
$_SESSION = array();
session_destroy();
header("location:Index.php");
?>