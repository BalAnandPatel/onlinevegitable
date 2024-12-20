<?php include 'includes/header.php' ?>
<!DOCTYPE html>

<html lang="en">

<head>

</head>

<?php
// if(isset($_SESSION['email'])){
//   header("Location: shop.php");
// }

if (isset($_GET['msg'])) {
  $_SESSION['alert_msg'] = $_GET['msg'];
  header("Location:" . $_SERVER['PHP_SELF']);
  exit();
} else if(isset($_POST['session'])){
  unset($_SESSION['alert_msg']);
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

  </header>

  <section class="py-2 mb-4" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <?php include 'includes/breadcrumb.php' ?>
    </div>

    <div class="container-sm">

      <div class="row justify-content-center">
        <?php if (isset($_SESSION['alert_msg'])) { ?>
          <div class="alert alert-danger" id="failure-alert">
            <strong>Alert!</strong> <?php echo $_SESSION['alert_msg'] ?>
          </div>
        <?php } ?>
        <div class="col-lg-4 p-5 bg-white border shadow-sm">

          <h5 class="text-uppercase mb-4">New User Registration</h5>
          <form id="form" class="form-group flex-wrap" method="POST" action="admin/action/userRegisterpost.php">
            <div class="col-12 pb-3">
              <label class="d-none">Name</label>
              <input type="text" name="name"  placeholder="Name" class="form-control" autocomplete="off">
            </div>
            <div class="col-12 pb-3">
              <label class="d-none">Email</label>
              <input type="text" name="email"  placeholder="Email" class="form-control" autocomplete="off">
            </div>
            <div class="col-12 pb-3">
              <label class="d-none">Mobile</label>
              <input type="number" name="mobile"  placeholder="Mobile" class="form-control" autocomplete="off">
            </div>
            <div class="col-12 pb-3">
              <label class="d-none">Password</label>
              <input type="password" name="password"  placeholder="Password" class="form-control" autocomplete="off">
            </div>
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary text-uppercase w-100">Create User</button>
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