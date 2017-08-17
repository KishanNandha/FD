<?php
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/FD/views/login_view.php');
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'FD');
	$id=$_POST['id'];
	$tablename=$_SESSION['username'];
	$q="delete from table".$tablename." where id=$id";
	mysqli_query($con,$q);
	mysqli_close($con);
	header('location:http://localhost/FD/views/delete_view.php');
?>

