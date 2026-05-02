<?php 
    include "config.php";
    include "header.php";
    if($_SESSION['role'] !== 'admin'){
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }

    mysqli_close($conn);
?>
<div class="container">
    <div class="row">
        <h2 class='mt-5' style="color:#FB9B8F !important;font-weight:bold;">Users</h2>
        <div class="col mt-3 table-responsive" id='userOutput'></div>
    </div>
    <div class="row" id='formContainer'>
        <i class='fa-solid fa-xmark' id='cross'></i>
        <div class="col border border-primary d-flex justify-content-center align-items-center vh-100">
            <div class="col-12 col-md-3 py-2 p-4 bg-white" id="eidtform">
                <h2 class='text-center' style="color:#FB9B8F !important;font-weight:bold;">Edit user</h2>
                <form id="showoutput"></form>
            </div>
        </div>
    </div>
</div>