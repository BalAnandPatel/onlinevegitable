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
// //print_r($data);
$postdata = json_encode($data);
$client = curl_init();
curl_setopt( $client, CURLOPT_URL,$url);
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
	<title>Admin| Manage seller</title>
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
								<h3>Update Personal Info</h3>
							</div>
							<div class="module-body">
								<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data" action="action/updateseller_personal_post.php">


								
								<?php
                // print_r($result);
				$cnt=0;
                // print_r($result['records']);
                for($i=0; $i<sizeof($result->records);$i++)
                { //print_r($result->records[$i]);
                ?>
									<div class="control-group">
										<label class="control-label" for="basicinput">sellerId</label>
										<div class="controls">
											<input type="text" name="sellerId" placeholder="Name" class="span8 tip" value="<?php echo $result->records[$i]->sellerId;?>"readonly>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput">seller Name</label>
										<div class="controls">
											<input type="text" name="sellerName" placeholder="Name" class="span8 tip" value="<?php echo $result->records[$i]->sellerName;?>"readonly>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput">Shop Title</label>
										<div class="controls">
											<input type="text" name="counterName" placeholder="Counter Name" class="span8 tip" value="<?php echo $result->records[$i]->counterName;?>"required>
										</div>
									</div>


									<div class="control-group">
										<label class="control-label" for="basicinput">phone No</label>
										<div class="controls">
											<input type="text" name="phoneNo"  value="<?php echo $result->records[$i]->phoneNo;?>" name="phoneNo" placeholder="Phone No" class="span8 tip" required>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Email Id</label>
										<div class="controls">
											<input type="text" name="email" placeholder="Enter Email Id" class="span8 tip" value="<?php echo $result->records[$i]->email;?>"required>
										</div>
									</div>
									
									
									


									<div class="control-group">
										<label class="control-label" for="basicinput">Gst</label>
										<div class="controls">
											<input type="text" name="gst" placeholder="Enter GST NO" class="span8 tip" value="<?php echo $result->records[$i]->gst;?>" required>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Aadhar</label>
										<div class="controls">
											<input type="text" name="aadhar" placeholder="Adhar no" class="span8 tip" value="<?php echo $result->records[$i]->aadhar;?>"required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput">Pan</label>
										<div class="controls">
											<input type="text" name="pan" placeholder="pan Card" class="span8 tip" value="<?php echo $result->records[$i]->pan;?>"readonly>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Owner Image</label>
										<div class="controls">
											<input type="file" name="upload" placeholder="counter Image" class="span8 tip" required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput">Shop Image</label>
										<div class="controls">
											<input type="file" name="shopupload" placeholder="shop Image" class="span8 tip" required>
										</div>
									</div>
								 <div class="control-group">
										<div class="controls">
											<button type="submit" name="submit" class="btn">Update</button>
										</div>
									</div>
					<?php }?>				
                                </form>
</div>

<div class="module">
							<div class="module-head">
								<h3>Personal Detail</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Counter Name</th>
											<th>Phone No</th>
											<th>Email</th>
											<th>Pan</th>
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
												<td><?php echo $result->records[$i]->counterName; ?></td>
												
												<td><?php echo $result->records[$i]->phoneNo; ?></td>
												<td><?php echo $result->records[$i]->email; ?></td>
												<td><?php echo $result->records[$i]->pan; ?></td>
												<td><?php echo $result->records[$i]->updatedOn; ?></td>
												<td><?php echo $result->records[$i]->updatedBy; ?></td>
											</tr>
										<?php $cnt = $cnt + 1;
										} ?>

								</table>
							</div>
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