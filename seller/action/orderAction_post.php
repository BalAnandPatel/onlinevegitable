<?php
include '../../constant.php'; 
$orderId= $_POST["orderId"];
$status = $_POST["status"];
if($status=="Order_Accepted"){
 $verificationCode=rand(011111,999999);
}
$updatedOn="22-02-2024";
$updatedBy="seller";
$url = $URL."orderdetails/updateOrderDetails.php";
$data = array("orderId"=>$orderId, "verificationCode"=>$verificationCode,"status"=>$status, "updatedOn"=>$updatedOn, "updatedBy"=>$updatedBy);
print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
curl_close($client);
//print_r($response);
 
$result = (json_decode($response));
 
if($result->message="Deleted"){
   
 
 header('Location:../pending_order.php');
 } else
 {
  //echo "Bad";
 header('Location:../pending_order?msg='.$result->message);
 }
 
 
//print_r($result);
//  print_r($result->token);
 
?>
 
 