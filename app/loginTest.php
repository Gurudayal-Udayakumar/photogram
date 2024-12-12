<?php

include 'libs/load.php';
Session::start();

$user = "hari";
$pass = "hari";

$result = User::login($user,$pass);
if($result){
    echo"Login successful ,$result[username]";
}
else{
    echo"Login failed";
}