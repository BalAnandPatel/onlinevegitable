<?php
date_default_timezone_set('Asia/Kolkata');  
class Database{
  
    // specify your own database credentials
    
    // private $host = "193.203.184.162";
    // private $db_name = "u564757906_vegitabledb";
    // private $username = "u564757906_vegitable";
    // private $password = "Glintel@2024#\$dkp";
    // public $conn;
  
    // private $host = "localhost";
    // private $db_name = "glintqnj_vegetables";
    // private $username = "glintqnj_vegetables";
    // private $password = "Glintel@2024";
    // public $conn;


    private $host = "localhost";
    private $db_name = "vegitabledb";
    private $username = "root";
    private $password = "";
    public $conn;

    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username,$this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>