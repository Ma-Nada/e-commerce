<?php
include('../../../online-shop-website/phpfiles/security.php');

if (isset($_POST['sign-in'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $psw = mysqli_real_escape_string($connection, $_POST['psw']);

    $check_query = "SELECT * FROM admin WHERE email = '$email' AND password = '$psw'";
    $query_run = mysqli_query($connection, $check_query);

    if(mysqli_num_rows($query_run) > 0)
    {
        header('location:dashboard.php');
    }
    else
    {
        echo 'error';
    }
}
?>