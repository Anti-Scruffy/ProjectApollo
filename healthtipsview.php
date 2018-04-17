

<?php
include("connection.php");
   session_start();

	
		

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AppoloMedical</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body style="background-color:#6DBFF5;">
   <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span><strong>AppoloMedical</strong></a></br></br>
    <center>
	   <?php
	   $sqlquery1="Select * FROM apolodatabase.healthtips";
		$result1=mysqli_query($dbcon,$sqlquery1);
		
		while($data=mysqli_fetch_array($result1)){
			
		echo '<div class="jumbotron text-center" style="margin:30px;">';
		    echo'<h2 style="color:#256F99;"><strong>Title      :'; printf("%s",$data['Title']);echo'</strong></h2>';
			echo'<pre><h4><em>Written By :'; printf("%s",$data['Writer']);echo'</em></h4></pre>';
			
			echo'<p align="justify" style="color:#160D87;">';printf("%s",$data['Article']);echo'</p>';
		echo'</div>';
		}
	   ?>
	
	</center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>