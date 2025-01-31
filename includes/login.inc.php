<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $pass=$_POST['password'];
        try{
            require_once 'db.inc.php';
            require_once 'login_model.inc.php';
            require_once 'login_controller.inc.php';

        }
        catch(PDOException $e){
            die("Query failed: ".$e->getMessage());
        
        }

    }
    else{
        header('Location: ../login.php');
        die();
    }