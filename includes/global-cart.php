<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <?php


  // if (isset($_SESSION['email'])) {
    $result = isset($_COOKIE['user_cart']) ? json_decode($_COOKIE['user_cart'], true) : null;
   // print_r($result);
    $total = 0;
    $countproduct = 0;
    if ($result != null) {
      $filtered_cookies=array();
          foreach ($result as $key => $value) {
             if ($value['pid']!="") { 
              $filtered_cookies[$key] = $value;
             }
            }
      $_SESSION['cartsize'] = sizeof($filtered_cookies);
    }
  // }
  ?>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart:</span>
        <span
          class="badge bg-primary rounded-pill"><?php 
            echo floatval(isset($_SESSION['cartsize'])?$_SESSION['cartsize']:0);
          ?></span>
      </h4>

      <ul class="list-group mb-3">
        <?php
       // if (isset($_SESSION['email'])) {
        if($result!=null)
          foreach ($result as $index => $order) {
            if($order['pid']!=""){
            ?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0"><?php echo $order['productName']; ?> X <?php echo $order['quantity']; ?></h6>
                <!-- <small class="text-body-secondary"><?php //echo $order['description']; ?></small> -->
              </div>
              <span class="text-body-secondary">&#8377;<?php echo ($order['itemTotal']) ?></span>
            </li>
            <?php
            
            $total =floatVal(str_replace(",", "", $order['itemTotal'])) + floatVal($total); ?>
          <?php }
        }
        //} ?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (INR)</span>
          <strong>&#8377;<?php 
            echo $_SESSION["cartTotalAmount"] = number_format($total,2);
           ?></strong>

        </li>
      </ul>


      <button class="w-100 btn btn-success btn-lg" onclick="window.location.href='cart.php';" type="submit">View
        Cart</button><br><br>
      <button class="w-100 btn btn-primary btn-lg" onclick="window.location.href='checkout.php';" type="submit">Continue
        to checkout</button>
    </div>
  </div>
</div>