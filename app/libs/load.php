<?
include_once 'includes/Mic.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';


function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";

}

function validate_credentials($username , $password){
    if($username == "g@gmail.com" and $password == "password"){
        return true;
    }
    return false;
}


?>