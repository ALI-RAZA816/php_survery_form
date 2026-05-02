<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Record deleted successfully";
        die();
    }

    mysqli_close($conn);
}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}

?>