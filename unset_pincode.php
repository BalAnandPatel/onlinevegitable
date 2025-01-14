<?php 
setcookie("pincode", "", time() - 3600, "/");
header('Location:index.php');

?>