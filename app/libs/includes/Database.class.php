<?php
class Database{
    public static $conn;

    public static function getConnection(){
        if(Database::$conn == null){
            $servername = "mysql.selfmade.ninja:3306";
            $username = "Gurudayal_2003";
            $password = "ramsantha";
            $dbname = "Gurudayal_2003_photogram";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }else{
                print("Establishing new connection....");
                Database::$conn = $conn;
                return Database::$conn;
            }
        

        }else{
            print("Returning existing connection");
            return Database::$conn;
        }
    }
}


?>