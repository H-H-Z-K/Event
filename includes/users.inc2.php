<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST["name"];
    $updates=[];
   
    if (!empty($_POST['email'])) {
        $updates['email'] = $_POST['emai;'];
    }
    if (!empty($_POST['password'])) {
        $updates['password'] = $_POST['password'];
    }
    if (!empty($_POST['role'])) {
        $updates['role'] = $_POST['role'];
    }
   
    try{
        require_once 'db.inc.php';
        require_once "users_model.inc.php";
        require_once "users_controller.inc.php";
        //error handeling
        $errors=[];
        
        if(!event_exist($pdo,$name)){
            $errors['not found']="event  doesnot exist";
        }
        require_once "session_config.php";
        if($errors){
            $_SESSION['errors']=$errors;
            header("Location: ../dashboard.php");
            die();
        }
        update_users($pdo, $name, $updates);
        header("Location: ../dashbaord.php?updater=success");
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
