<<<<<<< HEAD
=======
<?php
require_once 'includes/session_config.php';
require_once 'includes/register_view.inc.php';
?>
>>>>>>> 5ea3d7a921c24621c0f3f4269d85a51b6cfbe063
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Authentication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <img src="c:\Users\user\Downloads\BLACK LOGO.JPG" alt="event manager ai" class="logo" />

            <!-- REGISTER FORM -->
            <div id="register-form">
                <h1>Register</h1>
                <form action="includes/register.inc.php" method="post">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">SIGN UP</button>
                </form>
                <div class="register-forget opacity">
                    <a href="#" onclick="showLogin()">Log In</a>
                    <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
                </div>
            </div>

            <!-- LOGIN FORM -->
            <div id="login-form" style="display: none;">
                <h1><Span>Log In</Span></h1>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">LOG IN</button>
                </form>
                <div class="register-forget opacity">
                    <a href="#" onclick="showRegister()">Register</a>
                    <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
                </div>
            </div>

            <!-- FORGOT PASSWORD FORM -->
            <div id="forgot-password-form" style="display: none;">
                <h1>Reset Password</h1>
                <form action="includes/reset-password.inc.php" method="post">
                    <input type="email" placeholder="Enter Your Email" required>
                    <button type="submit">RESET PASSWORD</button>
                </form>
                <div class="register-forget opacity">
                    <a href="#" onclick="showLogin()">Back to Login</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogin() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
            document.getElementById("forgot-password-form").style.display = "none";
        }

        function showRegister() {
            document.getElementById("register-form").style.display = "block";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("forgot-password-form").style.display = "none";
        }

        function showForgotPassword() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("forgot-password-form").style.display = "block";
        }
    </script>
</body>
</html>
=======
    <title>Document</title>
</head>
<body>
    <form action="includes/register.inc.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register">
    </form>
    <?php
        check_signup_errors();
    ?>
</body>
</html>
>>>>>>> 5ea3d7a921c24621c0f3f4269d85a51b6cfbe063
