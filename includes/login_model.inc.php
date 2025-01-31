<?php
declare(strict_types=1);
function get_user(object $pdo,string $name,string $pass){
    $quer="SELECT * FROM users WHERE name=:name AND password=:pass";
    $stmt=$pdo->prepare($quer);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
