<?php
    session_start(); 
    if ((isset($_GET['doLogoff'])) &&($_GET['doLogoff']=="true")) {
    // to fully log out a visitor we need to clear the session variables
    session_unset();
    session_destroy();

	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<title>mmARTHouse - Logoff</title>';
	echo '<meta charset="utf-8">';
	echo '<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
	echo '</head>';
    echo '<body>';
    echo '<h3 style="text-align:center;">You have been logged off</h3><h5 style="text-align:center;"><a href="./">Click here to login</a></h5>';
    echo '</body>';
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