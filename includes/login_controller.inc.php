<?php
declare(strict_types=1);
function is_empty(string $name, string  $pass){
    if(empty($name) || empty($pass)){
        return true;
    }
    else{
        return false;
    }
}


function is_user_exists(object $pdo, string $name,string $pass){
    if(get_user( $pdo, $name,$pass)){
        return true;
    }
    else{
    return false;
    }
}
function login_user(object $pdo, string $name, string $pass){
    if(get_user( $pdo, $name,$pass)){
        return true;
    }
    else{
    return false;
    }

}
