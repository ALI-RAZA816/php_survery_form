<?php
    include "config.php";
    session_start();
    if($_SESSION['role'] == 'admin'){
        $query = "SELECT * FROM compliment_get";
        $result = mysqli_query($conn, $query);

        $output= '';
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $output .= "
                <div class='col-12 my-3'>
                    <div class='card'>
                        <div class='card-body'>
                            <h3 class='card-title text-dark text-center'>Your Name: {$row['name']}</h3>
                            <h4 class='card-title text-dark text-center'>Class-fellow Name: {$row['classfellow_name']}</h4>
                            <p class='card-text'><span>Message:</span> {$row['message']}</p>
                        </div>
                    </div>
                </div>
            ";
            }
        }else{
            $output = "<h2 class='text-dark my-3'>No Record found</h2>";
        }
        echo $output;
        mysqli_close($conn);
    }else{
        header("Location: {$HOST_NAME}/admin/Not-found.php");
    }
?>