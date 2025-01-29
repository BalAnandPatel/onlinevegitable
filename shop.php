<?php include 'includes/header.php';
include "constant.php";
error_reporting(0);
include_once 'includes/curl_header_home.php';
$decoded= isset($_SESSION['decoded'])?$_SESSION['decoded']:"";
if ( isset($_GET['filter'])) {

  $data = array("crid" => "",
   "spid" => "",
    "pid" => "",
     "filter" => $_GET['filter'],
      "pageSize" => "", 
      "sort" => "", 
      "extra" => "",
      "pincode"=>"");
  $postdata = json_encode($data);
  $url_all = $URL . "product/readProductById.php";
  $readCurl = new CurlHome();
  $response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);

  //print_r($response_all);
  $resultProduct = json_decode($response_all);
  //$resultcat = json_decode($response_cat);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sorts'])) {
  $condition = $_POST['sorts'];
  $data = array("crid" => "", "spid" => "", "pid" => "", "filter" => (isset($_GET['filter'])?$_GET['filter']:""), "pageSize" => $pageSize, "sort" => $_POST['sorts'], "extra" => "");
  $postdata = json_encode($data);
  $url_all = $URL . "product/readProductById.php";
  $readCurl = new CurlHome();
  $response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
  // echo "--sort";
  //print_r($response_all);
  $resultProduct = json_decode($response_all);
  $resultcat = json_decode($response_cat);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
  $data = array("crid" => "","spid"=>"","pid"=>"","filter"=>"","pageSize"=>"","sort"=>"","extra"=>$_POST['search']);
  $postdata = json_encode($data);
  //print_r($postdata);
   $url_all_x = $URL . "product/readProductById.php";
  $readCurl = new CurlHome();
  $response_all = $readCurl->createCurl($url_all_x, $postdata, 0, 5, 1);
  //print_r($response_all);
  $resultProduct = json_decode($response_all);
  }
  
$url_param_type = isset($_GET['crid']) ? $_GET['crid'] : "";
$url_sub_param_type = isset($_GET['spid']) ? $_GET['spid'] : "";
$filter = isset($_GET['filter']) ? $_GET['filter'] : "";
$pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : "";
$sorts=isset($_POST['sorts'])?$_POST['sorts']:"";


// Read Pincode
$pincode_url = $URL . "user/read_user_pincode.php";
$datapincode = ($decoded->data->email!="")? array("email" => $decoded->data->email):array("email" =>"");
//print_r($datapincode);
$postdatapincode = json_encode($datapincode);
$readCurlpincode = new CurlHome();
$response_pincode = $readCurlpincode->createCurl($pincode_url, $postdatapincode, 0, 5, 1);
//print_r($response_pincode); 
 $resultpincode = json_decode($response_pincode);
//echo "*************************";
// print_r($resultpincode);
// echo isset($_COOKIE['pincode']);
  $pincode=(isset($_COOKIE['pincode'])?($_COOKIE['pincode']):($resultpincode->records[0]->pincode!=""?$pincode=$resultpincode->records[0]->pincode:0));


// Read All Product from here

// Read all Product
include_once 'includes/curl_header_home.php';
$data = array("crid" => $url_param_type, "spid" => $url_sub_param_type, "pid" => "", "filter" => $filter, "pageSize" => $pageSize, "sort" => "", "pincode" => "$pincode", "extra" => "");
$postdata = json_encode($data);
// echo "**********". $_POST["sorting"];
//print_r($data);
$url_all = $URL . "product/readProductById.php";
$url_cat = $URL . "category/readCategory.php";
$readCurl = new CurlHome();
$response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
//print_r($response_all);
$response_cat = $readCurl->createCurl($url_cat, null, 0, 5, 1);
//print_r($response_cat);
$resultcat = json_decode($response_cat);
$resultProduct = json_decode($response_all);



