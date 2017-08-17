<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'FD');
	$q1="insert into users values('$username','$password')";
	$q2="insert into userinfo values('$username','$password','$email','$phno')";
	$q3="create table table".$username."( id int NOT NULL AUTO_INCREMENT,bank varchar(30),acno decimal(30), term decimal(30),intrest decimal(30),pri_amt decimal(30),mat_value decimal(30),value_date varchar(30),mat_date varchar(30),PRIMARY KEY (id))";
	mysqli_query($con,$q1);
	mysqli_query($con,$q2);
	if(mysqli_query($con,$q3))
	{
		mysqli_close($con);
	    header('location:http://localhost/FD/views/login_view.php');
	}
	
?>