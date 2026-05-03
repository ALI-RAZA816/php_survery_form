<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- fontawesome CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="/php_survery_form/css/style.css"/>
</head>
<body>
    <header class='header'>
        <div class="container">
            <div class="row">
                <div class="col-6"><h2>VibeCheck</h2></div>
                <div class="col-6 d-flex justify-content-end align-items-center buttons">
                    <?php 
                        session_start();
                        if(isset($_SESSION['firstname']) || isset($_SESSION['lastname']) || isset($_SESSION['username'])){
                            echo "<button class='me-3' id='logoutBtn'>Logout</button>";
                        }else{
                            echo "<button class='me-md-3'><a class='text-white text-decoration-none' href='admin/index.php'>Sign Up</a></button>
                                    <button><a class='text-white text-decoration-none' href='admin/login.php'>Login</a></button>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>