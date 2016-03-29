<?php

$db_link = mysqli_connect("db.msjsl.com", "msjsl_db", "JG*Wv23!kqV7#1kKmN", "msjsl_live");

if (!$db_link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>