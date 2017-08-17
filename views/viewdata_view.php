<?php
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/FD/views/login_view.php');
?>
<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'FD');
	$q="select * from table".$_SESSION['username'];
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
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
		<table   class="table table-striped table-hover ">
			<tr>
			<th>FD-ID</th>
			<th>Bank</th>
			<th>Acno</th>
			<th>Term</th>
			<th>Intrest</th>
			<th>Pri amt</th>
			<th>Mat value</th>
			<th>value date</th>
			<th>Mat date</th>
			</tr>
			<?php
				for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
			?>
				<tr>
				    <td><?php echo $row['id']; ?></td>
					<td><?php echo $row['bank']; ?></td>
					<td><?php echo $row['acno']; ?></td>
					<td><?php echo $row['term']; ?></td>
					<td><?php echo $row['intrest']; ?></td>
					<td><?php echo $row['pri_amt']; ?></td>
					<td><?php echo $row['mat_value']; ?></td>
					<td><?php echo $row['value_date']; ?></td>
					<td><?php echo $row['mat_date']; ?></td>
				</tr>
			<?php
				}
			?>		
	    </table>
	</div>

	<script type="text/javascript" src="../js/jQuery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
