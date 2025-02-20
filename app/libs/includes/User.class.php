<?php



class User{
    private $conn;
    private static $salt = "randomcharacters";
    public static function signup($user,$pass,$email,$phone)
    {

      $pass = md5(strrev(md5($pass))).User::$salt;
    
      $conn = Database::getConnection();
        
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
        
        //$conn->close();
        return $result;
    }

    public static function login($user,$pass){
      $pass = md5(strrev(md5($pass))).User::$salt;
      $query = "SELECT * FROM `auth` WHERE `username` = 'hari'";
      $conn = Database::getConnection();
      $result = $conn->query($query);
      if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if($row['password'] == $pass){
          return $row;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }
}