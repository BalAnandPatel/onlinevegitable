<!DOCTYPE html>
<html lang="en">
  
<head>
  <?php

include 'includes/header.php';
   echo htmlentities($_COOKIE['fanclub_articlesvisited'], ENT_QUOTES, 'UTF-8'); 
   unset($_COOKIE['fanclub_articlesvisited']);
  
   if (isset($_COOKIE['pin'])) {
    echo $_COOKIE['pin'];
} else {
    echo 'not found';
}
   //echo $pincode;
  
  ?>
</head>
<?php
include "constant.php";
include_once 'includes/curl_header_home.php';

$data = array("crid" => "", "spid" => "", "pid" => $_GET['id'], "filter" => "", "pageSize" => "", "sort" => "","extra"=>"");

$postdata = json_encode($data);
//print_r($postdata);
$url_all = $URL . "product/readProductById.php";

$readCurl = new CurlHome();

$response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
//print_r($response_all);
$resultProduct = json_decode($response_all);
//print_r($resultProduct);
//&& isset($_POST['submit'])

// 
    
    function searchUserByName($orders, $pid)
    {
      $response = new stdClass();
    
      foreach ($orders as $index => $order) {
    
        if ($order['pid'] == $pid) {
    
          $data = array(
            "pid" => $_POST["productId"],
            "pSkuid" => $_POST["productSKUID"],
            "productName" => $_POST["pname"],
            "quantity" => $order['quantity'] + $_POST["quantity"],
            "price" => $_POST["price"],
            "sellerId" => $_POST["sellerId"],
            "itemTotal" => ($order['quantity'] + $_POST["quantity"]) * $order['price'],
            "discount" => $_POST["discount"],
            "shipping" => $_POST["shipping"]
          );
    
          unset($orders[$index]);
          array_push($orders, $data);
          $response->orders = $orders;
          $response->validation = true;
          // Return the user object if found
          return $response;
        }
      }
      return $response->validation = false;
    }


?>
<body>
  <?php include 'includes/svg.php' ?>


