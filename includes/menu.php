<?php
include "constant.php";
include_once 'curl_header_home.php';
$url_cat = $URL . "category/readSubCategory.php";
$readCurl = new CurlHome();
$response_cat = $readCurl->createCurl($url_cat, null, 0, 2, 1);
$resultcat = json_decode($response_cat);
//print_r($response_cat);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
  function redirectToPage() {
    var selectedOption = document.getElementById("pageSelect").value;
    if (selectedOption) {
      window.location.href = selectedOption;
    }
  }
</script>


<style>
.dropdown:hover > .dropdown-menu,
.dropend:hover > .dropdown-menu {
  display: block;
  margin-top: 0.125em;
  margin-left: 0.125em;
}

.dropend:hover>.dropdown-menu
{
  position:absolute;
  top:0;
  left: 100%;
  margin-left: .125em;
}

.dropdown .dropdown-menu {
  display: none;
}


</style>

</head>

<div class="container-fluid">
  <div class="row py-3">
    <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
      <nav class="main-menu d-flex navbar navbar-expand-lg">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">

            <select id="pageSelect" name="pages" class="select" style="background-color: #ffb366;"
              onchange="redirectToPage()">
              <option>Shop by Category</option>
              <option value="shop.php">All Items</option>
              <?php
             
               if(isset($resultcat))
              foreach ($resultcat->records[0] as $key => $value) {
                ?>
                <option value="shop.php?crid=<?php echo $value->id ?>"><?php echo $key ?></option>
              <?php } ?>
            </select>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <ul class="navbar-nav">
            <li class="nav-item dropend">
            <a class="nav-link dropdown" href="<?php echo 'shop.php' ?>" role="button"  aria-expanded="false">
          Dashboard
            </a>
           
          </li>
              <?php
              $count = 0;
             // print_r($resultcat);
              if(!empty($resultcat))
              foreach ($resultcat->records[0] as $key => $value) {
                $count++;
                if ($count < 5) {
                  ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <?php echo $key ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <?php foreach ($value->subcategories as $subCat) { ?>
                        <a class="dropdown-item"
                          href="<?php echo "shop.php?spid=" . $subCat->subId ?>"><?php echo $subCat->subName ?></a>
                      <?php } ?>
                    </div>
                  </li>
                <?php }
              } ?>


              <!-- <li class="nav-item dropdowns othersLI" id=""  style=" list-style-type: none;margin-top:6px">
                  Others -->
                  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Others
    </a>
    <ul class="dropdown-menu">

    <?php
              $count = 0;
                  if(isset($resultcat))
              foreach ($resultcat->records[0] as $key => $value) {
                $count++;
                if ($count >= 5) {
                  ?>
      <li class="nav-item dropend">
        
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?php echo $key ?>
        </a>
        <ul class="dropdown-menu">
        <?php foreach ($value->subcategories as $subCat) { ?>

          <li class="nav-item dropend">
            <a class="nav-link dropdown" href="<?php echo "shop.php?spid=" . $subCat->subId ?>" role="button"  aria-expanded="false">
            <?php echo $subCat->subName ?>
            </a>
           
          </li>
                       
                      <?php } ?>
          
        </ul>
      </li>
      <?php } }?>
    </ul>
    <li class="nav-item dropend">
            <a class="nav-link dropdown" href="<?php echo 'shop.php' ?>" role="button"  aria-expanded="false">
          Contact Us
            </a>
           
          </li>
          <li class="nav-item dropend">
            <a class="nav-link dropdown" href="<?php echo 'shop.php' ?>" role="button"  aria-expanded="false">
          About Us
            </a>
           
          </li>
</li>
              <!-- <span class="summary">Item 2: Summary</span> -->


              </span>
              </li>
            </ul>
          </div>

        </div>

      </nav>
      <div class="d-none d-lg-block">
        <a href="https://google.com" target="_blank" class="nav-link btn-coupon-code">
          <img src="images/gift.svg" alt="gift icon">
          <strong class="ms-2 text-dark">Gift</strong>
        </a>
      </div>
    </div>
  </div>
</div>