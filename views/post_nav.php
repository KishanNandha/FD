
<html>
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- logo -->
      <div class="navbar-header">
        <a href="http://localhost/FD/views/home.php" class="navbar-brand">Fixed Deposit Maintenance System</a>
      </div>
      <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="http://localhost/FD/views/home.php">Home</a></li>
          <li><a href="http://localhost/FD/views/insert_view.php"><span>New Entry</span></a></li>
          <li><a href="http://localhost/FD/views/viewdata_view.php"><span>View data</span></a></li>
          <li><a href="http://localhost/FD/views/delete_view.php"><span>Delete Entry</span></a></li> 
          <li><a href="http://localhost/FD/views/update_view.php"><span>Update Entry</span></a></li>   
          <li><a href="#">Contact</a></li>
        </ul>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['username']; ?><span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li class="divider"></li>
		            <li><a href="http://localhost/FD/controllers/logout_controller.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
      </div>
      </div>
    </div>
  </nav>
</body>
</html>