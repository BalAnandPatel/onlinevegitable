<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php';

  ?>
  
</head>
<?php
//print_r($_COOKIE['user_cart']);
//setcookie('user_cart', '', time() - 3600, "/");
$url_param_type = isset($_GET['pid']) ? $_GET['pid'] : "";
$url_sub_param_type = isset($_GET['sid']) ? $_GET['sid'] : "";
$pageSize=isset($_GET['pageSize']) ? $_GET['pageSize'] : 0;


include "constant.php";
include_once 'includes/curl_header_home.php';

$data = array("pid" => $url_param_type,"sid"=>$url_sub_param_type,"catId"=>null,"filter"=>"",
"pageSize"=>$pageSize,"sort"=>"");
$postdata = json_encode($data);


$url_cat = $URL . "category/readCategory.php";
$readCurl = new CurlHome();


$response_cat = $readCurl->createCurl($url_cat, null, 0, 5, 1);
//print_r($response_all);




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

  $userId = $_SESSION['email'];
  $price = $_POST["price"];
  $pname = $_POST["pname"];
  $productSkuid = $_POST["productSKUID"];
  $productId = $_POST["productId"];
  $sellerId = $_POST["sellerId"];
  $quantity = $_POST["quantity"];
  $createdOn = date('Y-m-d h:i:sa');
  $discount = $_POST["discount"];
  $shipping=$_POST['shipping'];
  $catId=$_POST['catId'];

  $data = array(
    "pid" => $productId,
    "pSkuid" => $productSkuid,
    "productName" => $pname,
    "quantity" => $quantity,
    "price" => $price,
    "sellerId" => $sellerId,
    "itemTotal" => $quantity * $price,
    "discount" => $discount,
    "shipping"=>$shipping,
    "catId"=>$catId

  );


  $cart = isset($_COOKIE['user_cart']) ? json_decode($_COOKIE['user_cart'], true) : [];

  $result= searchUserByName($cart, $productId);

  if ($result->validation) {
     setcookie('user_cart', json_encode($result->orders), time() + (86400 * 30), "/"); // Cookie valid for 30 days

  } else {
   
    $cart[] = $data;
    setcookie('user_cart', json_encode($cart), time() + (86400 * 30), "/"); // Cookie valid for 30 days

  }
  
  $condition=$url_param_type!=""?("pid=".$url_param_type):("sid=".$url_sub_param_type);

  header('Location: ' . $_SERVER['PHP_SELF'] . "?" . $condition);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {

$data = array("pid" => "","sid"=>"","catId"=>null,"filter"=>$_POST['search'],"pageSize"=>"","sort"=>"");
$postdata = json_encode($data);

$url_all = $URL . "product/readProductById.php";

$readCurl = new CurlHome();

$response_all = $readCurl->createCurl($url_all, $postdata, 0, 5, 1);

$resultProduct = json_decode($response_all);
}

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
          "shipping"=>$_POST["shipping"]
        );
       
        unset($orders[$index]);
        array_push($orders, $data);
        $response->orders=$orders;
        $response->validation=true;
        // Return the user object if found
        return $response;
      }
    }
    return  $response->validation=false;

    
}

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

                $prodSize=sizeof($resultcat->records);
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
                  <a href="#" class="nav-link">Less than  &#8377;10</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link"> &#8377;10-  &#8377;20</a>
                </li>
               
                <li class="tags-item">
                  <a href="#" class="nav-link"> &#8377;40-  &#8377;50</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>

        <main class="col-md-10">
          <div class="filter-shop d-flex justify-content-between">
            <div class="showing-product">
              <p>Showing 1–<?php echo  $prodSize?> of <?php echo  $prodSize?> results</p>
            </div>
            <div class="sort-by">
              <select id="input-sort" class="form-control" data-filter-sort="" data-filter-order="" onchange="sortingOrders()">
                <option value="ame_asc">Default sorting</option>
                <option value="name_asc">Name (A - Z)</option>
                <option value="name_desc">Name (Z - A)</option>
                <option value="price_asc">Price (Low-High)</option>
                <option value="price_desc">Price (High-Low)</option>
                <!-- <option value="">Rating (Highest)</option>
                <option value="">Rating (Lowest)</option> -->
                
              </select>
            </div>
          </div>

          <div class="product-grid row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            <?php
            if ($resultProduct != null)
              for ($i = 0; $i < sizeof($resultProduct->records); $i++) {
            // print_r($resultProduct->records);
                ?>
                <div class="col">
                  <form id="cart" class="form-group flex-wrap" action="" method="POST">
                    <div class="product-item">
                      <span
                        class="badge bg-success position-absolute m-3">&#8377;<?php echo $resultProduct->records[$i]->discount; ?>
                        discount</span>
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="products.php" title="Product Title">
                          <img src="images/thumb-orange-juice.png" alt="Product Thumbnail" class="tab-image">
                        </a>
                      </figure>
                      <h3><?php echo $resultProduct->records[$i]->productName; ?></h3>

                      <span class="qty"><?php echo $resultProduct->records[$i]->quantity; ?> Unit</span><span
                        class="rating"><svg width="24" height="24" class="text-primary">
                          <use xlink:href="#star-solid"></use>
                        </svg> 4.5</span>
                      <h6>Seller: <?php echo $resultProduct->records[$i]->sellerName; ?></h6>
                      <span class="price">Price: &#8377;<?php echo $resultProduct->records[$i]->price; ?></span>
                      <input type="hidden" name="pname" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->productName; ?>" />
                      <input type="hidden" name="price" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->price; ?>" />
                      <input type="hidden" name="productId" style="display:none;"
                        value="<?php echo $resultProduct->records[$i]->pid; ?>">
                      <input type="hidden" name="productSKUID" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->skuId; ?>">
                      <input type="hidden" name="sellerId" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->sellerId; ?>">
                      <input type="hidden" name="categoryId" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->categoriesId; ?>">                       
                        <input type="hidden" name="discount" style="display:none;"
                        value=" <?php echo $resultProduct->records[$i]->discount; ?>">
                      
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

                            Out of Stock

                            <?php
                          }
                        ?>

                      </div>
                    </div>
                  </form>
                </div>

              <?php } ?>
          </div>
          <!-- / product-grid -->

          <nav class="text-center py-4" aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-center">
              <!-- <li class="page-item disabled">
                <a class="page-link bg-none border-0" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li> -->
              <?php
