<?php
//session_start();
// // define('DB_SERVER','localhost');
// // define('DB_USER','root');
// // define('DB_PASS' ,'root');
// // define('DB_NAME', 'onlinesabjimandi');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// // Check connection
// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }else 
//  //echo "Connection done!";

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'vegitabledb');

// private $host = "localhost";
// private $db_name = "vegitabledb";
// private $username = "root";
// private $password = "";
// public $conn;

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>