<?php include 'includes/preloader.php' ?>

  <?php  include 'includes/global-cart.php' ?>

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
  <section id="selling-product" class="single-product mt-0 mt-md-5">
    <div class="container-fluid">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="#">Home</a>
        <a class="breadcrumb-item" href="#">Pages</a>
        <span class="breadcrumb-item active" aria-current="page">
          <?php echo $resultProduct->records[0]->sellerName ?></span>
      </nav>
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-2">
              <!-- product-thumbnail-slider -->
              <div class="swiper product-thumbnail-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    
                    <img src="seller/productimages/<?php echo $resultProduct->records[0]->skuId;?>/<?php echo $resultProduct->records[0]->skuId;?>1.png" alt="" class="thumb-image img-fluid">
                  </div>
                  
                </div>
              </div>
              <!-- / product-thumbnail-slider -->
            </div>
            <div class="col-md-12 col-lg-10">
              <!-- product-large-slider -->
              <div class="swiper product-large-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/product-large-1.jpg"><img
                        src="seller/productimages/<?php echo $resultProduct->records[0]->skuId;?>/<?php echo $resultProduct->records[0]->skuId;?>1.png" alt="product-large" class="img-fluid"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/product-large-2.jpg"><img
                        src="images/product-large-2.jpg" alt="product-large" class="img-fluid"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/product-large-3.jpg"><img
                        src="images/product-large-3.jpg" alt="product-large" class="img-fluid"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/product-large-4.jpg"><img
                        src="images/product-large-4.jpg" alt="product-large" class="img-fluid"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/product-large-5.jpg"><img
                        src="images/product-large-5.jpg" alt="product-large" class="img-fluid"></div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <!-- / product-large-slider -->
            </div>
          </div>
        </div>
        <?php 
           if ($resultProduct != null) {
            $size = sizeof($resultProduct->records);
          }
          ?>
        <div class="col-lg-5">
          <form action="admin/action/shop_cookies.php" method="POST">
          <div class="product-info">
            <div class="element-header">
              <h2 itemprop="name" class="display-6"><?php echo $resultProduct->records[0]->productName ?></h2>
              <div class="rating-container d-flex gap-0 align-items-center">
                <div class="rating" data-rating="1">
                  <svg width="32" height="32" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg>
                </div>
                <div class="rating" data-rating="2">
                  <svg width="32" height="32" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg>
                </div>
                <div class="rating" data-rating="3">
                  <svg width="32" height="32" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg>
                </div>
                <div class="rating" data-rating="4">
                  <svg width="32" height="32" class="text-secondary">
                    <use xlink:href="#star-solid"></use>
                  </svg>
                </div>
                <div class="rating" data-rating="5">
                  <svg width="32" height="32" class="text-secondary">
                    <use xlink:href="#star-solid"></use>
                  </svg>
                </div>
                <span class="rating-count">(<?php echo $resultProduct->records[0]->rating!=""?$resultProduct->records[0]->rating:0 ?>)</span>
              </div>
            </div>
            <div class="product-price pt-3 pb-3">
              <strong class="text-primary display-6 fw-bold">&#8377;<?php echo round($resultProduct->records[0]->price-($resultProduct->records[0]->price*$resultProduct->records[0]->discount*0.01),2) ?> </strong><del class="ms-2">&#8377;<?php echo $resultProduct->records[0]->price ?></del>
            </div>
            <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Discount:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item"><?php echo $resultProduct->records[0]->discount ?>%</li>
                </ul>
                <br>
               
              </div>
              <div class="meta-item d-flex align-items-baseline">
              
                <h6>Seller: <?php echo $resultProduct->records[0]->sellerName; ?></h6>
              </div>
           
            <p><?php echo $resultProduct->records[0]->description ?></p>
            <div class="cart-wrap py-5">
              <div class="product-quantity pt-3">
                <div class="stock-number text-dark"><em><?php echo $resultProduct->records[0]->quantity ?> in stock</em></div>
                <div class="stock-button-wrap">

                  <div class="input-group product-qty" style="max-width: 150px;">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center"
                      value="1" min="1" max="1000">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <input type="hidden" name="pname" style="display:none;"
                        value="<?php echo $resultProduct->records[0]->productName; ?>" />
                      <input type="hidden" name="price" style="display:none;"
                        value="<?php echo $resultProduct->records[0]->price; ?>" />
                      <input type="hidden" name="productId" style="display:none;"
                        value="<?php echo $resultProduct->records[0]->pid; ?>">
                      <input type="hidden" name="productSKUID" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->skuId; ?>">
                      <input type="hidden" name="sellerId" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->sellerId; ?>">
                      <input type="hidden" name="categoryId" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->categoriesId; ?>">
                      <input type="hidden" name="discount" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->discount; ?>">
                        <input type="hidden" name="sellerName" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->sellerName; ?>">
                        <input type="hidden" name="sgst" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->sgst; ?>">
                        <input type="hidden" name="cgst" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->cgst; ?>">
                      <input type="hidden" name="shipping" style="display:none;"
                        value=" <?php echo $resultProduct->records[0]->shippingCharge; ?>">
                      <input type="hidden" name="catId" style="display:none;"
                        value="<?php echo $resultProduct->records[0]->categoriesId; ?>">
                  <div class="qty-button d-flex flex-wrap pt-3">
                    <button type="submit" name="buyNow" class="btn btn-primary py-3 px-4 text-uppercase me-3 mt-3">Buy now</button>
                    <button type="submit" name="addToCart" value="1269"
                      class="btn btn-dark py-3 px-4 text-uppercase mt-3">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="meta-product py-2">
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">SKUID:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item"><?php echo $resultProduct->records[0]->skuId ?></li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Category:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#"><?php echo $resultProduct->records[0]->description ?></a>,
                  </li>
                  
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Tags:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#">Classic</a>,
                  </li>
                  <li data-value="S" class="select-item">
                    <a href="#"> Modern</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="product-info-tabs py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="d-flex flex-column flex-md-row align-items-start gap-5">
          <div class="nav flex-row flex-wrap flex-md-column nav-pills me-3 col-lg-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <button class="nav-link text-start active" id="v-pills-description-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-description" type="button" role="tab" aria-controls="v-pills-description"
              aria-selected="true">Description</button>
            <!-- <button class="nav-link text-start" id="v-pills-additional-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-additional" type="button" role="tab" aria-controls="v-pills-additional"
              aria-selected="false">Additional Information</button> -->
            <!-- <button class="nav-link text-start" id="v-pills-reviews-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-reviews" type="button" role="tab" aria-controls="v-pills-reviews"
              aria-selected="false">Customer Reviews</button> -->
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-description" role="tabpanel"
              aria-labelledby="v-pills-description-tab" tabindex="0">
              <h5>Product Description</h5>
              <p><?php echo $resultProduct->records[0]->description ?></p>
             
            </div>
            <!-- <div class="tab-pane fade" id="v-pills-additional" role="tabpanel" aria-labelledby="v-pills-additional-tab"
              tabindex="0">
              <p><?php echo $resultProduct->records[0]->additional_info ?>
            </div> -->
           <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab"
              tabindex="0">
           
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>
</body>

</html>