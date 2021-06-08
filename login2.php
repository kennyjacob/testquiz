<?php
session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdb');
	
		$fullname = $_POST['fullname'];
		$password =  md5($_POST['password']);
		

	//$username = $_POST['user'];
	//$password = $_POST['pass'];

		$q = "SELECT * FROM quizregistration WHERE fullname='$fullname' and password='$password'";

		$result = mysqli_query($con,$q);
$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['fullname'] = $fullname;

	$userquery = "INSERT INTO `user` (`fullname`, `department`) VALUES ($fullname, $department)";

	$userresult = mysqli_query($con,$userquery) ;

	header('location:home.php');	
}else{
	header('location:index.php');
}		

?>