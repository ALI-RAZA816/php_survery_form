<?php 
    include "header.php";
    include "config.php";
    if($_SESSION['role'] !== 'admin'){
        header("Location: {$HOST_NAME}/index.php");
        die();
    }
?>
<div class="container">
    <div class="row" id="output"></div>
</div>