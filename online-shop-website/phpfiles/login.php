<?php
include('security.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $psw = mysqli_real_escape_string($connection, $_POST['psw']);

    $check_query = "SELECT * FROM user WHERE username = '$username' AND password = '$psw'";
    $query_run = mysqli_query($connection, $check_query);
$check_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$psw'";
    $query_runn = mysqli_query($connection, $check_admin);
    if (mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_assoc($query_run);
        $id = $user['id'];
        session_start();
        $_SESSION['user_id'] = $id;
        header('Location: ../connected.php');
        exit();}
    elseif(mysqli_num_rows($query_runn) > 0) {
        $user = mysqli_fetch_assoc($query_runn);
        $id = $admin['id'];
        session_start();
        $_SESSION['admin_id'] = $id;
        header('Location: ../../Admin-side/material-dashboard-master/pages/sign-in.html');
    }
    else {
        echo 'Error: Invalid username or password';
    }
    
}
?>

