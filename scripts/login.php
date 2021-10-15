<?php
include 'db.php';
session_start();
$output = '';
if(isset($_POST['log'])){
    //get the fata from the form fields
    $uname = mysqli_real_escape_string($connect, $_POST['jina']);
    $pass = mysqli_real_escape_string($connect, $_POST['siri']);

    //check for empty fields
    if(empty($uname) || empty($pass)){
    	$output = "<script>";
    	$output.= "alert('Huwezi Peana Form Bila Shit. Jaza Yote! Ala!')";
    	$output .= "</script>";

    	echo $output;
    }else{
    	$sql = "SELECT * FROM f2users WHERE username = '$uname' AND password = '$pass'";
    	$check = mysqli_query($connect, $sql);

    	if (mysqli_num_rows($check) > 0) {
    		$_SESSION['cust'] = $uname;
			$upsess = "UPDATE f2users SET login = '1' WHERE username = '$uname'";
			$hak = mysqli_query($connect, $upsess);
    		//redirect user
    		header("Location: logged.php");
    	}else{
    		$output = "<script>";
	    	$output.= "alert('Umesahau na username ama password yako,,,Ama pia ikuwe Johnito Hajaku register. Ebu Muulize ;-)')";
	    	$output .= "</script>";

	    	echo $output;
    	}
    }
}
?>