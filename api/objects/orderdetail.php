<?php

class Orderdetail
{

    private $conn;
    private $orderdetails = "orderdetails";
    private $selleraddress = "selleraddress";
    private $users = "users";
    // private $table_payment = "payment";

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public $id, $orderId,$userId,$paymentId,$sellerId,$deliveryId,$productId,$adminCommision, $productSkuId, $quantity, $total;

    public $cuId, $status,$verificationCode,$cuName,$cuEmail, $cuAddress,$date, $sgst, $cgst, $cuMobile,$createdOn,$createdBy,$updatedBy,$updatedOn, $requiredService,$workingPincode;

    
   public function readorderdetails()
    {
        if($this->sellerId==true){
           //$this->sellerId;
     $query ="Select b.name,b.userId,a.orderId,a.deliveryId,a.sellerId,a.paymentId,a.total,a.cgst,a.verificationCode, a.sgst, a.status, a.adminCommision,a.createdOn,a.createdBy from $this->orderdetails as a INNER JOIN $this->users as b ON a.userId=b.userId where
      sellerId=:sellerId AND a.status='Rejected'";
         $stmt = $this->conn->prepare($query);
         $stmt->bindParam(":sellerId", $this->sellerId); 
}
else {
   // echo $this->orderId;
      $query = "Select a.userId,a.orderId,a.deliveryId,a.sellerId,a.verificationCode,a.paymentId,a.total,
      a.cgst, a.sgst, a.status, a.totalCommision,a.createdOn,a.createdBy,b.pincode
       from $this->orderdetails as a INNER JOIN $this->selleraddress as b ON a.sellerId=b.sellerId where b.pincode=:workingPincode and a.status=1";
    // $query = "Select userId,orderId,deliveryId,sellerId,paymentId,total,productSkuId, productId, gst, status, quantity, discount, paymentMethod, adminCommision,createdOn,createdBy from $this->orderdetails";
     $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":workingPincode", $this->workingPincode); 
}
$stmt->execute();
return $stmt;
}


function updateorderdetailsforDelivery()
    {

        // query to update record
        $query = "UPDATE 
         " . $this->orderdetails . "
     SET
        status=:status,
        deliveryId=:deliveryId,
        updatedOn=:updatedOn,
        updatedBy=:updatedBy 
        where orderId=:orderId";

 
        // prepare query
        $stmt = $this->conn->prepare($query);
 
        $this->orderId = htmlspecialchars(strip_tags($this->orderId));
        $this->deliveryId = htmlspecialchars(strip_tags($this->deliveryId));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->updatedOn = htmlspecialchars(strip_tags($this->updatedOn));
        $this->updatedBy = htmlspecialchars(strip_tags($this->updatedBy));

        
        //bind values with stmt
        $stmt->bindParam(":deliveryId", $this->deliveryId);
        $stmt->bindParam(":orderId", $this->orderId);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":updatedOn", $this->updatedOn);
        $stmt->bindParam(":updatedBy", $this->updatedBy);
       
       
        
        // execute query
        $stmt->execute();
            return $stmt;
        }

        public function readacceptedOrder()
        {
            if($this->orderId==true){
                //echo $this->orderId;
          $query = "Select userId,orderId,deliveryId,sellerId,paymentId,total, cgst, sgst, status, totalCommision,updatedOn,updatedBy from $this->orderdetails  where 
            status=3";
             $stmt = $this->conn->prepare($query);
            //  $stmt->bindParam(":sellerId", $this->sellerId); 
    }
    else {
       // echo $this->orderId;
        //   $query = "Select a.userId,a.orderId,a.deliveryId,a.sellerId,a.paymentId,a.total,
        //   a.cgst, a.sgst, a.status, a.totalCommision,a.createdOn,a.createdBy,b.pincode
        //    from $this->orderdetails as a INNER JOIN $this->selleraddress as b ON a.sellerId=b.sellerId where b.pincode=:workingPincode and a.status=1";
    
        $query = "Select userId,orderId,deliveryId,sellerId,paymentId,total, cgst, sgst, status, totalCommision,updatedOn,updatedBy from $this->orderdetails  where 
        status=3";
    
        // $query = "Select userId,orderId,deliveryId,sellerId,paymentId,total,productSkuId, productId, gst, status, quantity, discount, paymentMethod, adminCommision,createdOn,createdBy from $this->orderdetails";
         $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":workingPincode", $this->workingPincode); 
    }
    $stmt->execute();
    return $stmt;
    }
    

