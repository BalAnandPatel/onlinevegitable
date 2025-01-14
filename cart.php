<?php
//setcookie('user_cart', '', time() - 3600, "/");
include 'includes/header.php';
if(!isset($_COOKIE['user_cart'])){
    header('location:shop.php');
}

json_decode($_COOKIE['user_cart']);

$validPid=isset($_GET['pid'])?$_GET['pid']:"";

$validMessage=isset($_GET['msg'])?$_GET['msg']:"";

//session_start();
$user = isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest';
include "constant.php";
include_once 'includes/curl_header_home.php';
$url = $URL . "cart/readCart.php";
$data = array("user" => $user);
$postdata = json_encode($data);

$readCurl = new CurlHome();
$response = $readCurl->createCurl($url, $postdata, 0, 2, 1);
$resultcart = json_decode($response);

$totalprice = 0;
$tax=0.0;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      document.getElementById('submitBtn').addEventListener('click', function () {
        // Disable the button
        this.disabled = true;

        // Show the loader
        document.getElementById('loader').style.display = 'inline-block';

        // Simulate a form submission or other process
        setTimeout(function () {
          // Re-enable the button and hide the loader after 3 seconds
          document.getElementById('submitBtn').disabled = false;
          document.getElementById('loader').style.display = 'none';
        }, 3000);
      });
    </script>
    <script>

      $(document).ready(function () {
    
        var subTotal = 0;

        var removeAttr = "";
        $('.removeCarts').click(function () {
          // Find the row the button was clicked in 
          var row = $(this).closest('tr'); // Get the ID and Name from the row
          var removeAttr = "#" + row[0].id;
          var productIdAttr1 = ".productId" + row[0].id;
          var productId1 = $(productIdAttr1).val();
         
          $(removeAttr).remove();
 
          $.ajax({
            url: 'admin/action/cat_cookies.php', // Calls the same script
            type: 'POST',
            data: {
              pid: productId1,
              condition: "remove"
            },
            success(res) {
            
              if (res == "Empty Cart") {
                window.open("shop.php");
              }

            },
            failure(res) {
            
            }

          });

          var id = $(this).attr("id");
    

          $('table > tbody  > tr').each(function (index, tr) {
            var ItemPriceAttr = ".money" + index;
            var allTotal =str_replace(",","",$(ItemPriceAttr).text());

      if (allTotal != "" || !isNaN(allTotal)) {

              subTotal += number_format(allTotal,2);
            
            }



          });
          $(".subCartTotalPrice").text(parseFloat(subTotal));
          var tax = 0;
          var total = (parseFloat(subTotal) + parseFloat(tax)).toFixed(2);
          $(".cartTotalPrice").text(parseFloat(total));
          $(".cartTotalTax").text(parseFloat(tax));


        });



        $("#cartList tr").click(function () {
          //alert("**");
       
          var id = $(this).attr("id");
          var productIdAttr = ".productId" + id;
          var pnameAttr = ".pname" + id;
          var qtyAttr = ".allQty" + id;
          var priceAttr = "#hprice" + id;

          var actualPriceAttr=".actualTotal"+id;

          var ItemPriceAttr = ".money" + id;
          var discountAttr = "#discount" + id;
          var sgstAttr = "#sgst" + id;
          var cgstAttr = "#cgst" + id;
          var sellerNameAttr = "#sellerName" + id;
          var sellerIdAttr = "#sellerId" + id;
          var pSkuidAttr="#pSkuid"+id;
          var catIdAttr = "#catId" + id;
          var shippingAttr = "#shipping" + id;
          var sgstAmtAttr = "#sgstAmt" + id;
          var cgstAmtAttr = "#cgstAmt" + id;

          var gst = 0;

          var qty = $(qtyAttr).val();
          var pname = $(pnameAttr).text();
          var productId = $(productIdAttr).val();
          var price = $(priceAttr).val();

          var actualPrice=$(actualPriceAttr).val();
       
          var discount = $(discountAttr).val();;
          var sgst = $(sgstAttr).val();;
          var cgst = $(cgstAttr).val();;
          var sellerName = $(sellerNameAttr).val();;
          var sellerId = $(sellerIdAttr).val();
          var catId = $(catIdAttr).val();;
          var pSkuid = $(pSkuidAttr).val();;
          var shipping = $(shippingAttr).val();;
          var allTax = 0;
          var sgstAll = "#sgstAmt" + id;
          var cgstAll = "#cgstAmt" + id;
          var itemTotal = parseFloat((qty) * (price) - ((qty) * (price) * discount * 0.01)).toFixed(2);
          $(ItemPriceAttr).text(itemTotal);
          $(actualPriceAttr).text(discount*price*qty*0.01).toFixed(2);

          $(sgstAmtAttr).text(parseFloat(itemTotal * 0.01 * sgst).toFixed(2));
          $(cgstAmtAttr).text(parseFloat(itemTotal * 0.01 * cgst).toFixed(2));

        

          allTax = parseFloat(itemTotal * 0.01 * sgst + itemTotal * 0.01 * cgst).toFixed(2);


          $('table > tbody  > tr').each(function (index, tr) {
             //alert("uuu"+index);
            var ItemPriceAttr = ".money" + index;
            var sgstAmtAttr = "#sgstAmt" + index;
            var cgstAmtAttr = "#cgstAmt" + index;


            var allTotal = $(ItemPriceAttr).text();

            if (allTotal != "" || isNaN(allTotal)) {

              subTotal += parseFloat(allTotal);
              gst += parseFloat($(sgstAmtAttr).text()) + parseFloat($(cgstAmtAttr).text());
            }

          });


          $(".subCartTotalPrice").text(parseFloat(subTotal).toFixed(2));
          $(".cartTotalTax").text(parseFloat(gst).toFixed(2));
          var total = parseFloat(parseFloat(subTotal) + (gst)).toFixed(2);
          $(".cartTotalPrice").text(parseFloat(total));

          $.ajax({
            url: 'admin/action/cat_cookies.php', // Calls the same script
            type: 'POST',
            data: {
              pid: productId,
              pSkuid:pSkuid,
              pname: pname,
              quantity: qty,
              price: price,
              itemTotal: itemTotal,
              subTotal: subTotal,
              tax: allTax,
              totalAmt: total,
              shipping: shipping,
              discount: discount,
              sellerId:sellerId,
              sellerName: sellerName,
              cgst: cgst,
              sgst: sgst,
              catId:catId,
              condition: "add"
            }
          });
          subTotal = 0;
        });
      });

    </script>
  </header>

  <section class="py-5 mb-1" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <?php include 'includes/breadcrumb.php' ?>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid">
      <div class="row g-5">
        <div class="col-md-8">

          <div class="table-responsive cart">
            <table id="cartList" class="table">
              <thead>
                <tr>
                  <th scope="col" class="card-title text-uppercase text-muted">Product</th>
                  <th scope="col" class="card-title text-uppercase text-muted">Quantity</th>
                  <th scope="col" class="card-title text-uppercase text-muted">Subtotal</th>
                  <th scope="col" class="card-title text-uppercase text-muted"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $resp = isset($_COOKIE['user_cart']) ? json_decode($_COOKIE['user_cart'], true) : 0;
                if ($resp == 0) {
                  header('Location:www.google.com');
                }

                $result = json_decode($_COOKIE['user_cart'], true);
                $customIndex = 0;
                foreach ($result as $index => $order) {
                  ?>
                  <tr id="<?php echo $customIndex ?>" class="highlight">
                    <input type="hidden" class="productId<?php echo $customIndex ?>" value="<?php echo $order['pid'] ?>">
              
                    <td scope="row" class="py-4">
                      <?php if($validPid!="" && ($order['pid']==$validPid)){ ?>
                    <span style="color:red">You can add only <?php echo $validMessage ?> items . Please remove additional item </span>
                    <?php } ?>
                      <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                        <div class="col-lg-3">
                          <div class="card-image">
                            <img src="images/product-thumb-11.jpg" alt="cloth" class="img-fluid">
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="  card-detail ps-3">
                            <h5 class=" card-title">
                              <a href="#"
                                class="pname<?php echo $customIndex ?>   text-decoration-none"><?php echo $order['productName'] ?></a>

                            </h5>
                            <small>&#8377; <?php echo $order['price'] ?></small><br>
                            <small><b>Discount :</b> <?php echo $order['discount'] != "" ? $order['discount'] : 0 ?>
                              %</small><br>
                            <!-- <small><b>Seller Name :</b>
                              <?php // echo $order['sellerName'] != "" ? $order['sellerName'] : "" ?>
                            </small><br> -->
                            <small><b>SGST:</b> <?php echo $order['sgst'] != "" ? $order['sgst'] : 0 ?> %</small> &
                            <small>CGST: <?php echo $order['cgst'] != "" ? $order['cgst'] : 0 ?> %</small><br>

                            <input type="hidden" id="discount<?php echo $customIndex ?>"
                              value="<?php echo ($order['discount']); ?>">
                              <input type="hidden" id="pSkuid<?php echo $customIndex ?>"
                              value="<?php echo ($order['pSkuid']); ?>">
                              <input type="hidden" id="sellerId<?php echo $customIndex ?>"
                              value="<?php echo ($order['sellerId']); ?>">
                              <input type="hidden" id="catId<?php echo $customIndex ?>"
                              value="<?php echo ($order['catId']); ?>">
                            <input type="hidden" id="sellerName<?php echo $customIndex ?>"
                              value="<?php echo ($order['sellerName']); ?>">
                            <input type="hidden" id="sgst<?php echo $customIndex ?>"
                              value="<?php echo ($order['sgst']); ?>">
                            <input type="hidden" id="cgst<?php echo $customIndex ?>"
                              value="<?php echo ($order['cgst']); ?>">
                            <input type="hidden" id="shipping<?php echo $customIndex ?>"
                              value="<?php echo ($order['shipping']); ?>">
                          </div>
                        </div>

                      </div>
                    </td>
                    <td class=" py-4">
                      <div class="input-group product-qty w-50">
                        <?php //if ($order['quantity'] > 0) { ?>
                          <span class="input-group-btn pass-quantity">
                            <button type="button" class="delbtn quantity-left-minus btn btn-light btn-number"
                              data-type="minus">
                              <svg width="16" height="25">
                                <use xlink:href="#minus"></use>
                              </svg>
                            </button>
                          </span>
                          <input type="text" id="quantity" name="quantity"
                            class="allQty<?php echo $customIndex ?> form-control input-number text-center"
                            value="<?php echo $order['quantity'] ?>">
                          <span class="input-group-btn">
                            <button type="button" class="addbtn quantity-right-plus btn btn-light btn-number"
                              data-type="plus" data-field="">
                              <svg width="16" height="25">
                                <use xlink:href="#plus"></use>
                              </svg>
                            </button>
                          </span>

                        <?php //} 
                        //else {

                          ?>
                          <!-- <button class="btn btn-success py-1 px-2 text-uppercase btn-rounded-none w-100">Add</button> -->

                        <?php //} ?>
                      </div>
                      <br>
                      <small><b>SGST:</b> &#8377; <span
                          id="sgstAmt<?php echo $customIndex ?>"><?php echo number_format(((str_replace(",","",$order['itemTotal']) * 0.01 * $order['sgst'])), 2) ?></span></small><br></span>
                      <small><b>CGST:</b> &#8377;<span
                          id="cgstAmt<?php echo $customIndex ?>"><?php echo number_format(((str_replace(",","",$order['itemTotal']) * 0.01 * $order['cgst'])), 2) ?></span></small><br></span>

                    </td>
                    <td class="py-4">
                    <div class="total-price">
                        <input type="hidden" id="hprice<?php echo $customIndex ?>"
                          value="<?php echo ($order['price']); ?>">
                        &#8377;<span class="money<?php echo $customIndex ?> text-dark" id="<?php echo $order['pid'] ?>">
                          <?php echo number_format(str_replace(",","",$order['itemTotal']), 2); ?>
                        </span>
                       
                          <br><br>  <small><b>Discount :</b><br> &#8377; <span class="actualTotal<?php echo $customIndex ?>"> <?php echo $order['discount'] != "" ? ($order['discount']*$order['quantity']*$order['price']*0.01) : 0 ?></span>
                        </span>
                      </div>




                    </td>
                    <td class="py-4">
                      <div class="removecarts cart-remove">

                        <a href="#">
                          <svg width="24" height="24">
                            <use xlink:href="#trash"></use>
                          </svg>
                        </a>
                      </div>
                    </td>
                    
                  </tr>
                
                 
                  <?php $totalprice = str_replace(",","",$order['itemTotal']) + $totalprice; 
                  ?>
                  <?php $tax = number_format(($order['tax']) + $tax,2); ?>
                  <?php $customIndex++;
                } ?>
                <!-- </form>  -->

              </tbody>
            </table>
          </div>

        </div>
        <div class="col-md-4">
          <div class="cart-totals bg-grey py-5">
            <h4 class="text-dark pb-4">Cart Total</h4>
            <div class="total-price pb-5">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          &#8377;<span class="subCartTotalPrice"><?php echo number_format($totalprice,2); ?>
                        </bdi>
                      </span>
                    </td>
                  </tr>

                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total Tax</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          &#8377;<span class="cartTotalTax"><?php echo number_format($tax,2); ?></bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          &#8377;<span class="cartTotalPrice"><?php echo number_format(
                            $totalprice + $tax,
                            2
                          ); ?></bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap row g-2">

              <div class="col-md-12"><button class="btn btn-success py-3 px-4 text-uppercase btn-rounded-none w-100"
                  onclick="window.location.href='shop.php';">Continue Shopping</button></div>
              <div class="col-md-12"><button class="btn btn-primary py-3 px-4 text-uppercase btn-rounded-none w-100"
                  onclick="window.location.href='checkout.php';">Proceed to checkout</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php include 'includes/newsletter.php'; ?>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>
</body>

</html>