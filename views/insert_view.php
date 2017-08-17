<?php
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/FD/views/login_view.php');
?>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<?php include('post_nav.php');?>
	<div class="container">
		<form method="post" action="../controllers/insert_controller.php" class="form-inline">
			<table class="table">
				<tr>
					<td>
						Bank:
					</td>
					<td>
						<input class="field small-field"type="text" name="bank">
					</td>
				</tr>
				<tr>
					<td>
						acno:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="acno">
					</td>
				</tr>
				<tr>
					<td>
						term:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="term">
					</td>
				</tr>
				<tr>
					<td>
						intrest:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="intrest">
					</td>
				</tr>
				<tr>
					<td>
						pri_amt:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="pri_amt">
					</td>
				</tr>
				<tr>
					<td>
						mat_value:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="mat_value">
					</td>
				</tr>
				<tr>
					<td>
						value_date:
					</td>
					<td>
						<input class="field small-field"type="text" name="value_date">
						dd/mm/yy
					</td>
				</tr>
				<tr>
					<td>
						mat_date:
					</td>
					<td>
						<input class="field small-field"type="text" name="mat_date">
						dd/mm/yy
					</td>
				</tr>
			</table>
			<input type="submit" value="save" class="btn btn-primary">
		</form>
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
