<?php 
include 'includes/header.php';
$decoded= isset($_SESSION['decoded'])?$_SESSION['decoded']:"";
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include 'constant.php'; 
include 'includes/curl_header_home.php';
error_reporting(0);
unset($_SESSION['']);
unset($_SESSION['cartsize']);
unset($_SESSION['cartTotalAmount']);
unset($_SESSION['razorpay_order_id']);
unset($_SESSION['page_reload']);
unset($_SESSION['user_address']);
unset($_SESSION['user_notes']);
unset($_SESSION['user_address_type']);
unset($_SESSION['cartTotalAmount']);
unset($_SESSION['user_save_address']);
unset($_SESSION['address1']);
unset($_SESSION['address2']);
unset($_SESSION['city']);
unset($_SESSION['state']);
unset($_SESSION['postalCode']);
unset($_SESSION['phone']);  
unset($_SESSION['landmark']);
unset($_SESSION['page_reloaded']);
//echo $_SESSION['user_order_id'];

$data = array("paymentId" => $_GET['id'], "userId" => $decoded->data->email);
//print_r($data);
$postdata = json_encode($data);
$url_all = $URL . "order/readOrderById.php";
$readCurl = new CurlHome();
$response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
// print_r($response_all);


  
$resultOrder = json_decode($response_all);
//print_r($resultOrder);
?>

<body>

  <?php include 'includes/svg.php' ?>

  <?php include 'includes/preloader.php' ?>

  <?php include 'includes/global-cart.php' ?>
  <header>
    <div class="container-fluid">
      <?php include 'includes/search.php' ?>
    </div>
    <?php include 'includes/menu.php' ?>
  </header>

  <section class="py-3"
    style="background-image: url('images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid">
      <div class="row">
      <?php
// Example order details

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Receipt</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h1>Order Receipt</h1>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <!-- Placeholder for design image -->
             
            </div>
            <?php if(!empty($resultOrder)){
                //print_r($resultOrder);
                ?>
            <div class="row">     <div class="mb-4">
                <p><strong>Order ID:</strong> <?php echo $resultOrder->records[0]->orderId; ?></p>
                <p><strong>PaymentId ID:</strong> <?php echo $resultOrder->records[0]->paymentId;  ?></p>
                <p><strong>Date:</strong> <?php echo $resultOrder->records[0]->createdOn; ?></p>
                <p><strong>Customer Name:<?php echo $_SESSION["name"]?></strong> </p>
                <p><strong>Customer Email:</strong> <?php echo $decoded->data->email; ?></p>
                <!-- <p><strong>Seller:</strong> <?php // echo $resultOrder->records[0]->sellerName."-". $resultOrder->records[0]->sellerId ?></p> -->
                <p><strong>Status:</strong> <?php echo $resultOrder->records[0]->status; ?></p>
                
            </div>
           </div>
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>SGST</th>
                        <th>CGST</th>
                        <th>SubTotal</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php   for ($i = 0; $i < sizeof($resultOrder->records); $i++) {?>
                    <tr>
                        <td><?php echo htmlspecialchars( $resultOrder->records[$i]->orderId); ?></td>
                        <td> <img src="seller/productimages/<?php echo trim($resultOrder->records[$i]->productSkuId);?>/<?php echo trim($resultOrder->records[$i]->productSkuId); ?>1.png" class="img-fluid" alt="productimage" height="50" width="50"></td>
                        <td><?php echo $resultOrder->records[$i]->quantity; ?></td>
                        <td> &#8377;<?php echo number_format($resultOrder->records[$i]->price, 2); ?></td>
                        <td>&#8377;<?php echo $resultOrder->records[$i]->price*$resultOrder->records[$i]->quantity*$resultOrder->records[$i]->discount*0.01 ?></td>
                       
                        <td> &#8377;<?php echo number_format($resultOrder->records[$i]->sgst, 2); ?></td>
                        <td> &#8377;<?php echo number_format($resultOrder->records[$i]->cgst, 2); ?></td>
                        <td> &#8377;<?php echo number_format($resultOrder->records[$i]->quantity * $resultOrder->records[$i]->price-($resultOrder->records[$i]->quantity * $resultOrder->records[$i]->price*$resultOrder->records[$i]->discount*0.01), 2); ?></td>
                  
                        <td> &#8377;<?php echo number_format($resultOrder->records[$i]->quantity * $resultOrder->records[$i]->price-($resultOrder->records[$i]->quantity * $resultOrder->records[$i]->price*$resultOrder->records[$i]->discount*0.01)+$resultOrder->records[$i]->sgst+$resultOrder->records[$i]->cgst, 2); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
       
            <div class="text-right">
               
                <p class="font-weight-bold"><strong>Sub Total:</strong> &#8377;<?php echo number_format( $resultOrder->records[0]->orderTotal, 2); ?></p>
                <p class="font-weight-bold"><strong>Delivery Charges:</strong> &#8377;20</p>
                <p class="font-weight-bold"><strong>Sub Total:</strong> &#8377;<?php echo number_format( $resultOrder->records[0]->orderTotal+20, 2); ?></p>
             
         </div>
         <div class="class="text-right"">
            <h5>Delivery Address</h5>
            <p><?php 
            if(!empty($resultOrder)){
              echo $resultOrder->records[0]->deliveryAddress;
            }?></p>
        </div>
            <br>
            <?php }?>
        </div>
    </div>
</div>

</body>
</html>



    </div>
  </section>



  <?php include 'includes/service.php'; ?>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>

</body>

</html>