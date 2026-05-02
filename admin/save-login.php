<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    $loginemail = $_POST['loginemail'];
    $loginpss = md5($_POST['loginpss']);
    
    $query = "SELECT * FROM users WHERE email = '{$loginemail}' && password = '{$loginpss}'";
    $result = mysqli_query($conn, $query);

    $query1 = "SELECT * FROM users WHERE email = '{$loginemail}'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM users WHERE password = '{$loginpss}'";
    $result2 = mysqli_query($conn, $query2);
    
    if(mysqli_num_rows($result1) === 0){
        echo "Invalid Email";
        die();
    }
    if(mysqli_num_rows($result2) === 0){
        echo "Invalid Password";
        die();
    }


    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['firstname'] = $row['first_name'];
            $_SESSION['lastname'] = $row['last_name'];
            $_SESSION['username'] = strtolower($_SESSION['firstname']) . strtolower($row['last_name']);
            $_SESSION['role'] = $row['user_type'];

            echo "success";
        }

    }

    mysqli_close($conn);
}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}

?>