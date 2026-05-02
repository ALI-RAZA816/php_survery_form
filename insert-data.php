<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    $yourname = $_POST['yourname'];
    $classfellowname = $_POST['classfellowname'];
    $textarea = $_POST['textarea'];
    $query = "INSERT INTO compliment_get (name, classfellow_name, message) VALUES ('{$yourname}','{$classfellowname}', '{$textarea}')";

    $result = mysqli_query($conn, $query);
    if($result){
        echo "Successfully Uploaded";
    }else{
        echo 0;
    }

    mysqli_close($conn);
    }else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}
?>