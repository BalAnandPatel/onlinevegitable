<?php
session_start();
include '../../constant.php';
$id= $_POST["id"]; 
$pwd= $_POST["password"];
$url = $URL."deliveryBoy/deliveryByLogin.php";
$data = array( "id" =>$id, "pwd" =>$pwd);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
//$response->message;
curl_close($client);
//print_r($response);
$result = (json_decode($response));
$_SESSION["message"]=$result->message;
if($result->message=="Successfull"){

 $_SESSION["JWT"]="123";
 $_SESSION["id"]=$id;
 $_SESSION["pass"]=$pwd;
 header('Location:../change-password.php');
} else
{
 header('Location:../index.php?msg='.$result->message);
}

// function giplCurl($api,$postdata){
//    $url = $api; 
//     $client = curl_init($url);
//     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
//     $response = curl_exec($client);
//   //print_r($response);
//    return $result = json_decode($response);
//    //print_r($response);
// }

?>