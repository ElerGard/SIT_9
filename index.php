<?php

$StatusCode = $_GET['code'];
switch($StatusCode)
{
    case '400':
        header("Location: 400.php");
    break;

    case '500':
        header("Location: 500.php");
    break;

    case '503':
        header("Location: 503.php");
    break;
}
?>

