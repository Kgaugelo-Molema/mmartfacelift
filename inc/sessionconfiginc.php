<?php
    session_start(); 
    if ((isset($_GET['doLogoff'])) &&($_GET['doLogoff']=="true")) {
    // to fully log out a visitor we need to clear the session variables
    session_unset();
    session_destroy();
    echo '<h3>You have been logged off</h3><a href="./">Click here to login</a>';
    exit;
    } 

    $sql = '';
    $msg = "";
    $sessionUser = '';
    $privileges = 0;  
    if (isset($_SESSION["user"])) {
    $sessionUser = $_SESSION["user"];
    $privileges = $_SESSION["Privileges"];
    }
?>