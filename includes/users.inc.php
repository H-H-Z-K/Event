<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass= $_POST['password'];
    $role= $_POST['role'];
    try{
        require_once 'db.inc.php';
        require_once "users_model.inc.php";
        require_once "users_controller.inc.php";
        //error handeling
        $errors=[];
        if(is_empty($name,$description,$location,$date,$status)){
            $errors['empty']="All fields are required";
        }
        if(event_exist($pdo,$name)){
            $errors['taken']="Username is taken";
        }
        require_once "session_config.php";
        if($errors){
            $_SESSION['errors']=$errors;
            header("Location: ../register.php");
            die();
        }
        set_users(object $pdo,string $name, string $email, string $pass, string $role);
    
        header("Location: ../dashbaord.php?enter=success");
        $pdo=null;
        $stmt=null;
        die();  




    }   
    catch(PDOException $e){
        die("Query failed: ".$e->getMessage());
    
    }

}
else{
    header("Location: ../dashbaord.php");
    die();
}
