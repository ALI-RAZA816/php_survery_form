<?php 
    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }
?>