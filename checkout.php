<?php
ob_start();
include "constant.php";
include_once 'includes/curl_header_home.php';
include 'includes/header.php';
$currentTime=time();
//$decoded = !empty($_SESSION['decoded'])?$_SESSION['decoded']:"";
//print_r($_SESSION);

if(isset($_SESSION)){
  
$decoded= isset($_SESSION['decoded'])?$_SESSION['decoded']:"";
//echo $decoded;
$result = json_decode($_COOKIE['user_cart'], true);
                    //print_r($result);
                    $subTotal = 0;
                    foreach ($result as $index => $order) {
                      $subTotal = $order['itemTotal'] + $subTotal;
$id=$order['sellerId'];
         }
//echo $resultAddress->records[$i]->postalCode;

$pincode_url = $URL . "seller/read_seller_pincode.php";
$datapincode = array("id" =>$id);
print_r($datapincode);
$postdatapincode = json_encode($datapincode);
$readCurlpincode = new CurlHome();
$response_pincode = $readCurlpincode->createCurl($pincode_url, $postdatapincode, 0, 5, 1);
//echo "------------";
//print_r($response_pincode); 
 $resultpincode = json_decode($response_pincode);
//print_r($resultpincode);
 $sellerpincode=$resultpincode->records[0]->pincode;
//echo "*******";
//print_r($_COOKIE['user_cart']);
if($decoded=="" ){    
header('location:account.php');
}
else if($decoded->exp<$currentTime){

  header('location:account.php');
    
    
}
ob_end_flush();

if(!isset($_COOKIE['user_cart'])){
  header("Location: shop.php");
}
}
// if()
 $user = isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest';
$url = $URL . "user/read_user_address.php";
$data = array("user" => $user);
//print_r($data);
$postdata = json_encode($data);
$readCurl = new CurlHome();
$response = $readCurl->createCurl($url, $postdata, 0, 2, 1);
//echo "****$$";
//print_r($response);
$resultAddress = json_decode($response);
//print_r($resultAddress);

$totalprice = 0;


  unset($_SESSION['page_reloaded'])
?>
<!DOCTYPE html>
<html lang="en">
<style> 
.scrollable-div-address { width: 300px; /* Set the width of the div */
   height: 400px; /* Set a fixed height for the div */ 
   width: 100%;
   overflow-y: scroll; /* Enable vertical scrolling */
    border: 1px solid #ccc; /* Add a border for better visibility */
     padding: 10px; /* Add some padding */ 
    }
    </style>
<head>
  <style>.address-container {
      height: 150px;
      /* Adjust height as needed */
      overflow-y: scroll;
      border: 1px solid #ccc;
      padding: 10px;
      margin: 20px 0;
    }

    .address-item {
      margin-bottom: 10px;
    }
  </style>
  </style>
</head>
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
  <section class="py-2 mb-4" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <?php include 'includes/breadcrumb.php' ?>
    </div>
  </section>
  <section class="shopify-cart checkout-wrap py-1">
    <div class="container-fluid">
      <form class="form-group" method="POST" action="payment/pay.php">
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
            <h4 class="text-dark pb-4">Additional Information</h4>
            <div class="billing-details">
              <label for="fname">Order notes (optional)</label>
              <textarea class="form-control pt-3 pb-3 ps-3 mt-2" name="notes"
                placeholder="Notes about your order. Like special notes for delivery."></textarea>
            </div><br>
            <h4 class="text-dark pb-4">Delivery Type </h4>
            <div class="billing-details ">
            <input type="hidden" name="sellerpincode" value=<?php echo $sellerpincode; ?>> 
            <input type="radio" id="html" required accept="" checked="checked" name="fav_language" value="HTML">
