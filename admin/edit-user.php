<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include "config.php";
    $userid = $_POST['userID'];
    $query = "SELECT * FROM users WHERE id = {$userid}";
    $result = mysqli_query($conn, $query);

    $output = "";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<div class='mb-2'>
                        <label for='' class='form-label'>First Name</label>
                        <input type='hidden' class='form-control' value='{$row['id']}' id='eid'>
                        <input type='text' class='form-control' value='{$row['first_name']}' id='efirst_name'>
                    </div>
                    <div class='mb-2'>
                        <label for='' class='form-label'>Last Name</label>
                        <input type='text' class='form-control' value='{$row['last_name']}' id='elast_name'>
                    </div>
                    <div class='mb-2'>
                        <label for='' class='form-label'>Email</label>
                        <input type='email' class='form-control' value='{$row['email']}' id='eemail'>
                    </div>
                    <div class='mb-2'>
                        <label for='' class='form-label'>Role</label>
                        <select name='' class='form-select' id='user_role'>";
                        if($row['user_type'] == "user"){
                            $output .= "<option value='admin'>Admin</option>
                                        <option selected value='user'>User</option>";
                        }else{
                            $output .= "<option select value='admin'>Admin</option>
                                        <option value='user'>User</option>";
                        }
                    $output .= "</select>
                    </div>
                    <button type='submit' class='text-capitalize' id='editbutton'>Edit</button>";
        }
    }
    echo $output;
    mysqli_close($conn);
}else{
    header("Location: http://localhost/firstexperience/admin/Not-found.php");
}
?>