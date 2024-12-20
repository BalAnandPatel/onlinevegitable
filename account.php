<?php include 'includes/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

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
            </div>
            <!-- <div class="col-12 pb-3">
              <label>
                <input type="checkbox" required="">
                <span class="label-body">Remember me</span>
              </label>
            </div> -->
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary text-uppercase w-100">Log in</button>
              <p><a href="forgot-password.php">Lost your password?</a>
              <a href="newuser.php">New User Registration</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
 
  <?php include 'includes/footer.php' ?>
  <?php include 'includes/copyright.php' ?>
</body>

</html>