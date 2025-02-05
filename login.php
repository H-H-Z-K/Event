<?php
require_once 'includes/session_config.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
    <div class="container">
        <div class="form-box" id="form-container">
            <img src="images/BLACK LOGO.JPG" alt="event manager ai" class="logo" />

            <!-- LOG IN FORM -->
            <div id="login-form">
                <h2>LOG IN</h2>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="password" name="password" placeholder="Password">
                    <button onclick ="showLogin()">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showLogin() {
            fetch("login.php")
                .then(response => {
                    if (!response.ok) {
                        throw new Error("HTTP error! Status: " + response.status);
                    }
                    return response.text();
                })
                .then(data => {
                    document.getElementById("form-container").innerHTML = data;
                })
                .catch(error => console.error('Error loading login page:', error));
        }
    </script>

    <?php
        check_signup_errors();
    ?>
</body>
</html>
