<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $HOST_NAME = "http://localhost/firstexperience";
    $conn = mysqli_connect("localhost","root","","compliment");
}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}
?>