<?php
declare(strict_types=1);
function is_empty(string $Ename, string $seat, int $price, string $status) {
   if (empty($Ename) || empty($seat) || empty($price) || empty($status)) {
       return true;
   } else {
       return false;
   }
}

    if(  getTicekts($pdo,$Ename)){
    }
    return false;
 }
 function set_tickets(object $pdo, string $Ename, string $seat, int $price, string $status){
    set_ticket( $pdo,  $Ename,  $seat, $price,  $status  );
 }
