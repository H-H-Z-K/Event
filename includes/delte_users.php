<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = intval($_GET['id']); // Sanitize input
    echo "Event ID: " . $eventId;
    try{
        require_once 'db.inc.php';
        require_once "users_model.inc.php";
        require_once "users_controller.inc.php";
    }
    catch(PDOException $e){
        die("Query failed: ".$e->getMessage());
    
    }
    delete_users( $pdo, $id);
    header("Location: ../dashbaord.php?delete=success");
    $pdo=null;
    $stmt=null;
    die(); 

} else {
    echo "Invalid Event ID.";
}
?>