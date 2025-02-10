<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["event_name"], $_POST["seat_number"], $_POST["price"], $_POST["status"])) {
        require_once 'db.inc.php';
        require_once "tickets_model.inc.php";
        require_once "tickets_controller.inc.php";
        
        $Ename = trim($_POST["event_name"]);
        $seat = trim($_POST["seat_number"]);
        $price = (int) $_POST["price"];
        $status = trim($_POST["status"]);

        $errors = [];

        if (empty($Ename) || empty($seat) || empty($price) || empty($status)) {
            $errors['empty'] = "All fields are required";
        }
        if (ticket_exist($pdo, $Ename)) {
            $errors['taken'] = "Event already has tickets";
        }
        
        require_once "session_config.php";
        if ($errors) {
            $_SESSION['errors'] = $errors;
            header("Location: ../tickets.php");
            die();
        }

        set_tickets($pdo, $Ename, $seat, $price, $status);
        header("Location: ../tickets.php?enter=success");
        exit();
    } else {
        echo "Missing form fields!";
    }
} else {
    header("Location: ../tickets.php");
    exit();
}
