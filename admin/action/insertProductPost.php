<?php
include '../../constant.php';
$skuId=trim(strtoupper($_POST["skuId"]));
$sellerId=trim(strtoupper($_POST["sellerId"]));
$name=strtoupper($_POST["name"]);
$description=strtoupper($_POST["description"]);
$shippingCharge=strtoupper($_POST["shippingCharge"]);
$status=strtoupper($_POST["status"]);;
$price=strtoupper($_POST["price"]);
$quantity=strtoupper($_POST["quantity"]);
$color=implode(",",$_POST['color']);
$size=implode(",",$_POST['size']);
$discount=strtoupper($_POST["discount"]);
$categoriesId=strtoupper($_POST["categoriesId"]);
$createdOn= date('Y-m-d h:i:sa');
$createdBy= "Admin";
$url = $URL . "product/insertproduct.php";

//$url = $URL . "deliveryBoy/insertDelivery.php";
//$url_read_maxId=$URL . "registration/read_maxId.php";
$data = array(
  "sellerId" => $sellerId,
  "skuId" => $skuId,
  "quantity" => $quantity,
  "name" => $name,
  "description" => $description,
  "status" => $status,
  "price" => $price,
  "discount" => $discount,
  "categoriesId" => $categoriesId,
  "createdOn"=>$createdOn,
  "createdBy"=>$createdBy);

  $postdata = json_encode($data);
  //print_r($postdata);
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0); 
  curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  curl_close($client);
  //print_r($response);
  $result= (json_decode($response));


 // get Max Product Id   

 $urlmax = $URL . "product/readproductMaxId.php";
 $datamax=array();
 $postdatamax = json_encode($datamax);
 $clientmax = curl_init($urlmax);
 curl_setopt($clientmax, CURLOPT_POSTFIELDS, $postdatamax);
 curl_setopt($clientmax, CURLOPT_CONNECTTIMEOUT, 0); 
 curl_setopt($clientmax, CURLOPT_TIMEOUT, 4); //timeout in seconds
 curl_setopt($clientmax,CURLOPT_RETURNTRANSFER,true);
 $responsemax = curl_exec($clientmax);
 curl_close($clientmax);
 //print_r($response);
 $result= (json_decode($responsemax));
 $maxid=$result->records[0]->id;


 

//<!Product history insert data ->
$urlhistory = $URL . "productHistory/insertproducthistory.php"; 
$datahistory = array(
  "sizeAttributeId" => $size,
  "productId" => $maxid,
  "colorAttributeId" => $color,
  "skuId" => $skuId,
  "price" => $price,
  "quantity" => $quantity,
  "createdOn"=>$createdOn,
  "createdBy"=>$createdBy);
  $postdatahistory = json_encode($datahistory);
  //print_r($postdatahistory);
  $clienthistory = curl_init($urlhistory);
  curl_setopt($clienthistory, CURLOPT_POSTFIELDS, $postdatahistory);
  curl_setopt($clienthistory, CURLOPT_CONNECTTIMEOUT, 0); 
  curl_setopt($clienthistory, CURLOPT_TIMEOUT, 4); //timeout in seconds
  curl_setopt($clienthistory,CURLOPT_RETURNTRANSFER,true);
  $responsemax = curl_exec($clienthistory);
  curl_close($clienthistory);
  print_r($responsemax);
  $resulthistory= (json_decode($responsemax));



  // insert product sku id
  $urlhistory = $URL . "productskuid/insertproductskuid.php"; 
  $datahistory = array(
    "sizeAttributeId" => $size,
    "productId" => $maxid,
    "colorAttributeId" => $color,
    "skuId" => $skuId,
    "price" => $price,
    "quantity" => $quantity,
    "createdOn"=>$createdOn,
    "createdBy"=>$createdBy);
    $postdatahistory = json_encode($datahistory);
    //print_r($postdatahistory);
    $clienthistory = curl_init($urlhistory);
    curl_setopt($clienthistory, CURLOPT_POSTFIELDS, $postdatahistory);
    curl_setopt($clienthistory, CURLOPT_CONNECTTIMEOUT, 0); 
    curl_setopt($clienthistory, CURLOPT_TIMEOUT, 4); //timeout in seconds
    curl_setopt($clienthistory,CURLOPT_RETURNTRANSFER,true);
    $responsemax = curl_exec($clienthistory);
    curl_close($clienthistory);
    print_r($responsemax);
    $resulthistory= (json_decode($responsemax));


 // $maxid=$result->records[0]->id;
  
  


 //print_r($datasku);
 $postdatasku = json_encode($datasku);
