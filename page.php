
<?php 

	$con = mysqli_connect('localhost','SSM','09081172115');
	if($con){
		//echo"connection";
	}

	mysqli_select_db($con,'quizdb');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>| CAD INTERNATIONAL |</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
	 <link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/kenny.jpeg) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
</head>
<body>

	<div class="container">
		
<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Online Quiz System</h4></center><br>
							<form method="post" action="login.php">
								<div class="form-group">
									<label for="fullname"><h6>Enter Your Fullname:</h6></label>
									<input type="text" name="fullname" class="form-control" required>
								</div>
								<label style="font-family: Raleway;"><h6>Choose your Department:</h6></label>
								<select style="display: block; padding: 5px; margin-bottom: 20px; font-family: Noto Sans;" name="department" class="form-control" id="department">
				                    <option disabled selected> -- Department--</option>
				                    <option>Healing School</option>
				                    <option>ISM</option>
				                    <option>GYLF</option>
				                    <option>FALF</option>
				                    <option>SSM</option>
				                    <option>LMMS</option>
				                  </select>
								<div class="form-group">
									<label class="password"><h6>Enter Your Password:</h6></label>
									<input type="password" name="password" class="form-control" required>
								</div> 
								<br>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="register.php">Register</a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
  <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>