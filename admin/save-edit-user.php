<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    $editID = $_POST['editID'];;
    $efirstname = $_POST['efirstname'];
    $elastname = $_POST['elastname'];
    $eemail = $_POST['eemail'];
    $userrole = $_POST['userrole'];
    $query = "UPDATE users SET first_name = '{$efirstname}', last_name = '{$elastname}', email = '{$eemail}', user_type = '{$userrole}' WHERE id = {$editID}";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Successfully updated";
    }else{
        echo "error";
    }

    mysqli_close($conn);
}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}
?>