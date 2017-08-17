<?php
	session_start();
	session_destroy();
	header('location:http://localhost/FD/views/login_view.php');
?>