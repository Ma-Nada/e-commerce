<?php
include('dbconfig.php');
session_start();

if ($connection) {
    echo "Database Connectiert";
} else {
    echo "Database Connection Failed";
}
?>
