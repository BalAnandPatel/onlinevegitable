<?php
 include 'includes/header.php';
 $decoded= isset($_SESSION['decoded'])?$_SESSION['decoded']:"";
 //$decoded->data->email;
 ?>
<!DOCTYPE html>
<html lang="en">


<head>

<?php
  include "constant.php";
  include_once 'includes/curl_header_home.php';

 

//
if(isset($decoded->data->email)){
  $data = array("paymentId" => "ALL", "userId" => $decoded->data->email);
  //print_r($data);
}
else{
  $data=array();
}
  //print_r($data);
  $postdata = json_encode($data);
  $url_all = $URL . "order/readOrderById.php";
  $readCurl = new CurlHome();


  $response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
  //print_r($response_all);
  $resultOrder = json_decode($response_all); ?>
    <style> .address-container {
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
        <div class="col-md-1"></div>
          <div class="col-md-10">
          <?php if(!empty($resultOrder)){?>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Order Id</th>
                  <th scope="col">Total Orders</th>
                  <th scope="col">Total Amt</th>
                  <th scope="col">Status</th>
                  <th scope="col">delivery Id</th>
                  <th scope="col">payment Id</th>
                  <th scope="col">Created On</th>
                </tr>
              </thead>
              <tbody>
              <?php   for ($i = 0; $i < sizeof($resultOrder->records); $i++) {?>
                <tr>
                  <th scope="row"><?php echo $i+1 ?></th>
                  <td><a href="receipt1.php?id=<?php echo $resultOrder->records[$i]->orderId ?>">
                    <?php echo $resultOrder->records[$i]->orderId ;?></a></td>
                  <td><?php echo $resultOrder->records[$i]->totalQuantity ;?></td>
                  <td>&#8377;<?php echo $resultOrder->records[$i]->orderTotal ;?></td>
                  <td><?php echo $resultOrder->records[$i]->status ;?></td>
                  <td><?php echo $resultOrder->records[$i]->deliveryId ;?></td>
                  <td><?php echo $resultOrder->records[$i]->paymentId ;?></td>
                  <td><?php echo date("d-m-Y H:i:s", strtotime($resultOrder->records[$i]->createdOn)) ;?></td>
           
                </tr>
                <?php } ?>
           
              </tbody>
            </table>
<?php }else{
 echo "<center><h2>No Orders</h2></center><br>"; 
}?>
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