<label for="html">Standard Delivery (2 PM Next day)</label><br>
<input type="radio" id="deliveryTypeStn" disabled name="Delivery" value="Standard Delivery">
<label for="css">Express Delivery</label><br>
<input type="radio" disabled id="deliveryTypeXpress" name="Delivery" value="Express Delivery">
<label for="javascript">Scheduled Deivery (Comming soon)</label>

            </div><br>
            <h4 class="text-dark pb-4">Select Address </h4>
            <div class="billing-details scrollable-div-address">
            <?php 
            
           //echo "****".sizeof($resultAddress);
           //print_r($resultAddress);
            if(!empty($resultAddress)){
              for($i = 0; $i < sizeof($resultAddress->records); $i++) {
              $add=  "<pre>".$resultAddress->records[$i]->name."<br>". $resultAddress->records[$i]->addressLine1 ."<br>". $resultAddress->records[$i]->addressLine2."<br>".
              $resultAddress->records[$i]->city.",". $resultAddress->records[$i]->state."," .$resultAddress->records[$i]->postalCode."<br>Landmark:".
              $resultAddress->records[$i]->landmark."<br>Mobile:". $resultAddress->records[$i]->mobile."</pre>";
              ?>
                <div class="address-item">
                  <input type="radio" id="address<?php echo $index; ?>" required name="address" value="<?php echo $add; ?>">
                  <label for="address<?php echo $index; ?>"><?php echo $resultAddress->records[$i]->addressLine1; ?></label>,
                  <label for="address<?php echo $index; ?>"><?php echo $resultAddress->records[$i]->addressLine2; ?></label>,<br>
                  <label for="address<?php echo $index; ?>"><?php echo $resultAddress->records[$i]->city; ?></label>,
                  <label for="address<?php echo $index; ?>"><?php echo $resultAddress->records[$i]->state; ?></label>,<br>
                   <label for="address<?php echo $index; ?>"><b>Pincodeabc:</b><?php echo $resultAddress->records[$i]->postalCode; ?></label><br>
                   <label for="address<?php echo $index; ?>"><b>Landmark:</b> <?php echo $resultAddress->records[$i]->landmark; ?></label><br>
                   <label for="address<?php echo $index; ?>"><b>Mob:</b> <?php echo $resultAddress->records[$i]->mobile; ?></label>
                    <?php $_SESSION["userpin"]=$resultAddress->records[$i]->postalCode;
                   //print_r($add);
                    ?>
                    
                  </div>
              <?php  }} ?>
            </div>
           <?php $_SESSION["userpin"];?>
            <br>
            <div class="button-wrap row g-2">
             
              <div class="col-md-5"><button  type="button" class="btn btn-success py-3 px-4 text-uppercase btn-rounded-none w-100"
                  onclick="navigateToPage()">Add New Address</button></div>

            </div>
            <br>


          </div>
          <div class="col-lg-6">

          <font color="red"> <?php echo $message= isset($_GET['messageid'])?$_GET['messageid']:"";?></font>
            <div class="your-order mt-5">
              <h4 class="display-7 text-dark pb-4">Cart Total</h4>
              <div class="total-price">
                <table cellspacing="0" class="table">
                                    <tbody>
                    <?php
                    ///echo "**********************************";
                    $result = json_decode($_COOKIE['user_cart'], true);
                    //print_r($result);
                    $subTotal = 0;
                    foreach ($result as $index => $order) {
                      $subTotal = $order['itemTotal'] + $subTotal;
                      //echo $order['itemTotal'];
                    
                    } ?>
                    <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                      <th>Subtotal</th>
                      <td data-title="Subtotal">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">&#8377;</span><?php echo floatval($subTotal) ?> </bdi>
                        </span>
                      </td>
                    </tr>
                    <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                      <th>Tax</th>
                      <td data-title="Total">
                        <span class="price-amount amount ps-5">
                          <bdi>
                           
                            <span class="price-currency-symbol">&#8377;</span><?php echo $tax = floatval((($subTotal * $order['cgst']) / 100)+(($subTotal * $order['cgst'])/100) );?> </bdi>
                        </span>
                      </td>
                    </tr>
                    <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                      <?php if($subTotal<=500){ ?>
                      <th>Shipping Charges</th>
                      <td data-title="Total">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">&#8377;</span>
                            <?php
                          
                            $result = json_decode($_COOKIE['user_cart'], true);
                   
                            echo  $order['shipping']!=""?floatval($order['shipping']):0 
                            ?> </bdi>
                        </span>
                      </td>
                      <?php } ?>
                    </tr>
                    <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                      <th>Total</th>
                      <td data-title="Total">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">&#8377;</span><?php echo floatval(round(($subTotal +$tax +$order['shipping']),2)) ?> </bdi>
                       
                          </span>
                      </td>
                    </tr>

                  </tbody>
                </table>
                <div class="list-group mt-5 mb-3">
                  
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" required name="listGroupRadios"
                      id="listGroupRadios2" value="online">
                    <span>
                      <strong class="text-uppercase">Online payments</strong>
                      <small class="d-block text-body-secondary">Pay online to your orders</small>
                    </span>
                  </label>
                 
                 
                </div>
              <?php if(!empty($resultAddress)){
                    
                
                ?>
                <button type="submit" name="submit"
                  class="btn btn-dark btn-lg text-uppercase btn-rounded-none w-100">Place an order</button>
              </div>
            </div>
            <?php } 
        
            else{?>
               <div class="button-wrap row g-2">
             
              <div class="col-md-5"><button  type="button" class="btn btn-success py-3 px-4 text-uppercase btn-rounded-none w-100"
                  onclick="navigateToPage()">Add New Address</button></div>

            </div>
            <?php } ?>
          </div>
        </div>
    </div>
    </form>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>
</body>
<script>
    function navigateToPage() {
        window.location.href = "address_selection.php"; // Change to your target page
    }
</script>
</html>