<?php

$connection = mysqli_connect('localhost','root','','mini-projet');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo'connexion';
?>