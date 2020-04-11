<?php
include('../index.php');

function method($arg)
{
//    $file = file_get_contents($arg, true);
//    echo "FILE_CONTENTS: $file";

    if (preg_match("coming", $arg)) {
        return true;
    } else {
        return false;
    }
}
?>

<?php if (method($url) == false) echo "HACKED!!!" ?>
<?php //if (method("../slider_export.txt") == false) echo "HACKED!!!" ?>