function generatePagination($currentPage, $totalPages,$url_param_type,$url_sub_param_type) {
    $pagination = '';
    
     $condition=$url_param_type!=""?("pid=".$url_param_type):("sid=".$url_sub_param_type);

    if ($totalPages <= 1) {
        return $pagination;
    }

    // Show first page link
    if ($currentPage > 1) {
        $pagination .= '<li class="page-item active" aria-current="page"><a class="page-link border-0" href="?'.$condition.'&page=1">1</a><li> ';
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
    $pagination .= '<li class="page-item active" aria-current="page"><span>'. $currentPage . '</span> </li>';

    // Show next page link
    if ($currentPage < $totalPages - 1) {
        $pagination .= ' <li class="page-item active" aria-current="page"><a class="page-link border-0" href="?'.$condition.'&page=' . ($currentPage + 1) . '">' . ($currentPage + 1) . '</a> </li>';
    }

    // Show ellipsis if needed
    if ($currentPage < $totalPages - 2) {
        $pagination .= '... ';
    }

    // Show last page link
    if ($currentPage < $totalPages) {
        $pagination .= '<li class="page-item active" aria-current="page"><a class="page-link border-0" href="?'.$condition.'&page=' . $totalPages . '">' . $totalPages . '</a><li>';
    }

    return $pagination;
}

$url_param_type = isset($_GET['pid']) ? $_GET['pid'] : null;
$url_sub_param_type = isset($_GET['sid']) ? $_GET['sid'] : null;
// Example usage
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = 10; // Example total pages, adjust as needed

 generatePagination($currentPage, $totalPages,$url_param_type,$url_sub_param_type);
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