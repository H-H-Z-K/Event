<?php
require_once 'includes/session_config.php';
require_once 'includes/register_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    
</head>
<body>
    <div class="container">
        <div class="form-box" id="form-container">
            <img src="c:\Users\user\Downloads\BLACK LOGO.JPG" alt="event manager ai" class="logo" />

            <!-- REGISTER FORM -->
            <div id="register-form">
                <h1>Register</h1>
                <form action="includes/register.inc.php" method="post">
                    <input type="text" name="name" placeholder="First Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">SIGN UP</button>
                </form>
                <div class="register-forget opacity">
                    <a href="login.php" onclick="showLogin()">Log In</a>
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
                    <a href="#" onclick="showRegister()">Back to Register</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogin() {
            fetch("login.php")
                .then(response => response.text())
                .then(data => {
                    document.getElementById("form-container").innerHTML = data;
                })
                .catch(error => console.error('Error loading login page:', error));
        }

        function showRegister() {
            document.getElementById("register-form").style.display = "block";
            document.getElementById("forgot-password-form").style.display = "none";
        }

        function showForgotPassword() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("forgot-password-form").style.display = "block";
        }
   
   </script>
   <?php
   check_signup_errors();
   ?>
</body>
</html>
