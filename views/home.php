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
		
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
