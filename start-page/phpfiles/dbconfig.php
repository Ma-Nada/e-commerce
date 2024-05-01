<?php
echo'la vie en rose';
$connection = mysqli_connect('localhost','root','','mini-projet');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

