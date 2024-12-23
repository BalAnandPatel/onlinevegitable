<?php
include('include/header.php');
include "../constant.php";
$urlreadOrderDetails = $URL . "orderdetails/readOrderDetailsfordelivery.php";
$urlreadDelivery = $URL . "deliveryBoy/readDeliveryBoyId.php";
$datadelivery = array("id"=>$_SESSION['id']);
//print_r($datadelivery);
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
//print_r($resultDelivery);
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
 //print_r($readOrderDetailsResponse);
$resultOrderDetail = json_decode($readOrderDetailsResponse);
//print_r($resultOrderDetail);
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin| SubCategory</title>
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script>
			function getSubcat(val) {
				//alert(val);
				var dataPost = {
					"cat_id": val};var dataString = JSON.stringify(dataPost);
				$.ajax({
					type: "POST",
					url: "../api/src/subcotegory/readsubcatogory.php",
					data: {
                          cat_id: dataString
					},
					success: function(data) 
					{
					
						 $('#subcategories').html('');
						$('#subcategories').append('<option>' +"Sub Categories" + '</option>');
						 $.each(data.records, function (i, value) {
						  
                $('#subcategories').append('<option id=' + (value.categoryid) + '>' + (value.subcategoryName) + '</option>');
            });
					},
					error: function(data)
					{
					       $('#subcategories').html('');
					     $('#subcategories').append('<option>' + "No records found !!" + '</option>');
					
		
					}
				});
			}

			function selectCountry(val) {
				$("#search-box").val(val);
				$("#suggesstion-box").hide();
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
									<h3>Pending Orders</h3>
								</div>
								<div class="module-body table">
									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Order Id</th>
												<th>Total</th>
												<th>STATUS</th>
												<th>OTP</th>
												<th>Created On</th>
												<th>Created By</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										<?php
                // print_r($result);
				$cnt=0;
                print_r($result['records']);
                for($i=0; $i<sizeof($resultOrderDetail->records);$i++)
                { //print_r($result->records[$i]);
                ?>	
												<tr class="table-primary">
												<td><?php echo htmlentities($cnt); ?></td>
												<td><?php echo $resultOrderDetail->records[$i]->orderId;?></td>
												<td><?php echo $resultOrderDetail->records[$i]->total;?></td>
												<td><?php echo $resultOrderDetail->records[$i]->status;?></td>
												<td><?php echo $resultOrderDetail->records[$i]->verificationCode;?></td>
												<td><?php echo $resultOrderDetail->records[$i]->createdOn;?></td>
												<td><?php echo $resultOrderDetail->records[$i]->createdBy;?></td>
												<td>
												<form class="form-horizontal row-fluid"  action="action/deliveryOrder_post.php" name="Category" method="post" enctype="multipart/form-data">

															<input type="hidden" name="orderId" value="<?php echo $resultOrderDetail->records[$i]->orderId ?>">
															<input type="hidden" name="status" value="Ready_To_Deliver">
															<button type="submit" class="btn btn-success">Accept</button>

															
															
														</form>
														<form class="form-horizontal row-fluid"  action="action/deliveryOrder_post.php" name="Category" method="post" enctype="multipart/form-data">
															<input type="hidden" name="orderId" value="<?php echo $resultOrderDetail->records[$i]->orderId ?>">
															<input type="hidden" name="status" value="Order_Delivery_Successfully">
															<button type="submit" class="btn btn-success">Verify Order</button>
														</form>
												</td>
								
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
