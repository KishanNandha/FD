<?php
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/FD/views/login_view.php');
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'FD');
	$id=$_POST['id'];
	$tablename=$_SESSION['username'];
	$q="select * from table$tablename where id=$id";
	$result=mysqli_query($con,$q);
	$row=mysqli_fetch_array($result);
	mysqli_close($con);
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
		<form method="post" action="../controllers/update_controller.php" class="form-inline">
			<table class="table">
				<tr>
					<td>
						Bank:
					</td>
					<td>
						<input class="field small-field"type="text" name="bank" value="<?php echo $row['bank']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						acno:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="acno" value="<?php echo $row['acno']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						term:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="term" value="<?php echo $row['term']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						intrest:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="intrest" value="<?php echo $row['intrest']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						pri_amt:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="pri_amt" value="<?php echo $row['pri_amt']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						mat_value:
					</td>
					<td>
						<input class="field small-field"type="number" step="any"   min="0" name="mat_value" value="<?php echo $row['mat_value']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						value_date:
					</td>
					<td>
						<input class="field small-field"type="text" name="value_date" value="<?php echo $row['value_date']; ?>">
						dd/mm/yy
					</td>
				</tr>
				<tr>
					<td>
						mat_date:
					</td>
					<td>
						<input class="field small-field"type="text" name="mat_date" value="<?php echo $row['mat_date']; ?>">
						dd/mm/yy
					</td>
				</tr>
			</table>
			<input type="submit" value="Update" class="btn btn-primary">
		</form>
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>


