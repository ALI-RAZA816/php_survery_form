<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="/php_survery_form/css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row px-2 vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4 py-4 p-md-4" id="signForm">
            <h2>Sign up</h2>
            <form action="">
                <div class='mb-2'>
                    <label for="" class="form-label">First Name</label>
                    <input type="text" class="form-control" id='first_name'>
                    <span class='nameErr'></span>
                </div>
                <div class='mb-2'>
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id='last_name'>
                    <span class='lastErr'></span>
                </div>
                <div class='mb-2'>
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" id='email'>
                    <span class='emailErr'></span>
                </div>
                <div class='mb-2'>
                    <label for="" class="form-label">Password</label>
                    <div style="position:relative;">
                        <input type="password" class="form-control password" id='password'>
                        <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                    <span class='passwordErr'></span>
                </div>
                <span class='actionErr'></span>
                <button type='submit' class='text-capitalize' id="signupButton">Sign up</button>
                <p class='text-center mt-2 m-0'>Already have an account? <span><a href="login.php" class='text-decoration-none' id='loginpage'>Login</a></span></p>
            </form>
        </div>
    </div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>
</body>
</html>