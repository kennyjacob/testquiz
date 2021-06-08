<!DOCTYPE html>
<html>
<head>
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
		
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center> <h5 style="font-family: Noto Sans;">Register to take </h5><h4 style="font-family: Noto Sans;">Online Quiz System</h4></center><br>
							<form method="post" action="registration.php">
								<select style="display: block; padding: 5px; margin-bottom: 20px;" name="title" class="form-control" id="title">
				                    <option disabled selected> -- Title--</option>
				                    <option>Pastor</option>
				                    <option>Mr</option>
				                    <option>Mrs</option>
				                    <option>Miss</option>
				                    <option>Brother</option>
				                    <option>Sister</option>
				                  </select>
                                <div class="form-group">
									<label >Enter Your Fullname:</label><br>
									<input type="text" name="fullname" class="form-control" required />
								</div>

								<label>Choose your Department:</label>
								<select style="display: block; padding: 5px; margin-bottom: 20px;" name="department" class="form-control" id="department">
				                    <option disabled selected> -- Department--</option>
				                    <option>Healing School</option>
				                    <option>ISM</option>
				                    <option>GYLF</option>
				                    <option>FALF</option>
				                    <option>SSM</option>
				                    <option>LMMS</option>
				                  </select>

								<div class="form-group">
									<label>Enter Your Email</label>
									<input type="email" name="email" class="form-control" required />
								</div>

								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" required />
                                </div>

								<div class="form-group">
									<label>Confirm Password:</label>
									<input type="password" name="cpassword" class="form-control" required />
                                </div>

								<br>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="page.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

  <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>
		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>