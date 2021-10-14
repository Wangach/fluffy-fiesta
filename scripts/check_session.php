<?php 

include 'login.php';

if (!isset($_SESSION['cust']) || empty($_SESSION['cust'])) {
	#redirect to login page
	header("Location: index.php");
}else{
	$disp_name = $_SESSION['cust'];
}

 ?>