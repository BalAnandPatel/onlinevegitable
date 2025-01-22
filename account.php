<?php 
include 'includes/header.php';
if(isset($_SESSION['email']))
{
  header('Location:index.php');  
}

 $pincode=$_POST['pincode'];
if(isset($pincode)){
setcookie('pincode', $pincode, time() + (86400 * 30), "/"); // 86400 = 1 day

}

//echo $_COOKIE['pincode'];
 ?>

<?php 


if(isset($pincode) && strlen($pincode)!=6){
header('Location:index.php?validPincode=fail');
}

 $_SESSION['pincodes']=$pincode;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
  .adminAndSeller{
width:49%;
  }


  @media screen and (min-width:320px) and (max-width:768px){
  .adminAndSeller{
    width:100%;
    margin-bottom: 10px;
  }
  }
  @media screen and (min-width:900px) and (max-width:1200px){
  .adminAndSeller{
    width:100%;
    margin-bottom: 10px;
  }
  }
</style>
</head>

<?php
// if(isset($_SESSION['email'])){
//   header("Location: shop.php");
// }

// if (isset($_GET['registration'])) {
//   $_SESSION['registration'] = $_GET['registration'];
// } 
// else if(isset($_POST['registration'])){
//   unset($_SESSION['registration']);
// }
?>

<body>
  <?php include 'includes/svg.php' ?>


  <?php include 'includes/preloader.php' ?>

  <?php include 'includes/global-cart.php' ?>
  <header>
    <div class="container-fluid">
      <?php include 'includes/search.php' ?>
    </div>

  </header>
  <section class="py-2 mb-4" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <?php include 'includes/breadcrumb.php' ?>
    </div>

    <div class="container-sm">
   
      <div class="row justify-content-center">
        <?php if (isset($_SESSION['registration'])) { ?>
          <div class="alert alert-sucsess" id="failure-alert">
            <strong>Alert!</strong> <?php echo $_SESSION['registration'] ?>
          </div>
        <?php } ?>
        <div class="col-lg-4 p-5 bg-white border shadow-sm">

          <h5 class="text-uppercase mb-4">Login</h5>
          <form id="form" class="form-group flex-wrap" method="POST" action="admin/action/login_post.php">
            <div class="col-12 pb-3">
              <label class="d-none">Username or email address *</label>
              <input type="text" name="email"  placeholder="Username / email" class="form-control" autocomplete="off">
            </div>
            <div class="col-12 pb-3">
              <label class="d-none">Password *</label>
              <input type="password" name="password"  placeholder="Password" class="form-control" autocomplete="off">
             <input type="hidden" name="pincode" value="<?php echo $_SESSION['pincodes']?>">
            </div>
            <!-- <div class="col-12 pb-3">
              <label>
                <input type="checkbox" required="">
                <span class="label-body">Remember me</span>
              </label>
            </div> -->
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary text-uppercase w-100">Log in</button>
              <p><a href="forgot-password.php">Lost your password?</a><br/>
              <a href="newuser.php">New User Registration</a></p>
            </div>
          </form>
          <div class="col-12">
            <a href="admin/index.php"><button class="btn btn-primary text-white adminAndSeller">Admin Login</button></a>
            <a href="seller/index.php"><button class="btn btn-primary text-white adminAndSeller">Seller Login</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <?php include 'includes/footer.php' ?>
  <?php include 'includes/copyright.php' ?>
</body>

</html>