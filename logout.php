<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    session_start();
    session_unset();
    session_destroy();

    echo "Logout Successfully";
    mysqli_close($conn);
    }else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}
?>