<?php 
    include "header.php";
    if($_SESSION['role'] !== 'admin'){
        header("Location: {$HOST_NAME}/admin/login.php");
        die();
    }
?>
<div class="container">
    <div class="row" id="output"></div>
</div>