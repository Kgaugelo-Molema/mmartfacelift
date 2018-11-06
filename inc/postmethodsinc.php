<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**********LOGIN ********************/
        if (isset($_POST["username"])) {
            $name = $_POST["username"];
            $password = md5($_POST["password"]);
            $privileges = isset($_SESSION["Privileges"]) ? $_SESSION["Privileges"] : 0;
            if ($name == '' || $password == '') {
                $msg = "You must enter all fields";
            } else {
                $sql = "SELECT * FROM members WHERE email = '$name' AND (password = '$password' OR password = '')";
                
                if (!$connection->query($sql)) {
                    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
                    exit;
                }
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $_SESSION["Privileges"] = $row["Privileges"];                
                    break;
                }
                $_SESSION["user"] = $name;
                $loc = isset($_POST['location']) ? $_POST['location'] : "./";
                header("Location: $loc");
                exit;
                }
                $msg = "Username and password do not match";
            }
        }
        /**************SIGN UP****************/
        if (isset($_POST["newPassword"])) {
            $email = $_POST["email"];
            $newPassword = md5($_POST["newPassword"]);
            $confirmPass = md5($_POST["confirmPass"]);

            $sqltext = "SELECT * FROM members WHERE name = '$email' "; 
            $result = $connection->query($sqltext);
            if (!$connection->query($sqltext)) {
                echo "$sqltext";
                die("Error: Failed to return data from table members " . $connection->error . "<br>");
            }
            if ($result->num_rows > 0) {
                echo '<h3>User name already exists.</h3><a href="./">Click here</a> to return to the home page.<br>';
                exit;
            }
            else {
                $sqltext = "INSERT INTO members (name, email, password, privileges) VALUES "; 
                $inputvalues = "'" . $_POST["email"] . "','" . $_POST["email"] . "','" . md5($_POST["newPassword"]) . "', 2"; 
                $sqltext = "$sqltext ($inputvalues)"; 

                if (!$connection->query($sqltext)) { 
                    echo "$sqltext<br>";
                    die("Error: Failed to insert data into table members " . $connection->error . "<br>"); //Modify
                }
                echo '<h3>User created successfully.</h3><a href="./">Click here</a> to login.<br>';
                exit;
            }
        }
        /**************************************/
    }
?>