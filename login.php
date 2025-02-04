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
    
    <!-- Internal CSS styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url('images/event manager.webp') no-repeat center center/cover;
            display: grid;
            place-items: center;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            padding-top: 100px;
        }

        .container {
            padding-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
            background: rgba(255, 255, 255, 0.858);
            border-radius: 10px;
            text-align: center;
            width: 230px;
            height: 350px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
        }

        .logo {
            width: 130px;
            height: auto;
            display: block;
            margin: 0 auto 20px; 
            margin-top: 1px;
            margin-bottom: 1px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: auto;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background: black;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover {
            background: #333;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Focus input effect */
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #5b9bd5;
            outline: none;
        }

        /* Mobile responsiveness */
        @media (max-width: 480px) {
            .container {
                width: 80%;
                height: auto;
            }
        }
    </style>
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
