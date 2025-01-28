<!DOCTYPE html>
<html lang="en">
<?php
$decode = $_SESSION['decoded'];
$user = isset($decoded->data->email) ? $decoded->data->email : 'Guest';
include "constant.php";
include_once 'includes/curl_header_home.php';
$url = $URL . "user/read_user_address.php";
$data = array("user" => $user);
$postdata = json_encode($data);

$readCurl = new CurlHome();
$response = $readCurl->createCurl($url, $postdata, 0, 2, 1);
print_r($response);
$resultAddress = json_decode($response);

?>

<head>
  <?php include 'includes/header.php' ?>

</head>

<body>
  <?php include 'includes/svg.php' ?>


  <?php //include 'includes/preloader.php' ?>

  <?php include 'includes/global-cart.php' ?>

  <section class="shopify-cart checkout-wrap py-">
    <div class="container-fluid">
      <form class="form-group" method="POST" action="admin/action/placeOrder_post.php">
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
            <?php for ($i = 0; $i < sizeof($resultAddress->records); $i++) { ?>
              <h4 class="text-dark pb-4">Billing Details</h4>
              <div class="billing-details">
            
              <input type="checkbox" id="lname" name="save" >
              <label for="lname"><b>Save Address</b></label><br><br>
                <label for="lname"><b>Name*</b></label>
                <input type="text" id="lname" name="lastname" value="<?php echo $decoded->data->email; ?>"
                  class="form-control mt-2 mb-4 ps-3">
                <label for="cname"><b>Company Name(optional)*</b></label>
                <input type="text" id="cname" name="companyname"
                  value=""
                  class="form-control mt-2 mb-4">
                <label for="cname"><b>Country / Region*</b></label>
                <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                  <option selected="" hidden="">India</option>

                </select>
                <label for="address"><b>Street Address*</b></label>
                <input type="text" id="adr" name="address"
                  value="<?php echo $resultAddress->records[$i]->addressLine1; ?>"
                  placeholder="House number and street name" class="form-control mt-3 ps-3 mb-3">
                <input type="text" id="adr" name="address"
                  value="<?php echo $resultAddress->records[$i]->addressLine2; ?>" placeholder="Appartments, suite, etc."
                  class="form-control ps-3 mb-4">
                <label for="city"><b>Town / City *</b></label>
                <input type="text" id="city" name="city" value="<?php echo $resultAddress->records[$i]->city; ?>"
                  class="form-control mt-3 ps-3 mb-4">
                <label for="state"><b>State *</b></label>
                <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">

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
                <input type="text" id="zip" name="zip" value="<?php echo $resultAddress->records[$i]->postalCode; ?>"
                  class="form-control mt-2 mb-4 ps-3">
                <label for="email"><b>Phone *</b></label>
                <input type="text" id="phone" name="phone" class="form-control mt-2 mb-4 ps-3">
                <label for="email"><b>Email address *</b></label>
                <input type="text" id="email" name="email" value="<?php echo $decoded->data->email; ?>"
                  class="form-control mt-2 mb-4 ps-3">
              </div>
            </div>
            <div class="col-lg-6">
              <h4 class="text-dark pb-4">Additional Information</h4>
              <div class="billing-details">
                <label for="fname"><b>Order notes (optional)</b></label>
                <textarea class="form-control pt-3 pb-3 ps-3 mt-2"
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
                              <span class="price-currency-symbol">$</span><?php echo $tax = ($subTotal * $TAX) / 100 ?> </bdi>
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
                        id="listGroupRadios2" value="online">
                      <span>
                        <strong class="text-uppercase">Check payments</strong>
                        <small class="d-block text-body-secondary">Pay online</small>
                      </span>
                    </label>
                    <label class="list-group-item d-flex gap-2 border-0">
                      <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios3" value="cod">
                      <span>
                        <strong class="text-uppercase">Cash on delivery</strong>
                        <small class="d-block text-body-secondary">Pay with cash upon delivery.</small>
                      </span>
                    </label>
                   
                  </div>
                  <button type="submit" name="submit"
                    class="btn btn-dark btn-lg text-uppercase btn-rounded-none w-100">Place an order</button>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </form>
    </div>
  </section>