public function readorderdetailsfordelivery()
{
    if($this->sellerId==true){
       // echo $this->sellerId;
 $query ="Select userId,orderId,deliveryId,sellerId,paymentId,total,cgst,verificationCode, sgst, status, totalCommision,createdOn,createdBy from $this->orderdetails where sellerId=:sellerId";
     $stmt = $this->conn->prepare($query);
     $stmt->bindParam(":sellerId", $this->sellerId); 
}
else {
// echo $this->orderId;
  $query = "Select a.userId,a.orderId,a.deliveryId,a.sellerId,a.verificationCode,a.paymentId,a.total,
  a.cgst, a.sgst, a.status, a.totalCommision,a.createdOn,a.createdBy,b.pincode
   from $this->orderdetails as a INNER JOIN $this->selleraddress as b ON a.sellerId=b.sellerId where b.pincode=:workingPincode and (a.status='Order_Accepted' OR a.status='Ready_To_Deliver'    OR a.status='Order_Handover_To_Delivery_Boy' oR status='Order_Delivery_Successfully')";
// $query = "Select userId,orderId,deliveryId,sellerId,paymentId,total,productSkuId, productId, gst, status, quantity, discount, paymentMethod, adminCommision,createdOn,createdBy from $this->orderdetails";
 $stmt = $this->conn->prepare($query);
$stmt->bindParam(":workingPincode", $this->workingPincode); 
}
$stmt->execute();
return $stmt;
}




    public function insertorderdetails()
    {
         $query = "INSERT INTO
        " . $this->orderdetails . "
    SET      orderId=:orderId,
            sellerId=:sellerId,
             deliveryId=:deliveryId,
             paymentId=:paymentId,
             total=:total,
             adminCommision=:adminCommision,
             createdBy=:createdBy,
             createdOn=:createdOn";

        $stmt = $this->conn->prepare($query);
        $this->orderId = htmlspecialchars(strip_tags($this->orderId));
        $this->userId = htmlspecialchars(strip_tags($this->userId));
        $this->sellerId = htmlspecialchars(strip_tags($this->sellerId));
        $this->deliveryId = htmlspecialchars(strip_tags($this->deliveryId));
        $this->paymentId = htmlspecialchars(strip_tags($this->paymentId));
        $this->total = htmlspecialchars(strip_tags($this->total));
        $this->adminCommision = htmlspecialchars(strip_tags($this->adminCommision));
        $this->createdOn = htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy = htmlspecialchars(strip_tags($this->createdBy));
    
        $stmt->bindParam(":orderId", $this->orderId);
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":sellerId", $this->sellerId);
        $stmt->bindParam(":deliveryId", $this->deliveryId);
        $stmt->bindParam(":paymentId", $this->paymentId);
        $stmt->bindParam(":total", $this->total);
        $stmt->bindParam(":adminCommision", $this->adminCommision);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);

        
        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function deleteorderdetails(){
  
        // delete user detatail
        $query = " DELETE FROM " . $this->orderdetails . " 
        WHERE orderId=:orderId";
    
        // $query2 = " DELETE FROM " . $this->user_profile . " 
        // WHERE userId=:id";
    
        // $query3 = " DELETE FROM " . $this->user_profile_history . " 
        // WHERE userId=:id";
    
        // $query4 = " DELETE FROM " . $this->wall_uploads . " 
        // WHERE userId=:id";
    
        // $query5 = " DELETE FROM " . $this->wall_upload_history . " 
        // WHERE userId=:id";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
        // $stmt2 = $this->conn->prepare($query2);
        // $stmt3 = $this->conn->prepare($query3);
        // $stmt4 = $this->conn->prepare($query4);
        // $stmt5 = $this->conn->prepare($query5);
      
        // sanitize
        $this->orderId=htmlspecialchars(strip_tags($this->orderId));
      
        // bind id of record to delete
        $stmt->bindParam(":orderId", $this->orderId);
        // $stmt2->bindParam(":id", $this->id);
        // $stmt3->bindParam(":id", $this->id);
        // $stmt4->bindParam(":id", $this->id);
        // $stmt5->bindParam(":id", $this->id);
      
        // execute query
        if ($stmt->execute()){
            return true;
        }
      
        return false;
    }


    // ***************************

    // 17/12/2024
