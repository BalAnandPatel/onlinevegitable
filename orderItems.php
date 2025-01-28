<?php include 'includes/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include "constant.php";
  include_once 'includes/curl_header_home.php';
  $decoded = $_SESSION['decoded'];
  $data = array("paymentId" => $_GET['id'], "userId" => $decoded->data->email);
 //print_r($data);
  $postdata = json_encode($data);
  $url_all = $URL . "order/readOrderById.php";
  $readCurl = new CurlHome();
  $response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
  //print_r($response_all);
  $resultOrder = json_decode($response_all); 
  ?>

  
    <style>
    .address-container {
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
</head>

<body>
  <?php include 'includes/svg.php' ?>


  <?php include 'includes/preloader.php' ?>

  <?php include 'includes/global-cart.php' ?>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Search</span>
        </h4>
        <form role="search" action="index.php" method="get" class="d-flex mt-3 gap-0">
          <input class="form-control rounded-start rounded-0 bg-light" type="email"
            placeholder="What are you looking for?" aria-label="What are you looking for?">
          <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>


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
      <form class="form-group" method="POST" action="pay.php">
        <div class="row d-flex flex-wrap">
        <div class="col-md-2"></div>
          <div class="col-md-9">


          <div class="container">
          <h2> <u> Order Details</u></h2><br>

          <?php if(!empty($resultOrder)){   
          for ($i = 0; $i < sizeof($resultOrder->records); $i++) {?>
    <div class="order-container">
      <div class="row">
      
      <div class="col-md-6" >
      <div class="order-header" style="overflow: auto;">
         
        </div>
        <div class="order-section">
            <h5>Order Information</h5>
            <p><strong>Order ID:</strong> <?php echo $resultOrder->records[$i]->orderId ?></p>
            <p><strong>Status:</strong> <?php echo $resultOrder->records[$i]->status ;?></p>

            <!-- <p><strong>Seller Name:</strong> <?php //echo $resultOrder->records[$i]->sellerId."-".$resultOrder->records[$i]->sellerName ;?></p> -->
            <!-- <p><strong>Seller Name:</strong> <?php // echo $resultOrder->records[$i]->sellerId."-".$resultOrder->records[$i]->sellerName ;?></p> -->
        </div>
        <div class="order-section">
            <h5>Customer Information</h5>
            <p><strong>Name: </strong><?php echo $resultOrder->records[$i]->name ?> </p>
            <p><strong>Email:</strong> <?php echo $decoded->data->email ;?></p>
        </div>
      </div>
      <br><br>
      <div class="col-md-6">
  
      <div class="order-section">
            <h5>Product Information</h5>
            <img src="https://via.placeholder.com/150" alt="Product Image" class="product-image">
            <p><strong>Product ID:</strong> <?php echo $resultOrder->records[$i]->productId;?></p>
            <p><strong>Product SKU:</strong> <?php echo $resultOrder->records[$i]->productSkuId;?></p>
            <p><strong>Quantity:</strong> <?php echo $resultOrder->records[$i]->quantity;?></p>
            <p><strong>Price:</strong> &#x20B9;<?php echo $resultOrder->records[$i]->price ;?></p>
        </div>
      </div>
      </div>
        
      
        <div class="order-summary">
            <h5>Order Summary</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Order Id</th>
                  
    
                  <th scope="col"> SGST/CGST</th>
                  <th scope="col">Total</th>
                  <th scope="col">Status</th>
                  <th scope="col">CreatedOn</th>
                </tr>
              </thead>
              <tbody>
            
                <tr>
                  <th scope="row"><?php echo $i+1 ?></th>
                  <td><a href="orderItems.php?id=<?php echo $resultOrder->records[$i]->subId ?>"><?php echo $resultOrder->records[$i]->subId ;?></a></td>

                  <td>&#x20B9;<?php echo $resultOrder->records[$i]->sgst ."/  &#x20B9;". $resultOrder->records[$i]->cgst;?></td>
                  <td>&#x20B9;<?php echo $resultOrder->records[$i]->itemTotal ;?></td>
                  <td><?php echo $resultOrder->records[$i]->status ;?></td>
                  <td><?php echo date("d-m-Y H:i:s", strtotime($resultOrder->records[$i]->createdOn)) ;?></td>
           
                </tr>
               
                 
              </tr>
              </tbody>
              </table>
       
        </div>
       
        <?php
        echo "-----------------------------------------------------------------------------------------------------------------------------------------------";
       } }
       ?>
      <div class="order-section">
            <h5>Delivery Address</h5>
            <p><?php 
            if(!empty($resultOrder)){
              echo $resultOrder->records[0]->deliveryAddress ;
            }?></p>
        </div>
    </div>
    
</div>

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