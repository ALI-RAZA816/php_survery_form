<?php
    include "config.php";
    session_start();
    if($_SESSION['role'] == 'admin'){

        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        $output1 = '';
        if(mysqli_num_rows($result) > 0){
                $output1 .= "
                <table class='table table-striped table-bordered '>
                    <thead>
                        <tr>
                            <th class='tableheadbg text-white text-center text-nowrap'>Sr.no</th>
                            <th class='tableheadbg text-white text-center text-nowrap'>First_name</th>
                            <th class='tableheadbg text-white text-center text-nowrap'>Last_name</th>
                            <th class='tableheadbg text-white text-center text-nowrap'>Email</th>
                            <th class='tableheadbg text-white text-center text-nowrap'>User Type</th>
                            <th class='tableheadbg text-white text-center text-nowrap'>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while($row = mysqli_fetch_assoc($result)){
                        $output1 .= "<tr>
                            <th class='text-center text-wrap'>{$row['id']}</th>
                            <td class='text-center text-wrap'>{$row['first_name']}</td>
                            <td class='text-center text-wrap'>{$row['last_name']}</td>
                            <td class='text-center text-wrap'>{$row['email']}</td>
                            <td class='text-center text-wrap'>{$row['user_type']}</td>
                            <td class='text-center text-wrap'>
                                <i class='fa-solid me-3 fa-edit' data-id='{$row['id']}'></i>
                                <i class='fa-solid fa-trash' data-id='{$row['id']}'></i>
                            </td>
                        </tr>";
                        }
                    $output1 .= "</tbody></table>";
        }else{
                echo "<h2>No Record found</h2>";
        }

        echo $output1;
        mysqli_close($conn);
    }else{
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }
?>