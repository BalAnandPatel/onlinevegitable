<?php
include '../../constant.php';

/////////////////////

$id= $_POST["sellerId"];
$counterName= $_POST["counterName"];
$pan= $_POST["pan"];
$aadhar= $_POST["aadhar"];
$gst= $_POST["gst"];
$email= $_POST["email"];
$phoneNo= $_POST["phoneNo"];
$updatedBy= "Admin";
$updatedOn= date('Y-m-d h:i:sa');
$url = $URL."seller/update_seller.php";
$data = array("id"=>$id,"counterName"=>$counterName,"pan"=>$pan, "email"=>$email, "aadhar"=>$aadhar,"gst"=>$gst,"phoneNo"=>$phoneNo,"updatedOn"=>$updatedOn,"updatedBy"=>$updatedBy);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
curl_close($client);
print_r($response);

$result = (json_decode($response));
//print_r($response);
//echo $result->message;
if($result->message="successfully"){

  session_start();
  $_SESSION['updatedok']=$result->message;

    /* --- get maximum userid -----*/
  
       $data_maxId=$pan;
      $maxId_postdata = json_encode($data_maxId);
  $target_dir = "../img/seller"."/".$pan;
  $path="../img/seller"."/".$pan;
  if (!is_dir($path)){
  mkdir($path, 0777, true);
  //echo "directory created";
  }
  else{ 
   // echo "unable to create directory";
  }
  $target_file1 = $target_dir ."/". $pan.".png";
  $target_file2 = $target_dir ."/". $pan."_counter.png";
  //$target_file_thumb = $target_dir .$id."/profile/". $id."_thumb".".png";
  
  $uploadOk = 1;
  $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
  $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
  //$imageFileTypeThumb = strtolower(pathinfo($target_file_thumb,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["upload"]["tmp_name"]);
  // $check_thumb = getimagesize($_FILES["fileUploadThumb"]["tmp_name"]);
  
    if($check !== false) {
      
      $uploadOk = 1;
    }
     else {
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file1) && file_exists($target_file2)) {
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["upload"]["size"] > 5000000) {
   
    $uploadOk = 0;
  }
  {
    
    $uploadOk = 1;
  }
  
  // Allow certain file formats
  if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
  && $imageFileType1 != "gif") && ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
  && $imageFileType2 != "gif")){
  
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  
  } else {
  
    if(move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["shopupload"]["tmp_name"], $target_file2)) {
      //echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
     // echo "The file ". htmlspecialchars( basename( $_FILES["fileUploadThumb"]["name"])). " has been uploaded.";
      //$_SESSION["registration"] = "File uploaded succesfully.";
      header('Location:../update-personal.php');
    }
     else {
      //echo "Sorry, there was an error uploading your file.";
    
    //$_SESSION["registration"] = "Sorry, there was an error uploading your file.";
    header('Location:../updated-personal.php');
  }
  }   
  
  }
  else{
    header('Location:../update-personal.php?msg='.$result->message);
  }


//print_r($result);
//  print_r($result->token);

?>