if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['filter'])) {

  $filter =$_GET['filter'];
  $data = array("crid" => "", "spid" => "", "pid" => "", "filter" => $filter, "pageSize" => $pageSize, "sort" => $sorts, "extra" => "");
  $postdata = json_encode($data);

  $url_all = $URL . "product/readProductById.php";
  $readCurl = new CurlHome();

  $response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);
  // echo "---filter"; 
  // print_r($response_all);
  $resultProduct = json_decode($response_all);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Scroll to the stored position if it exists
      const lastPosition = localStorage.getItem('lastPosition');
      if (lastPosition) {
        window.scrollTo(0, parseFloat(lastPosition));
      }

      // Add click event to all sections
      const sections = document.querySelectorAll('.product-item');
      sections.forEach(section => {
        section.addEventListener('click', function () {
          // Store the current scroll position in local storage
          localStorage.setItem('lastPosition', window.scrollY);
        });
      });
    });

    // Clear the stored position when navigating away from the page
    window.addEventListener('beforeunload', function () {
      localStorage.removeItem('lastPosition');
    });

    $(document).ready(function () {
      $('#input-sorting').change(function () {
        var selectedOption = $(this).find(":selected").text();
        $.ajax({
          url: '', // Calls the same script
          type: 'POST',
          data: {
            sorting: selectedOption
          },
          success(res) {
            if (res == "Empty Cart") {
              window.open("shop.php");
            }
          }
        });
      })

      });
  </script>

