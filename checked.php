<?php
session_start();
if (!isset($_SESSION['fullname'],$_SESSION['department'])) {
  header('location: login.php');
}

   $con = mysqli_connect('localhost','SSM','09081172115');
   	// if($con){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($con,'quizdb');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    
    <!-- Google Fonts Roboto -->
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success animateuse" > RIGHTEOUSNESS PART 1 </h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
             
           
                if(isset($_POST['submit'])){

                if(!empty($_POST['quizcheck'])) {
                // Counting number of checked checkboxes.
                $count = count($_POST['quizcheck']);
                // print_r($_POST);
            ?>

        	<td>
            <?php
            echo "Out of 5, You have attempt ".$count." options."; ?>
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
              $result =  0;
              $i = 1;

            $selected = $_POST['quizcheck'];
           // print_r($selected);
            
            $q= " select * from questions ";
            $query = mysqli_query($con,$q);
            
            while($rows = mysqli_fetch_array($query)) {
             //print_r($rows['ans_id']);

            	$checked = $rows['ans_id'] == $selected[$i];
            	
            			if($checked){

            				$result++;	
            			}			

            		$i++;		
            	}
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $result.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php  

            $name = $_SESSION['fullname'];
            $department = $_SESSION['department'];
            $finalresult ="insert into user(fullname, department, totalques, answerscorrect) values ('$name','$department','5','$result') ";
            $queryresult= mysqli_query($con,$finalresult); 
            
            ?>


      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
      <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
   </body>
</html>