<?php 
include "constant.php";
include_once 'includes/curl_header_home.php';
include 'includes/header.php';
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
 // print_r($datapincode);
  $postdatapincode = json_encode($datapincode);
  $readCurlpincode = new CurlHome();
  $response_pincode = $readCurlpincode->createCurl($pincode_url, $postdatapincode, 0, 5, 1);
  //echo "------------";
  //print_r($response_pincode); 
   $resultpincode = json_decode($response_pincode);
  //print_r($resultpincode);
  $sellerpincode=$resultpincode->records[0]->pincode;
    }
?>
<!DOCTYPE html>
<html lang="en">


<head>
<?php include 'includes/header.php' ;
  unset($_SESSION['page_reloaded']);
  $totalprice = 0; ?>
  <style>
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
      <form class="form-group" method="POST" action="payment/pay.php">
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
       
              <h4 class="text-dark pb-4">Billing Details</h4>
              <div class="billing-details">

                <input type="checkbox" name="saveAddress" id="save" value="yes" checked>
                <label for="lname"><b>Save Address</b></label><br><br>
                <label for="lname"><b>Name*</b></label>
                <input type="text" id="name" name="name" value="" required class="form-control mt-2 mb-4 ps-3">
                <label for="cname"><b>Company Name(optional)*</b></label>
                <input type="text" id="cname" name="companyname" value="" class="form-control mt-2 mb-4">

                <label for="address"><b>Street Address*</b></label>
                <input type="text" id="adr" name="addrs1" value="" required placeholder="House number and street name"
                  class="form-control mt-3 ps-3 mb-3">
                <input type="text" id="adr" name="addrs2" value="" required placeholder="Appartments, suite, etc."
                  class="form-control ps-3 mb-4">
                <label for="city"><b>Town / City *</b></label>
                <input type="text" id="city" name="city" value="" required class="form-control mt-3 ps-3 mb-4">
                <label for="state"><b>State *</b></label>
                <select class="form-select form-control mt-2 mb-4" name="state" requiredname="state" aria-label="Default select example">

                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option selected="" hidden="" value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu
                  </option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Ladakh">Ladakh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                </select>
                <label for="zip"><b>Zip Code *</b></label>
                <input type="number" id="zip" name="postalCode" value="" required class="form-control mt-2 mb-4 ps-3">
                <input type="number"  name="sellerpincode" value="<?php echo $sellerpincode; ?>" required class="form-control mt-2 mb-4 ps-3">
                <label for="email"><b>Phone *</b></label>
                <input type="number" id="phone" name="phone" class="form-control mt-2 mb-4 ps-3">
                <label for="email"><b>landmark *</b></label>
                <input type="text" id="landmark" name="landmark" class="form-control mt-2 mb-4 ps-3">
                <!-- <label for="email"><b>Email address *</b></label>
                <input type="text" id="email" name="email" value="<?php //echo $_SESSION['email']; ?>"
                  class="form-control mt-2 mb-4 ps-3"> -->
              </div>
            </div>
            <div class="col-lg-6">
              <h4 class="text-dark pb-4">Additional Information</h4>
              <div class="billing-details">
                <label for="fname"><b>Order notes (optional)</b></label>
                <textarea class="form-control pt-3 pb-3 ps-3 mt-2" name="notes"
                  placeholder="Notes about your order. Like special notes for delivery."></textarea>
              </div>
              <div class="your-order mt-5">
                <h4 class="display-7 text-dark pb-4">Cart Totals</h4>
                <div class="total-price">
                  <table cellspacing="0" class="table">
                    <tbody>
                      <?php
                      $result = json_decode($_COOKIE['user_cart'], true);
                      $subTotal = 0;
                      foreach ($result as $index => $order) {
                        $subTotal = $order['itemTotal'] + $subTotal;
                      } ?>
                      <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                        <th>Subtotal</th>
                        <td data-title="Subtotal">
                          <span class="price-amount amount ps-5">
                            <bdi>
                              <span class="price-currency-symbol">$</span><?php echo $subTotal ?> </bdi>
                          </span>
                        </td>
                      </tr>
                      <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                        <th>Tax</th>
                        <td data-title="Total">
                          <span class="price-amount amount ps-5">
                            <bdi>
                              <span class="price-currency-symbol">$</span><?php echo $tax = ($subTotal * $TAX) / 100 ?>
                            </bdi>
                          </span>
                        </td>
                      </tr>
                      <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                        <th>Total</th>
                        <td data-title="Total">
                          <span class="price-amount amount ps-5">
                            <bdi>
                              <span class="price-currency-symbol">$</span><?php echo $subTotal + $tax ?> </bdi>
                          </span>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <div class="list-group mt-5 mb-3">

                    <label class="list-group-item d-flex gap-2 border-0">
                      <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="online" required>
                      <span>
                        <strong class="text-uppercase">Online payments</strong>
                        <small class="d-block text-body-secondary">Pay online</small>
                      </span>
                    </label>
                    <!-- <label class="list-group-item d-flex gap-2 border-0">
                      <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios3" value="cod" required>
                      <span>
                        <strong class="text-uppercase">Cash on delivery</strong>
                        <small class="d-block text-body-secondary">Pay with cash upon delivery.</small>
                      </span>
                    </label> -->

                  </div>
                  <button type="submit" name="submit"
                    class="btn btn-dark btn-lg text-uppercase btn-rounded-none w-100">Place an order</button>
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