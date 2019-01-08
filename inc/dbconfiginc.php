<?php
    const DB_HOST = "localhost"; // set database host
    const DB_USER = "mmartqlz"; // set database user
    const DB_PASS = "MMArt@Afrihost123"; // set database password
    const DB_NAME = "mmartqlz_cms"; // set database name
    $connection = new mysqli(DB_HOST,DB_USER,DB_PASS); 
    /////////////////////////////////////////////////////////////////////////////////////////////////////

    if (!$connection->select_db(DB_NAME)) {die ("lsdcdb selection failed<br>".$connection->error);}
?>