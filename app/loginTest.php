<?php

include 'libs/load.php';
Session::start();

$user = "hari";
$pass = "hari";
$result = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session destroyed , <br><a href='loginTest.php'>Login Again</a>");
}

if(Session::get('is_loggedin')){
    $userdata = Session::get('session_user');
    print("Welcome back , $userdata[username]");
    $result = $userdata;
}else{
    printf("No session found , try login now.");
    $result = User::login($user,$pass);
    if($result){
        echo"Login successful ,$result[username]";
        Session::set('is_loggedin',true);
        Session::set('session_user',$result);
    }
    else{
        echo"Login failed";
    }
}
echo <<<EOL
<br><a href = "loginTest.php?logout">Logout</a>
EOL;