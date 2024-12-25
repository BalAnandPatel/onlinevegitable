<?php include 'includes/header.php'; ?>
<style>
        .containers, .main{
            background-color: rgba(255, 157, 0, 0.7);
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 999;
            border-radius: 20px;
        }
        .main{
            width: 100%;
            height: 100vh;
            background-color: rgba(231, 227, 222, 0.6);
            border-radius: 0px;
        }
        #pform{
            color: white;
            height: 400px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }
        input[name=pincode]{
            margin: 20px 0px;
            background: white;
            color: orange;
            padding: 10px;
            font-weight: 800;
        }
        button{
            background-color: green;
            color: white;
            padding: 10px;
            font-weight: 800;
        }
        #show{
          display: block;
        }
    </style>
<body>
<?php include "constant.php";
include_once 'includes/curl_header_home.php';
$url = $URL . "promotion/readAllPromotion.php";
$data = array();
$postdata = json_encode($data);

$readCurl = new CurlHome();
$response = $readCurl->createCurl($url, $postdata, 0, 2, 1);
$resultPromo = json_decode($response); ?>

  <?php include 'includes/svg.php' ?>

  <?php include 'includes/preloader.php' ?>

  <?php include 'includes/global-cart.php' ?>
  <header>
    <div class="container-fluid">
      <?php include 'includes/search.php' ?>
    </div>
    <?php include 'includes/menu.php' ?>
  </header>
<!-- ***************************** -->
<div class="main" id="show">
    <div class="containers">
        <form action="" id="pform">
            <p>Enter Your Pincode to get best experience</p>
            <label for="pincode">Enter Pincode</label>
            <input type="text" name="pincode" placeholder="Enter Pincode" required id="pin">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- ***************************** -->
  <section class="py-3"
    style="background-image: url('images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="banner-blocks">

            <div class="banner-ad large bg-info block-1">

              <div class="swiper main-swiper">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="row banner-content p-5">
                      <div class="content-wrapper col-md-7">
                        <div class="categories my-3"><?php echo $resultPromo->records[0]->tHeading ?></div>
                        <h3 class="display-4"><?php echo ucwords(strtolower($resultPromo->records[0]->heading)) ?></h3>
                        <p><?php echo ucwords(strtolower($resultPromo->records[0]->para)) ?></p>
                        <a href="<?php echo strtolower($resultPromo->records[0]->link) ?>"
                          class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop Now</a>
                      </div>
                      <div class="img-wrapper col-md-5">
                        <img src="images/product-thumb-1.png" alt="Product Thumbnail" class="img-fluid">
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="row banner-content p-5">
                      <div class="content-wrapper col-md-7">
                        <div class="categories mb-3 pb-3">100% natural</div>
                        <h3 class="banner-title">Fresh Smoothie & Summer Juice</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                        <a href="shop.php" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
                          Collection</a>
                      </div>
                      <div class="img-wrapper col-md-5">
                        <img src="images/product-thumb-1.png" alt="Product Thumbnail" class="img-fluid">
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="row banner-content p-5">
                      <div class="content-wrapper col-md-7">
                        <div class="categories mb-3 pb-3">100% natural</div>
                        <h3 class="banner-title">Heinz Tomato Ketchup</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                        <a href="shop.php" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
                          Collection</a>
                      </div>
                      <div class="img-wrapper col-md-5">
                        <img src="images/product-thumb-2.png" alt="Product Thumbnail" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-pagination"></div>

              </div>
            </div>

            <div class="banner-ad bg-success-subtle block-2"
              style="background:url('images/ad-image-1.png') no-repeat;background-position: right bottom">
              <div class="row banner-content p-5">

                <div class="content-wrapper col-md-7">
                  <div class="categories sale mb-3 pb-3"><?php echo $resultPromo->records[1]->tHeading ?></div>
                  <h3 class="banner-title"><?php echo ucwords(strtolower($resultPromo->records[1]->heading));?></h3>
                  <a href="<?php echo strtolower($resultPromo->records[1]->link) ?>" class="d-flex align-items-center nav-link">Shop Collection <svg width="24"
                      height="24">
                      <use xlink:href="#arrow-right"></use>
                    </svg></a>
                </div>

              </div>
            </div>

            <div class="banner-ad bg-danger block-3"
              style="background:url('images/ad-image-2.png') no-repeat;background-position: right bottom">
              <div class="row banner-content p-5">

                <div class="content-wrapper col-md-7">
                  <div class="categories sale mb-3 pb-3"><?php echo $resultPromo->records[2]->tHeading ?></div>
                  <h3 class="item-title"><?php echo ucwords(strtolower($resultPromo->records[2]->heading));?></h3>
                  <a href="<?php echo strtolower($resultPromo->records[2]->link) ?>" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
                      <use xlink:href="#arrow-right"></use>
                    </svg></a>
                </div>

              </div>
            </div>

          </div>
          <!-- / Banner Blocks -->

        </div>
      </div>
    </div>
  </section>

  <!-- <?php include 'includes/products/category.php'; ?> -->
  <!-- <?php include 'includes/products/newly-arrived.php'; ?> -->
  <?php include 'includes/products/trending.php'; ?>
  <?php include 'includes/products/ads.php'; ?>
  <?php include 'includes/products/best-selling.php'; ?>
  <!-- <?php include 'includes/newsletter.php'; ?> -->
  <!-- <?php include 'includes/products/popular.php'; ?> -->
  <!-- <?php include 'includes/products/latest.php'; ?> -->
  <!-- <?php include 'includes/blog.php'; ?> -->
  <!-- <?php include 'includes/app.php'; ?> -->
  <!-- <?php include 'includes/tags.php'; ?> -->
  <?php include 'includes/service.php'; ?>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/copyright.php'; ?>
  <script>
    let show = document.getElementById('show');
    let pincode = true;
    
    window.addEventListener('load', ()=>{
      if(!pincode){
        show.style.display= "block";
      }else{
       show.style.display="none";
      }
    })
  </script>
</body>

</html>