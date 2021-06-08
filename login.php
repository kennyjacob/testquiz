<?php
session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdb');
	
		$fullname = $_POST['fullname'];
		$department = $_POST['department'];
		$password =  md5($_POST['password']);

		

	//$username = $_POST['user'];
	//$password = $_POST['pass'];

		$q = "SELECT * FROM quizregistration WHERE fullname='$fullname' and password='$password'";

		$result = mysqli_query($con,$q);
		$row = mysqli_num_rows($result);


if($row == 1){
	$_SESSION['fullname'] = $fullname;
	$_SESSION['department'] = $department;

	$userquery = "insert into user(fullname,department) values ('$fullname,$department')";

	$userresult = mysqli_query($con,$userquery) ;

	header('location:home.php');	
}else{
	echo "<div class='alert alert-danger text-center'>Sorry... Incorrect Fullname or Password</div>";
	
}		

?>
