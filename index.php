<?php
include 'scripts/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | Customer Login </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/regular.css">
	<link rel="stylesheet" href="css/solid.css">
	<link rel="stylesheet" href="css/index.css">
	
</head>
<body>
	<!--/Custom Loaders/
	<div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>-->

	<header id="myHeader">
		<div class="loginformspace">
			<div class="form-top">
				<span class="form-top-primary">Broad Horizons Ent <i class="fa fa-user"></i></span>
				<span class="form-top-main">Customer Login</span>
			</div><!--.form-top/-->
			<form action="index.php" id="customer-login" method="POST">
				<div class="form-group">
					<label for="uname">UserName:</label>
					<input type="text" class="form-control" placeholder="Your UserName..." name="jina">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
					<input type="password" class="form-control" placeholder="Your Password..." name="siri">
				</div>

				<button type="submit" class="btn btn-primary" name="log"><i class="fa fa-sign-in-alt"></i>Login</button>
			</form>
		</div><!--/.loginformspace/-->
	</header>		
	
	<!--/Javascript files/-->
  <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>
