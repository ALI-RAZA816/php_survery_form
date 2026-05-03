<?php 
    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        session_start();
        session_unset();
        session_destroy();

        echo "Logout Successfully";
        mysqli_close($conn);

    }else{
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }
?>