<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 24.01.2019
 * Time: 13:00
 */

function connect_db($host, $user, $pass, $db)
{
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo 'ERROR: Unable to connect to MYSQL' . PHP_EOL;
        echo mysqli_connect_error();
        exit;
    }
    return $conn;
}