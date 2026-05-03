<?php 
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        include "config.php";
        session_start();
        session_unset();
        session_destroy();

        echo "Logout Successfully";
        mysqli_close($conn);
        }else{
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }
?>