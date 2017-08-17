<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<?php include('nav.php'); ?>

	<div class="container">
		<form method="post" action="../controllers/login_controller" class="form-horizontal">
		<table class="table" >
			<tr>
				<td>username:</td>
				<td><input class="field small-field" type="text" placeholder="username" name="username"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input class="field small-field" type="password" name="password"></td>
			</tr>
			</table>
		<br/>
		<input class="btn btn-primary" type="submit" value="login">
		<input class="btn btn-primary" type="reset" value="reset">
	</form>
		<h2>New user??  <a href="http://localhost/FD/views/registration_view.php">register</a></h2>
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
