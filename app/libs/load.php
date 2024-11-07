<?

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";

}

function validate_credentials($username , $password){
    if($username == "g@gmail.com" and $password == "password"){
        return true;
    }
    return false;
}

function signup($user,$pass,$email,$phone)
{
    $servername = "mysql.selfmade.ninja:3306";
    $username = "Gurudayal_2003";
    $password = "ramsantha";
    $dbname = "Gurudayal_2003_photogram";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
    $error = false;
    if ($conn->query($sql) === TRUE) {
      $error = false;
        }
     else {
      // echo "Error: " . $sql . "<br>" . $conn->error;
      $error = $conn->error;
    }
    
    $conn->close();
    return $result;
}
?>