<style>
        .padding-box {
            padding:1px; /* Add padding to the box */
           
            border-radius: 5px; /* Round the corners */
            color:#fff;
            background-color:  #ff6666
            ; /* Light background color */
            max-width: 140px; /* Set a maximum width */
        }
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

  <div class="shopify-grid">
    <div class="container-fluid">
      <div class="row g-5">
        <aside class="col-md-2">
          <div class="sidebar">
            <div class="widget-menu">
              <div class="widget-search-bar">
                <form role="search" method="get" class="d-flex position-relative">
                  <form class="d-flex mt-3 gap-0" action="index.php">
                    <input class="form-control form-control-lg rounded-2 bg-light" type="email"
                      placeholder="Search here" aria-label="Search here">
                    <button class="btn bg-transparent position-absolute end-0" type="submit"><svg width="24" height="24"
                        viewBox="0 0 24 24">
                        <use xlink:href="#search"></use>
                      </svg></button>
                  </form>
                </form>
              </div>
            </div>
            <!-- <div class="widget-product-categories pt-5">
              <h5 class="widget-title">Categories</h5>
              <ul class="product-categories sidebar-list list-unstyled">
                <?php

                $prodSize = sizeof($resultcat->records);
                for ($i = 0; $i < $prodSize; $i++) {
                  ?>
                  <li class="cat-item">
                    <a href="#" class="nav-link"><?php echo $resultcat->records[$i]->name ?></a>
                  </li>
                  <?php
                }
                ?>
              </ul>
            </div> -->
            <!-- <div class="widget-product-tags pt-3">
              <h5 class="widget-title">Tags</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link">White</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Cheap</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Mobile</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Modern</a>
                </li>
              </ul>
            </div> -->
            <!-- <div class="widget-product-brands pt-3">
              <h5 class="widget-title">Brands</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link">Apple</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Samsung</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Huwai</a>
                </li>
              </ul>
            </div> -->
            <div class="widget-price-filter pt-3">
              <h5 class="widget-titlewidget-title">Filter By Price</h5>
              <ul class="product-tags sidebar-list list-unstyled">

              <li class="tags-item">
                  <a href="shop.php?filter=<?php echo base64_encode(convert_uuencode("LE20") . "_GL") ?>"
                    class="nav-link"> Less than &#8377;20</a>
                </li>

                <li class="tags-item">
                  <a href="shop.php?filter=<?php echo base64_encode(convert_uuencode("GE20&LE50") . "_GL") ?>"
                    class="nav-link"> &#8377;20- &#8377;50</a>
                </li>

                <li class="tags-item">
                  <a href="shop.php?filter=<?php echo base64_encode(convert_uuencode("GE50&LE100") . "_GL") ?>"
                    class="nav-link"> &#8377;50- &#8377;100</a>
                </li>
                <li class="tags-item">
                  <a href="shop.php?filter=<?php echo base64_encode(convert_uuencode("GE100&LE500") . "_GL") ?>"
                    class="nav-link"> &#8377;100- &#8377;500</a>
                </li>
                <li class="tags-item">
                  <a href="shop.php?filter=<?php echo base64_encode(convert_uuencode("GE500") . "_GL") ?>"
                    class="nav-link">Greater than &#8377; 500</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>

        <main class="col-md-10">
          <div class="filter-shop d-flex justify-content-between">
            <div class="showing-product">
              <p>Showing 1–<?php
              $size = 0;
           
              if ($resultProduct != null) {
                $size = sizeof($resultProduct->records);
              }

              echo $size ?> of <?php echo $size ?> results</p>
            </div>
            <div class="sort-by">
              <form action="" method="POST" name="sortingValue">
                <select id="input-sorting" class="form-control" name="sorts" onchange="this.form.submit()"
                  data-filter-sort="" data-filter-order="">
                  <option value="ame_asc">Default sorting</option>
                  <option value="name_asc">Name (A - Z)</option>
                  <option value="name_desc">Name (Z - A)</option>
                  <option value="price_asc">Price (Low-High)</option>
                  <option value="price_desc">Price (High-Low)</option>
                  <!-- <option value="">Rating (Highest)</option>
                <option value="">Rating (Lowest)</option> -->

                </select>
              </form>
            </div>
          </div>

          <marquee behavior="alternate" direction="" style="color: red; font-weight: bold"> <img src="images/announcement.png" style="width: 30px;" alt=""> The order will Be Deliver Next Day which Placed After 02:PM (Order Delivery time between 10:AM  to 08:PM)</marquee>
                <center style="color: rgba(227, 66, 66, 0.8); font-weight: bold">Helpline:-+91-7379351536</center>

          <div class="product-grid row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            <?php
           
            if ($resultProduct != null){
              for ($i = 0; $i < sizeof($resultProduct->records); $i++) {
                // print_r($resultProduct->records);
                ?>
                <div class="col">
                  <form id="cart" class="form-group flex-wrap" action="admin/action/shop_cookies.php" method="POST">
                    <div class="product-item ">
                      <span class="badge bg-primary position-absolute m-3">&#8377;<?php
                      $total = $resultProduct->records[$i]->price;
                      $discount = $resultProduct->records[$i]->discount;
                      echo floatval(round($total * $discount * 0.01, 2)) ?>
                        discount</span>

                      <figure>
                        <a href="products.php?id=<?php echo $resultProduct->records[$i]->pid; ?>" title="Product Title">
                          <?php if(file_exists("seller/productimages/".$resultProduct->records[$i]->skuId ."/".$resultProduct->records[$i]->skuId."1.png")){?>
                          <img src="seller/productimages/<?php echo $resultProduct->records[$i]->skuId;?>/<?php echo $resultProduct->records[$i]->skuId; ?>1.png" alt="Product Thumbnail"  height="100%" width="100%" class="tab-image">
                        <?php } else {?>
                    <img src="seller/productimages/image.png" height="100%" width="100%">
                          <?php } ?>
                        </a>
                      </figure>
                      <h3><?php echo $resultProduct->records[$i]->productName; ?></h3>

                      <span class="qty"><?php echo $resultProduct->records[$i]->quantity; ?> Unit</span><span
                        class="rating"><svg width="24" height="24" class="text-primary">
                          <use xlink:href="#star-solid"></use>
                        </svg> <?php echo $resultProduct->records[$i]->rating; ?></span>
                      <!-- <h6>Seller: <?php // echo $resultProduct->records[$i]->sellerName; ?></h6> -->
                      <span class="price">Price: &#8377;<?php echo $resultProduct->records[$i]->price; ?></span>
                      <input type="hidden" name="pname" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->productName; ?>" />
                      <input type="hidden" name="price" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->price; ?>" />
                      <input type="hidden" name="productId" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->pid; ?>">
                        <input type="hidden" name="description" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->description; ?>">
                      <input type="hidden" name="productSKUID" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->skuId; ?>">
                      <input type="hidden" name="sellerId" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->sellerId; ?>">
                        <input type="hidden" name="sellerName" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->sellerName; ?>">
                      <input type="hidden" name="categoryId" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->categoriesId; ?>">
                      <input type="hidden" name="discount" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->discount; ?>">
                        <input type="hidden" name="sgst" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->sgst; ?>">
                        <input type="hidden" name="cgst" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->cgst; ?>">

                      <input type="hidden" name="shipping" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->shippingCharge; ?>">
                      <input type="hidden" name="catId" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->categoriesId; ?>">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                          <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                              <svg width="16" height="16">
                                <use xlink:href="#minus"></use>
                              </svg>
                            </button>
                          </span>
                          <input type="text" id="quantity" name="quantity" class="form-control input-number text-center"
                            value="1">
                          <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                              data-field="">
                              <svg width="16" height="16">
                                <use xlink:href="#plus"></use>
                              </svg>
                            </button>
                          </span>
                        </div>


                        <?php
                        if ($resultProduct->records != null)
                          if ($resultProduct->records[$i]->quantity > 0) {
                            ?>
                            <button type="submit" name="submit" class="nav-link">Add to Cart <svg width="18" height="18">
                                <use xlink:href="#cart"></use>
                              </svg></button>
                          <?php } else {

                            ?>

                            

                            <div class="padding-box">
    <?php

    echo "Out of Stock";
    ?>
</div>
                            <?php
                          }
                        ?>

                      </div>
                    </div>
                  </form>
                </div>

              <?php }}
              else{
                echo "<center><h2>No Records</h2></center>";
              } ?>
          </div>


          <nav class="text-center py-4" aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-center">
              <!-- <li class="page-item disabled">
                <a class="page-link bg-none border-0" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li> -->
              <?php
              function generatePagination($currentPage, $totalPages, $url_param_type, $url_sub_param_type)
              {
                $pagination = '';

                $condition = $url_param_type != "" ? ("crid=" . $url_param_type) : ("spid=" . $url_sub_param_type);

                if ($totalPages <= 1) {
                  return $pagination;
                }

                // Show first page link
                if ($currentPage > 1) {
                  $pagination .= '<li class="page-item active" aria-current="page"><a class="page-link border-0" href="?' . $condition . '&page=1">1</a><li> ';
                }

                // Show ellipsis if needed
                if ($currentPage > 2) {
                  $pagination .= '... ';
                }

                // Show previous page link
                // if ($currentPage > 2) {
                //     $pagination .= '<li class="page-item active" aria-current="page"><a class="page-link border-0" href="?'.$condition.'&page=' . ($currentPage - 1) . '">' . ($currentPage - 1) . '</a> </li>';
                // }
              
                // Show current page
                $pagination .= '<li class="page-item active" aria-current="page"><span>' . $currentPage . '</span> </li>';

                // Show next page link
                if ($currentPage < $totalPages - 1) {
                  $pagination .= ' <li class="page-item active" aria-current="page"><a class="page-link border-0" href="?' . $condition . '&page=' . ($currentPage + 1) . '">' . ($currentPage + 1) . '</a> </li>';
                }

                // Show ellipsis if needed
                if ($currentPage < $totalPages - 2) {
                  $pagination .= '... ';
                }

                // Show last page link
                if ($currentPage < $totalPages) {
                  $pagination .= '<li class="page-item active" aria-current="page"><a class="page-link border-0" href="?' . $condition . '&page=' . $totalPages . '">' . $totalPages . '</a><li>';
                }

                return $pagination;
              }

              $url_param_type = isset($_GET['crid']) ? $_GET['crid'] : null;
              $url_sub_param_type = isset($_GET['spid']) ? $_GET['spid'] : null;
              // Example usage
              $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
              $totalPages = 10; // Example total pages, adjust as needed
              
              generatePagination($currentPage, $totalPages, $url_param_type, $url_sub_param_type);
              ?>


              <!-- <li class="page-item">
                <a class="page-link border-0" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li> -->
            </ul>
          </nav>

        </main>

      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>

</html>