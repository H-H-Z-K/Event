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
</head>
<body>
<form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Name">
       
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="login">
    </form>
    <?php
        check_signup_errors();
    ?>
</body>
</html>