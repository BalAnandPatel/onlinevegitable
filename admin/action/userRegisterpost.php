<?php
session_start();
include '../../constant.php';
$name=trim(strtoupper($_POST["name"]));
$email=strtoupper($_POST["email"]);
$password=$_POST["password"];
$userName=$_POST["email"];
$mobile=$_POST["mobile"];
$createdOn=date('Y-m-d h:i:sa');
$createdBy= "User";
$url = $URL . "user/insert_user.php";
//$url = $URL . "deliveryBoy/insertDelivery.php";
//$url_read_maxId=$URL . "registration/read_maxId.php";

$data = array(

  "name" => $name,
  "email" => $email,
  "userId" => $email,
  "userName" => $userName,
  "mobile" => $mobile,
  "password" => $password,
  "createdOn"=>$createdOn,
  "createdBy"=>$createdBy);

 //print_r($data);
 $postdata = json_encode($data);
//echo $url;
//print_r($postdata);
$result_registration=url_encode_Decode($url,$postdata);


// address table intimetion by userid

// $urladd = $URL . "address/insertAddress.php";
// //$url = $URL . "deliveryBoy/insertDelivery.php";
// //$url_read_maxId=$URL . "registration/read_maxId.php";
// $data_add = array(


//   "userId" => $email,
//   "createdOn"=>$createdOn,
//   "createdBy"=>$createdBy);

// $postdata_add = json_encode($data_add);
// $client_add = curl_init($urladd);
// curl_setopt($client_add, CURLOPT_POSTFIELDS, $postdata_add);
// curl_setopt($client_add, CURLOPT_CONNECTTIMEOUT, 0); 
// curl_setopt($client_add, CURLOPT_TIMEOUT, 4); //timeout in seconds
// curl_setopt($client_add,CURLOPT_RETURNTRANSFER,true);
// $responseadd = curl_exec($client_add);
// //print_r($responseadd);
// curl_close($client_add);
// $result_add = (json_decode($responseadd));
// //print_r($result_add);

  if($result_registration->message=="Successfull"){

  /* --- get maximum userid -----*/

      $_SESSION["registration"] = $result_registration->message;
        header('Location:../../account.php');
    }
     
   
else{
   header('Location:../registration.php?msg=Failed');
}
function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
return $result = json_decode($response);
}
?>