<?php
    $label = '<li><label for="modal-toggle">Login / Sign up ' . $msg . ' </label></li>';
    if (isset($_SESSION["user"])) 
        $label = '<li><a href="./?doLogoff=true">Logoff ' . $sessionUser . ' </a></li>';
    $label .= $privileges == 2 ? '<li><label for="modal-toggle">Admin</label></li>' : '';
?>