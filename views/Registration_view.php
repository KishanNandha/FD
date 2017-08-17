<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<?php include('nav.php'); ?>
	<div class="container">
		<form method="post" action="../controllers/registration_controller.php" class="form-inline">
			<table class="table-inline">
				<tr>
					<td>username:</td>
					<td><input class="field small-field"  type="text" placeholder="username" name="username"></td>
				</tr>
				<tr>
					<td>password:</td>
					<td><input class="field small-field"  type="password" name="password"></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input class="field small-field"  type="text" name="email"></td>
				</tr>
				<tr>
					<td>phone no:</td>
					<td><input class="field small-field"  type="text" name="phno"></td>
				</tr>
			</table>
			<br/>
			<input class="btn btn-primary"  type="submit" value="sign up">
			<input class="btn btn-primary"  type="reset" value="reset">
	</form>

		<br/>
		<h2 align="center" >Already user??  <a href="http://localhost/FD/views/login_view.php">login</a></h2>
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
