<?php
include('../../../online-shop-website/phpfiles/security.php');

if(isset($_POST['edit_btn']))
{
  $id = $_POST['edit_id'];
  echo"$id";
if(isset($_POST['resignup']))
{
    echo'fonktioniert';
    echo"$id";
    $username = $_POST['rename'];
    $email = $_POST['reemail'];
    $password = $_POST['repassword'];

    $query = "UPDATE user SET username='$username', email='$email', password='$password' WHERE id=$id";
echo'execution';
    $query_run = mysqli_query($connection, $query);
}}
?>