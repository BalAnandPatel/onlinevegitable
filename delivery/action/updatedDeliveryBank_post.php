<?php
include '../../constant.php';

/////////////////////

$id = $_POST["id"];
$accountHolderName = $_POST["accountHolderName"];
$accountNo = $_POST["accountNo"];
$bankName = $_POST["bankName"];
$ifscCode = $_POST["ifscCode"];
$url = $URL . "deliveryBoy/updateDeliveryBank.php";
$data = array("id" => $id, "accountNo" => $accountNo, "bankName" => $bankName, "ifscCode" => $ifscCode, "accountHolderName" => $accountHolderName);
print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
curl_close($client);
print_r($response);

$result = (json_decode($response));

if ($result->message = "Updated") {


  header('Location:../deliveryBank.php'); 
} else {
  //echo "Bad";
  header('Location:../deliveryBank?msg='.$result->message);
}


//print_r($result);
//  print_r($result->token);
