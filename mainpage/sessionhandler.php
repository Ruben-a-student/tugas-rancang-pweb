<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] =='true'){
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit;
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("Location: ../index.php");
    exit;
}
?>