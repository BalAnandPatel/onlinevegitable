<?php
include('include/header.php');
// $jwt="123";
// $request_headers = [
//   'Authorization:' . $jwt
// ];
include "../constant.php";
$url = $URL . "seller/read_sellerById.php";
//$url="http://localhost/onlinesabjimandiapi/api/src/category/readCategory.php";
$data = array("id"=>$_SESSION["id"]);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init();
curl_setopt($client, CURLOPT_URL, $url);
//curl_setopt( $client, CURLOPT_HTTPHEADER,  $request_headers);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POST, 5);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seller| Add Address</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
								<h3>Update Address</h3>
							</div>
							<div class="module-body">
								<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data" action="action/seller_address_post.php">

									<?php
									// print_r($result);
									$cnt = 0;
									// print_r($result['records']);
									for ($i = 0; $i < sizeof($result->records); $i++) { //print_r($result->records[$i]);
									?>

										<div class="control-group">
											<label class="control-label" for="basicinput">seller Id</label>
											<div class="controls">
												<input type="text" name="id" placeholder="Address" class="span8 tip" value="<?php echo $result->records[$i]->id; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">seller Name</label>
											<div class="controls">
												<input type="text" placeholder="Address" class="span8 tip" required value="<?php echo $result->records[$i]->sellerName; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Adress</label>
											<div class="controls">
												<input type="text" name="address" placeholder="Address" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Pin</label>
											<div class="controls">
												<input type="text" name="pincode" placeholder="Pin" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">City</label>
											<div class="controls">
												<input type="text" name="city" placeholder="City" class="span8 tip" required>
											</div>
										</div>
									<?php $cnt = $cnt + 1;
									} ?>
									<div class="control-group">
										<div class="controls">
											<button type="submit" name="submit" class="btn">Update</button>
										</div>
									</div>
								</form>
							</div>

						</div>

						<div class="module">
							<div class="module-head">
								<h3>Manage Bank Details</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>seller Id</th>
											<th>Address</th>
											<th>City</th>
											<th>Pincode</th>
											<th>Updated On</th>
											<th>Updated By</th>
										</tr>
									</thead>
									<tbody>

										<?php
										// print_r($result);
										$cnt = 0;
										// print_r($result['records']);
										for ($i = 0; $i < sizeof($result->records); $i++) { //print_r($result->records[$i]);
										?>
											<tr>
												<td><?php echo htmlentities($cnt); ?></td>
												<td><?php echo $result->records[$i]->sellerName; ?></td>
												<td><?php echo $result->records[$i]->sellerId; ?></td>
												
												<td><?php echo $result->records[$i]->address; ?></td>
												<td><?php echo $result->records[$i]->city; ?></td>
												<td><?php echo $result->records[$i]->pincode; ?></td>
												<td><?php echo $result->records[$i]->updatedOn; ?></td>
												<td><?php echo $result->records[$i]->updatedBy; ?></td>
											</tr>
										<?php $cnt = $cnt + 1;
										} ?>

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