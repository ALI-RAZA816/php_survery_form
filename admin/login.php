<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="/firstexperience/css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row px-3 vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4 py-4 p-md-4" id="loginForm">
            <h2>Login</h2>
            <form action="">
                <div class='mb-2'>
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" id='loginemail'>
                    <span id="loginEmailErr"></span>
                </div>
                <div class='mb-2'>
                    <label for="" class="form-label">Password</label>
                    <div style="position:relative;">
                        <input type="password" class="form-control password" id='loginpassword'>
                        <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                    <span id="loginPssErr"></span>
                </div>
                <button type='submit' class='text-capitalize' id="loginButton">Login</button>
                <p class='text-center mt-2 m-0'>Create new account? <span><a href="index.php" class='text-decoration-none' id='signup'>Sign Up</a></span></p>
            </form>
        </div>
    </div>
</div>
<script src="/firstexperience/js/jquery.js"></script>
<script src="/firstexperience/js/script.js"></script>
</body>
</html>