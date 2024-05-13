

<?php

include('security.php');

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($_POST['email']);
    $psw =mysqli_real_escape_string($connection, $_POST['psw'];);

    $check_query = "SELECT * FROM user WHERE email = '$email' AND password = '$psw' ";
            $query_run = mysqli_query($connection, $check_query);
            echo'the fetch is executed';
        }
  if(mysqli_num_rows($query_run) > 0)
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