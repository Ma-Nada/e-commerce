<?php
include('dbconfig.php');
session_start();

if ($connection) {
    echo "Database Connected <br>";
} else {
    echo "Database Connection Failed";
}
?>