//echo $url;
//print_r($postdata);
$result_registrationsku=url_encode_Decode_sku($urlsku,$postdatasku);
function url_encode_Decode($url,$postdata){
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
return $result = json_decode($response);
}

//product skuid Insert

function url_encode_Decode_sku($urlsku,$postdatasku){
$clientsku = curl_init($urlsku);
curl_setopt($clientsku, CURLOPT_RETURNTRANSFER, true);
curl_setopt($clientsku, CURLOPT_POSTFIELDS, $postdatasku);
$responsesku = curl_exec($clientsku);
//print_r($responsesku);
return $results = json_decode($responsesku);

}


//print_r($result);

  if($result->message="Successfull"){

  /* --- get maximum userid -----*/

   $data_maxId=$skuId;
    $maxId_postdata = json_encode($data_maxId);
    // $result_max_registration=url_encode_Decode($url_read_maxId,$maxId_postdata);
    // $id=$result_max_registration->records[0]->id;


/*--- update the images in img folder inside user folder ---*/

    $target_dir = "../productimages";
    $path="../productimages/".$skuId;
    if (!is_dir($path)){
    mkdir($path, 0777, true);
    //echo "directory created";
    }
    else{ 
     // echo "unable to create directory";
    }
   $target_file1 = $target_dir ."/".$skuId."/". $skuId."1.png";
   $target_file2 = $target_dir ."/".$skuId."/". $skuId."2.png";
   $target_file3 = $target_dir ."/".$skuId."/". $skuId."3.png";
   $target_file4 = $target_dir ."/".$skuId."/". $skuId."4.png";
   //$target_file_thumb = $target_dir .$id."/profile/". $id."_thumb".".png";

    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
    $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
    $imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
    //$imageFileTypeThumb = strtolower(pathinfo($target_file_thumb,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
     $check1 = getimagesize($_FILES["productimage1"]["tmp_name"]);
     $check2 = getimagesize($_FILES["productimage2"]["tmp_name"]);
     $check3 = getimagesize($_FILES["productimage3"]["tmp_name"]);
     $check4 = getimagesize($_FILES["productimage4"]["tmp_name"]);
    // $check_thumb = getimagesize($_FILES["fileUploadThumb"]["tmp_name"]);

      if(($check1 !== false) && ($check2 !== false) && ($check3 !== false) && ($check4 !== false)) {
        
        $uploadOk = 1;
      }
       else {
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if ((file_exists($target_file1)) && (file_exists($target_file2)) && (file_exists($target_file3)) && (file_exists($target_file4))) {
      $uploadOk = 0;
    }
    
    // Check file size
    if (($_FILES["productimage1"]["size"] > 5000000) && ($_FILES["productimage2"]["size"] > 5000000) && ($_FILES["productimage3"]["size"] > 5000000) && ($_FILES["productimage4"]["size"] > 5000000)) {
     
      $uploadOk = 0;
    }
    {
      
      $uploadOk = 1;
    }
    
    // Allow certain file formats
    if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
    && $imageFileType2 != "gif") && ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
    && $imageFileType2 != "gif") && ($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
    && $imageFileType3 != "gif") && ($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
    && $imageFileType4 != "gif")){
    
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    
    } else {

      if(move_uploaded_file($_FILES["productimage1"]["tmp_name"], $target_file1) && (move_uploaded_file($_FILES["productimage2"]["tmp_name"], $target_file2)) && (move_uploaded_file($_FILES["productimage3"]["tmp_name"], $target_file3)) && (move_uploaded_file($_FILES["productimage4"]["tmp_name"], $target_file4)) ) {
        //echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
       // echo "The file ". htmlspecialchars( basename( $_FILES["fileUploadThumb"]["name"])). " has been uploaded.";
        //$_SESSION["registration"] = "File uploaded succesfully.";
        //header('Location:../insert-product.php');
      }
       else {
        //echo "Sorry, there was an error uploading your file.";
      
      //$_SESSION["registration"] = "Sorry, there was an error uploading your file.";
       // header('Location:../insert-product.php');
    }
  }   
   
}
else{
   //header('Location:../insert-product?msg=Failed');
}
?>