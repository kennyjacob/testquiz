<?php
   session_start();
   
   if(!isset( $_SESSION['fullname'],$_SESSION['department'])){
   	header('location:login.php');
   }
   $con = mysqli_connect('localhost','SSM','09081172115');
  
   	mysqli_select_db($con,'quizdb');
   
   ?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Online Test System</title>
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
         .animateuse{
         animation: leelaanimate 0.5s infinite;
         }
         @keyframes leelaanimate{
         0% { color: red },
         10% { color: yellow },
         20%{ color: blue }
         40% {color: green },
         50% { color: pink }
         60% { color: orange },
         80% {  color: black },
         100% {  color: brown }
         }
      </style>
   </head>
   <body>

      <div>
       <!--   <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Complete Quiz Website using PHP and MYSQL using Session</h1><br>
      <div class="container "><br> -->
         <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  CAD INTERNATIONAL INC. </h1><br>
      <div class="container "><br>
         <div class="container">
         
            <!-- <h1 class="text-center text-success text-uppercase animateuse" >  ThapaTechnical  Webdeveloper Quiz </h1>
            <br> -->
            <div class=" col-lg-12 text-center">
               <h3 class="text-uppercase text-dark">Welcome to RIGHTEOUSNESS PART 1 Quiz </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['fullname']," ", $_SESSION['department']; ?>, you have to select only one out of 4. Best of Luck <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               
               <br>
            <form action="checked.php" method="post">
               <?php
                  for ($i=1; $i < 6 ; $i++) {
                   $q = "select * from questions where qid = $i";
                   $query = mysqli_query($con, $q);

                   while ($rows = mysqli_fetch_array($query)) {
                      
                ?>
                  <div class="card">
                     <br>
                     <h4 class="card-header">  <?php echo $rows['question']; ?> </h4>
                             

                     <?php
                     $q = "select * from answers where ans_id = $i";
                     $query = mysqli_query($con, $q);

                     while ($rows = mysqli_fetch_array($query)) {

                     ?>

                     <div class="card-body">
                           <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']?>">
                           <?php echo $rows['answer'] ;?>
                     </div>

                     <?php
                        }
                        }
                     }
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
            <br>
            <a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br>
         </div>
         <br>
         <footer>
            <h5 class="text-center"> &copy2018 ThapaTechnical </h5> 
         </footer>
      </div>
<!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

   </body>
</html>
