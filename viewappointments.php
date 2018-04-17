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
    <title>Appointments</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   
  </head>
  <body style="background-color:#6DBFF5;">
    <a class="navbar-brand-fixed" href="adminpage.php"><span class="glyphicon glyphicon-home"></span><strong>AppoloMedical</strong></a><br/>
<table class="table table-bordered">
	<?php
	    	
			
				$query="SELECT * from apolodatabase.appointments";
				$result = mysqli_query($dbcon,$query);
				if (!$result) {
					printf("Error: %s\n", mysqli_error($dbcon));
					exit();
			}
			while($row=mysqli_fetch_array($result))
				{
					echo'<div class="container" style="margin-top:10px;">
						<div class = "panel panel-info">
							<div class = "panel-heading">';
								echo'<h3 class = "panel-title">'; printf("Appointments");echo'</h3>';
							echo'</div>';
                              
							echo'<div class="panel body">';
							   echo'<div class="row">';
							         echo'<div class="col-sm-6 col-md-3">';
										echo'<h3><pre><strong>Name            :</strong>'; printf("%s",$row['Name']);echo'</pre></h3>';
										echo'<h3><pre><strong>State           :</strong>'; printf("%s",$row['State']);echo'</pre></h3>';
										echo'<h3><pre><strong>City            :</strong>'; printf("%s",$row['City']);echo'</pre></h3>';
										
						
							        echo'</div>';
									echo'<div class="col-sm-6 col-md-3">';
										echo'<h3><pre><strong>Phone           :</strong>'; printf("%s",$row['Phone']);echo'</pre></h3>';
										echo'<h3><pre><strong>Doctor          :</strong>'; printf("%s",$row['Doctor']);echo'</pre></h3>';
										echo'<h3><pre><strong>Appointment Date:</strong>'; printf("%s",$row['AppointmentDate']);echo'</pre></h3>';
							        echo'</div>';
									echo'<div class="col-sm-6 col-md-3">';
										echo'<h3><pre><strong>Medical Issue :</strong>';echo'<br/>'; echo'</pre></h3>';
										echo'<p align="justify" background-color="blue">';printf("%s",$row['Description']);echo'</p>';
							        echo'</div>';
									
								echo'</div>';
						echo'</div>';
						echo'<div class="panel footer">';
						    echo'<p align="center" style="color:blue;"><strong>Contact the patients and confirm the appointments</strong></p>';
					         echo'</div>
					</div>
					</div>';
					
					
					
				}
		
		    
			
		
	?>
	
	</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>