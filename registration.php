<?php

session_start();
//header('location:index.php');

$con = mysqli_connect('localhost','root');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdb');


	//$username = $_POST['user'];
	//$password = $_POST['pass'];
	
if(isset($_POST['submit'])){

		$title 		 = $_POST['title'];

		$fullname = $_POST['fullname'];
		$fullname = stripslashes($fullname);
		$fullname = addslashes($fullname);

		$department = $_POST['department'];

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password   = md5($_POST['password']);
    	$cpassword  = md5($_POST['cpassword']);
	
    	if ($password == $cpassword) {
		    $check= "SELECT * FROM quizregistration WHERE email='$email'";
			$resultcheck= mysqli_query($con,$check); 

	//$check = "select * from quizregistration where user='$username' && pass='$password' ";
	//$resultcheck = mysqli_query($con,$check);	

		if (mysqli_num_rows($resultcheck)>0) {
		     echo  "<div class='alert alert-danger text-center'>Email Address already Exist.</div>";
		    } else{
		      $sql = "INSERT INTO `quizregistration` (`id`, `title`, `fullname`, `department`, `email`, `password`, `signup_date`) VALUES (NULL, '$title', '$fullname', '$department', '$email', '$password', current_timestamp())";
		       
		    $result = mysqli_query($con,$sql);
			 if ($result) {
					        echo "<div class='alert alert-success text-center'>Registration Successful.</div>";
					    } else{
					        echo "<div class='alert alert-danger text-center'>Something is not right!!!.</div>";
					    }
					}
			    }else{
			        		echo "<div class='alert alert-danger text-center'>Password not Matched.</div>"; 
			  			}
			 }



?>

