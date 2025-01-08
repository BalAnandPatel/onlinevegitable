<?php
session_start();
//echo "hello";
//echo $_SESSION[""];
// echo $_SESSION["abc"];
// echo $_SESSION["pincode"];
include '../../constant.php';
include_once '../../api/objects/curl.php';
require '../../api/php-jwt/src/JWT.php';
require '../../api/php-jwt/src/ExpiredException.php';
require '../../api/php-jwt/src/SignatureInvalidException.php';
require '../../api/php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$pwd = $_POST["password"];
$email = $_POST["email"];
$pincode = $_POST["pincode"];
$url = $URL . "user/read_userById.php";
$urlupdatedpincode = $URL . "user/updateUserPincode.php";
$data = array("password" => $pwd, "email" => $email);
print_r($data);
$postdata = json_encode($data);
$readCurl = new Curl();
$response = $readCurl->createCurl($url, $postdata, 0, 10, 1);
$result = (json_decode($response));

$datapin = array("pincode" => $pincode, "email" => $email);
print_r($datapin);
$postdatapin = json_encode($datapin);
$readCurlpin = new Curl();
$responsepin = $readCurl->createCurl($urlupdatedpincode, $postdatapin, 0, 10, 1);
$resultpin = (json_decode($responsepin));
 //print_r($result);
if ($result->message == "Successfull") {
    $decoded = JWT::decode($result->jwt, $SECRET_KEY, array('HS256'));

    $currentTime = time();
    if (($decoded->exp) > $currentTime) {
         $_SESSION['decoded'] = $decoded;
         //print_r($decoded);
         $_SESSION["JWT"] = $result->jwt;
         $_SESSION["email"] = $decoded->data->email;
         $_SESSION["phoneNo"] = $decoded->data->phoneNo;
         $_SESSION["name"] = $decoded->data->name;
        
    } 
    {
        //print_r($_SESSION['decoded']);
        header('Location:../../index.php');
    }
}
else {
    header('Location:../../account.php?msg=Username or password is incorrect' );
}
?>