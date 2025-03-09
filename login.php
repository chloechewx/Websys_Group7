<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "inc/head.inc.php";
    ?>
</head>

<body>
<header class="site-header">
    <div class="header-bg">
        <img src="images/placeholder.jpg" alt="Header background" class="header-bg-img">
    </div>
    <?php
    include "inc/navbar.inc.php";
    ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 75svh;">
        <div class="card p-4" id="login-form" style="width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form action="login_process.php" method="POST">
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Login</button>
            </form>
            <div class="d-flex justify-content-center mt-3">
                <a href="forgot_password.php" class="text-dark mx-2">Forgot Password?</a>
                <a href="register.php" class="text-dark mx-2">Register</a>
            </div>
        </div>
    </div>
</header>
    
</body>