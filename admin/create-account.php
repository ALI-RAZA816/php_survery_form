<?php 
include "config.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $FIRST_NAME = $_POST['first_name'];
    $LAST_NAME = $_POST['last_name'];
    $EMAIL = $_POST['email'];
    $PASSWORD = md5($_POST['password']);
    
    $query1 = "SELECT * FROM users WHERE first_name = '{$FIRST_NAME}'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM users WHERE last_name = '{$LAST_NAME}'";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM users WHERE email = '{$EMAIL}'";
    $result3 = mysqli_query($conn, $query3);

    if(mysqli_num_rows($result1) > 0){
        echo "Name already exists";
        die();
    }
    if(mysqli_num_rows($result2) > 0){
        echo "Last_name already exists";
        die();
    }
    if(mysqli_num_rows($result3) > 0){
        echo "Email already exists";
        die();
    }

    $query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('{$FIRST_NAME}', '{$LAST_NAME}', '{$EMAIL}', '{$PASSWORD}')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Successfully uploaded";
    }else{
        echo "Your action can't recorded";
    }

    mysqli_close($conn);

}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}

?>