// sum(total) as totalSold,

public function readSoldOrder()
{
    $query = "Select id, orderId, userId, deliveryId, paymentId, cgst, sgst, deliveryAddress,totalQuantity, total, sellerId, createdOn, createdBy from  $this->orderdetails WHERE paymentResponse='PAID' AND status='ORDER PLACED'";
    $stmt = $this->conn->prepare($query);
    // $stmt->bindParam(":orderId", $this->orderId);
    $stmt->execute();
    return $stmt;
}



public function readSoldOrderBySeller()
{
// Correcting the SQL query
$query = "Select id, orderId, userId, deliveryId, paymentId, cgst, sgst, deliveryAddress, sellerId, createdOn, createdBy from  $this->orderdetails WHERE paymentResponse='PAID' AND status='ORDER PLACED' AND sellerId=:sellerId";

$stmt = $this->conn->prepare($query);

// Sanitize sellerId input
$this->sellerId = htmlspecialchars(strip_tags($this->sellerId));

// Bind the parameter to the query
$stmt->bindParam(":sellerId", $this->sellerId);

// Execute the query
$stmt->execute();

return $stmt;
}
public function readSoldOrderByDate()
{
// Correcting the SQL query
$query = "Select id, orderId, userId, deliveryId, paymentId, cgst, sgst, deliveryAddress, totalQuantity, total, sellerId, createdOn, createdBy from  $this->orderdetails WHERE createdOn=:date";

$stmt = $this->conn->prepare($query);

// Sanitize sellerId input
$this->date = htmlspecialchars(strip_tags($this->date));

// Bind the parameter to the query
$stmt->bindParam(":date", $this->date);

// Execute the query
$stmt->execute();

return $stmt;
}
public function readSoldOrderByDateSeller()
{
// Correcting the SQL query
$query = "Select id, orderId, userId, deliveryId, paymentId, cgst, sgst, deliveryAddress, totalQuantity, total, sellerId, createdOn, createdBy from  $this->orderdetails WHERE createdOn=:date AND sellerId=:sellerId";

$stmt = $this->conn->prepare($query);

// Sanitize sellerId input
$this->date = htmlspecialchars(strip_tags($this->date));
$this->sellerId = htmlspecialchars(strip_tags($this->sellerId));

// Bind the parameter to the query
$stmt->bindParam(":date", $this->date);
$stmt->bindParam(":sellerId", $this->sellerId);

// Execute the query
$stmt->execute();

return $stmt;
}





    // ***************************

    function updateorderdetails()
    {
 
        // query to update record
         $query = "UPDATE
         " . $this->orderdetails . "
     SET
        status=:status,
        updatedOn=:updatedOn,
        updatedBy=:updatedBy,
        verificationCode=:verificationCode
        where orderId=:orderId";
 
 
        // prepare query
        $stmt = $this->conn->prepare($query);
 
        $this->orderId = htmlspecialchars(strip_tags($this->orderId));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->verificationCode = htmlspecialchars(strip_tags($this->verificationCode));
        $this->updatedOn = htmlspecialchars(strip_tags($this->updatedOn));
        $this->updatedBy = htmlspecialchars(strip_tags($this->updatedBy));
 
       
        //bind values with stmt
        $stmt->bindParam(":orderId", $this->orderId);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":verificationCode", $this->verificationCode);
        $stmt->bindParam(":updatedOn", $this->updatedOn);
        $stmt->bindParam(":updatedBy", $this->updatedBy);
       
       
       
        // execute query
        $stmt->execute();
            return $stmt;
        }


        function orderCountItem()
    {

        // query to update record
        $query = "SELECT COUNT(*) FROM  
         " . $this->orderdetails;

 
        // prepare query
        $stmt = $this->conn->prepare($query);
 
        // $this->id = htmlspecialchars(strip_tags($this->id));
        // $this->name = htmlspecialchars(strip_tags($this->name));
        // $this->email = htmlspecialchars(strip_tags($this->email));
        // $this->contactno = htmlspecialchars(strip_tags($this->contactno));

        // //bind values with stmt
        // $stmt->bindParam(":id", $this->id);
        // $stmt->bindParam(":name", $this->name);
        // $stmt->bindParam(":email", $this->email);
        // $stmt->bindParam(":contactno", $this->contactno);
        
        
        // execute query
        if ($stmt->execute()){
            return true;
        }

        return false;
    }

  }
?>