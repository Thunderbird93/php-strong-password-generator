<?php
function pswMind($num){
    $psw = '';
    $accepted = '!?&%$<>^+-*/()[]{}@#_=0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    
    while (strlen($psw)<$num){
        $psw.=$accepted[random_int(0, strlen($accepted)-1)];
    }
    return $psw;
}

if(isset($_GET['numero'])){
    echo pswMind($_GET['numero']);
}