<?php
include('include/header.php');
include('include/config.php');
if (strlen($_SESSION['id']) == 0) {
	header('location:index.php');
} else {
	date_default_timezone_set('Asia/Kolkata'); // change according timezone
	$currentTime = date('d-m-Y h:i:s A', time());
	include "../constant.php";
	$urlreadOrderDetails = $URL . "orderdetails/readOrderForDelivery.php";
	$urlreadDelivery = $URL . "deliveryBoy/readDeliveryBoyId.php";
	$datadelivery = array("id"=>$_SESSION['id']);
	// print_r($datadelivery);
	$postdatadelivery = json_encode($datadelivery);
	$clientdelivery = curl_init();
	curl_setopt( $clientdelivery, CURLOPT_URL,$urlreadDelivery);
	//curl_setopt( $client, CURLOPT_HTTPHEADER,  $request_headers);
	curl_setopt($clientdelivery, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($clientdelivery, CURLOPT_POST, 5);
	curl_setopt($clientdelivery, CURLOPT_POSTFIELDS, $postdatadelivery);
	$read_deliveryResponse = curl_exec($clientdelivery);
	//print_r($read_deliveryResponse);
	$resultDelivery = json_decode($read_deliveryResponse);
	// print_r($resultDelivery);
	$pincode=$resultDelivery->records[0]->workingPincode;
	
	$data = array("workingPincode"=>$pincode);
	//print_r($data);
	$postdata = json_encode($data);
	$client = curl_init();
	curl_setopt( $client, CURLOPT_URL,$urlreadOrderDetails);
	//curl_setopt( $client, CURLOPT_HTTPHEADER,  $request_headers);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($client, CURLOPT_POST, 5);
	curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
	$readOrderDetailsResponse = curl_exec($client);
	//  print_r($readOrderDetailsResponse);
	$resultOrderDetail = json_decode($readOrderDetailsResponse);
	//print_r($resultOrderDetail);
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin| Pending Orders</title>
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script language="javascript" type="text/javascript">
			var popUpWin = 0;

			function popUpWindow(URLStr, left, top, width, height) {
				if (popUpWin) {
					if (!popUpWin.closed) popUpWin.close();
				}
				popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 600 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
			}
		</script>
	</head>

	<body>
		

		<div class="wrapper">
			<div class="container">
				<div class="row">
					<?php include('include/sidebar.php'); ?>
					<div class="span9">
						<div class="content">

							<div class="module">
								<div class="module-head">
									<h3>Delivered Orders</h3>
								</div>
								<div class="module-body table">
									<?php if (isset($_GET['del'])) { ?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
										</div>
									<?php } ?>

									<br />


									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive">
										<thead>
											<tr>
											<tr>
												<tr>
												<th>#</th>
												<th>Order_id</th>
												<th>User Id</th>
												<th width="50">Seller Id</th>
												<th>Shipping Address</th>
												<th>Total Amount</th>
												<th>PamentId </th>
												<th>Payment Response</th>
												
												<th>Order Date</th>
												


											</tr>


											</tr>
										</thead>

										<tbody>
											<?php
											$st = 'Delivered';
											// $query = mysqli_query($con, "select users.name as username,users.email as useremail,users.contactno as usercontact,address.shippingAddress as shippingaddress,address.shippingCity as shippingcity,address.shippingState as shippingstate,address.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join address on users.id=address.user_id join products on products.id=orders.productId where orders.orderStatus='$st'");
											// $query = mysqli_query($con, "select users.name as username,users.email as useremail,users.contactno as usercontact,address.shippingAddress as shippingaddress,address.shippingCity as shippingcity,address.shippingState as shippingstate,address.shippingPincode as shippingpincode,address.mobile_no as mobile_no, address.billingAddress as billingaddress,address.billingCity as billingcity,address.billingState as billingstate,address.billingPincode as billingpincode,products.productName as productname,products.shippingCharge as shippingcharge, orders.GSTN as gsthn, orders.orderStatus as orderstatus,orders.size as size, orders.color, orders.quantity as quantity,orders.paymentMethod as paymentMethod, orders.order_id as order_id, orders.orderDate as orderdate,products.productPrice as productprice,products.skuid as skuid,orders.GSTN as gstn,orders.id as id from orders join users on  orders.userId=users.id join address on users.id=address.user_id join products on products.id=orders.productId where orders.orderStatus='$st'");
											$cnt = 1;
											for($i=0; $i<sizeof($resultOrderDetail->records); $i++){
												// print_r($resultOrderDetail);
											?>
											<tr>
													<td><?php echo htmlentities($cnt); ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->orderId; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->userId; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->sellerId; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->deliveryAddress; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->total; ?> </td>
													<td><?php echo $resultOrderDetail->records[$i]->paymentId; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->paymentResponse; ?></td>
													<td><?php echo $resultOrderDetail->records[$i]->createdOn; ?></td>
													</td>
												</tr>

											<?php $cnt = $cnt + 1;
											} ?>
										</tbody>
									</table>
								</div>
							</div>



						</div><!--/.content-->
					</div><!--/.span9-->
				</div>
			</div><!--/.container-->
		</div><!--/.wrapper-->

		<?php include('include/footer.php'); ?>

		<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
		<script src="scripts/datatables/jquery.dataTables.js"></script>
		<script>
			$(document).ready(function() {
				$('.datatable-1').dataTable();
				$('.dataTables_paginate').addClass("btn-group datatable-pagination");
				$('.dataTables_paginate > a').wrapInner('<span />');
				$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
				$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
			});
		</script>
	</body>
<?php } ?>