<?php

include('security.php');

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $psw =$_POST['psw'];
    /*$cpsw =$_POST['cpsw'];*/

    $check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' ";
    $query_run= mysqli_query($connection, $check_query);
    $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$psw')";
            $query_run = mysqli_query($connection, $query);
            echo'the include is executed';
        }
   /* if(mysqli_num_rows($query_run) > 0)
    {
        $_SESSION['status']= "Email or username already exists";
        $_SESSION['status_code'] = "error";
        header('Location: signup.php');
    }
    else
    {
        if($psw === $cpsw)
        {
            $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$psw')";
            $query_run = mysqli_query($connection, $query);
            echo'the include is executed';
            
            if($query_run)
            {
                $_SESSION['status'] = " Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: signup.php');
            }
            else 
            {
                $_SESSION['status'] = " Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: signup.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: signup.php');  
        }
    }
    }*/
?>