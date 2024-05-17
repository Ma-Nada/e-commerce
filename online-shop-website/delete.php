<?php

include('./phpfiles/security.php');


if(isset($_POST['delete_btn']))
{
    $prod_id = $_POST['prod_id'];
   
    $query = "DELETE FROM `command-line` WHERE prod_id = '$prod_id' AND comd_nbr = 1";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ./cart.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}
?>