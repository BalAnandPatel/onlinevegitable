<?php
include "constant.php";
include_once 'curl_header_home.php';
$url_cat = $URL . "category/readSubCategory.php";
$readCurl = new CurlHome();
$response_cat = $readCurl->createCurl($url_cat, null, 0, 2, 1);
$resultcat = json_decode($response_cat);
//print_r($response_cat);
?>
<?php if (isset($_COOKIE['pincode'])) { ?>
  <button class="btn btn-primary my-4" style="font-size: 70%;color:#000">Current Location : <?php echo $_COOKIE['pincode'] ?> <a href="unset_pincode.php"> (Change location)</a></button>
<?php } ?>
<div class="row py-3 border-bottom">

  <div class="col-sm-2   col-lg-3 text-center text-sm-start">
    <div class="main-logo">
      <a href="index.php">
        <img src="images/mainlogo.png" alt="logo" width="40%" class="img-fluid">
      </a>
    </div>
  </div>


  <div class="col-sm-5 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block my-4">

    <form id="search-form" class="text-center" action="shop.php" method="POST">
      <div class="search-bar row bg-light p-2 my-2 rounded-4">
        <div class="col-md-4 d-none d-md-block">
          <select class="form-select border-0 bg-transparent" name="category">
            <option value="shop.php">All Items</option>
            <?php

            if (isset($resultcat))
              foreach ($resultcat->records[0] as $key => $value) {
            ?>
              <option value="shop.php?crid=<?php echo $value->id ?>"><?php echo $key ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-11 col-md-7">

          <input type="text" id="search" name="search" autocomplete="off" class="form-control border-0 bg-transparent"
            placeholder="Search for more than 20,000 products">

        </div>
        <div class="col-1 my-1">
          <input type="submit" value="" style=" background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTIxLjcxIDIwLjI5TDE4IDE2LjYxQTkgOSAwIDEgMCAxNi42MSAxOGwzLjY4IDMuNjhhMSAxIDAgMCAwIDEuNDIgMGExIDEgMCAwIDAgMC0xLjM5Wk0xMSAxOGE3IDcgMCAxIDEgNy03YTcgNyAwIDAgMS03IDdabSIvPjwvc3ZnPg==') no-repeat center center; background-size: 24px 24px; border: none; width: 24px; height: 24px; padding: 0; cursor: pointer; ">

        </div>
      </div>
    </form>
  </div>

  <div
    class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
    <!-- <div class="support-box text-end d-none d-xl-block">
      <span class="fs-6 text-muted">For Support?</span>
      <h6 class="mb-1">+980-34984089</h6>
    </div> -->
    <a href="seller/index.php" target="_blank">
      <button class="btn btn-primary my-4" style="font-size: 70%;color:#000">Seller Login</button>
    </a>
    <ul class="d-flex justify-content-end list-unstyled m-1">

      <li class="nav-item dropdown rounded-circle sm-light p-1 mx-4">

        <?php

        $currTime = time();
        if (isset($_SESSION['decoded'])) {

          if ($currTime < $_SESSION['decoded']->exp) {
        ?><a class="nav-link dropdown-toggle  mx-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#user"></use>
              </svg>&nbsp;
              <?php
              echo $user = substr((isset($_SESSION["name"]) ? $_SESSION["name"] : 'Guest'), 0, 7);
              if ($user == 'Guest') {
                unset($_SESSION);
              }
              ?>
            </a>

            <ul class="dropdown-menu" aria-labelledby="pages">
              <li><a href="account.php" class="dropdown-item">Account <span
                    class="badge bg-success text-dark ms-2"></span></a></li>
              <li><a href="orders.php" class="dropdown-item">Orders <span class="badge bg-success text-dark ms-2"></span></a>
              </li>
              <!-- <li><a href="settings.php" class="dropdown-item">Settings <span
                    class="badge bg-success text-dark ms-2"></span></a></li> -->
              <li><a href="logout.php" class="dropdown-item">Logout <span
                    class="badge bg-success text-dark ms-2"></span></a></li>
            </ul>

            <?php
            } else {
                unset($_SESSION['decoded']);
                unset($_SESSION['email']);
              echo '<a href="account.php" class="nav-link dropdown-toggle  mx-3" role="button" id="pages" 
          aria-expanded="false"> <svg width="24" height="24" viewBox="0 0 24 24">
            <use xlink:href="#user"></use>
          </svg>&nbsp; Guest</a>';
          }
        } else {
          echo '<a href="account.php" class="nav-link dropdown-toggle  mx-3" role="button" id="pages" 
          aria-expanded="false"> <svg width="24" height="24" viewBox="0 0 24 24">
            <use xlink:href="#user"></use>
          </svg>&nbsp; Guest</a>';
        }
        ?>


      </li>
      <!-- <li>
        <a href="wishlist.php" class="rounded-circle bg-light p-2 mx-1">
          <svg width="24" height="24" viewBox="0 0 24 24">
            <use xlink:href="#heart"></use>
          </svg>
        </a>
      </li> -->
      <li class="d-lg-none position-relative">
        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
          aria-controls="offcanvasCart">
          <svg width="24" height="24" viewBox="0 0 24 24">
            <use xlink:href="#cart"></use>
          </svg>
          <!-- Badge for cart size -->
          <span class="badge bg-primary rounded-pill position-absolute top-0 start-100 translate-middle p-1">
            <?php
            echo floatval(isset($_SESSION['cartsize']) ? $_SESSION['cartsize'] : 0);
            ?>
          </span>
        </a>
      </li>

      <li class="d-lg-none">
        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
          <svg width="24" height="24" viewBox="0 0 24 24">
            <use xlink:href="#search"></use>
          </svg>
        </a>
      </li>
    </ul>

    <div class="cart text-end d-none d-lg-block dropdown">
      <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
        <span class="fs-6 text-muted dropdown-toggle">Your Cart <span
            class="badge bg-primary rounded-pill"><?php
                                                  echo floatval(isset($_SESSION['cartsize']) ? $_SESSION['cartsize'] : 0);
                                                  ?></span></span>
        <span class="cart-total fs-6 fw-bold">&#8377;
          <?php echo  isset($_SESSION["cartTotalAmount"]) ? $_SESSION["cartTotalAmount"] : 0 ?></span>
      </button>
    </div>
  </div>

</div>