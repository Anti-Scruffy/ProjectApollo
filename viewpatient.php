<?php
include("connection.php");
   session_start();
        $pid = mysqli_real_escape_string($dbcon,$_POST['pid']);
   $sqlquery1="Select * FROM apolodatabase.patientshistory WHERE PatientsID='$pid'";
   $result=mysqli_query($dbcon,$sqlquery1);
   $data=mysqli_fetch_array($result);
   $count = mysqli_num_rows($result);
   if($count==0){
	   $_SESSION['msg']="No patientshistory found.Invalid PID!!";
	   header("location:homepage.php");
	   exit();
   }
   
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Patients History</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:#6DBFF5;">
    
	<div class="container">
	  <div class="jumbotron text-center" style="margin-top:50px;">
	     <h4> Welcome To <em>AppoloMedical</em><pre><p>We care</p></pre></h4>
		 <div class="row">
		    <div class="col-sm-6 col-md-3">
		      <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($data['Image'] ).'" height="200" width="200"/> ';?>
			   <?php echo'<h3><pre><strong>PatientsID:</strong>'; printf("%s",$data['PatientsID']);echo'</pre></h3>';?>
	         </div>
			 <div class="col-sm-6 col-md-3">
		    
			   <?php echo'<h3><pre><strong>PatientsName:</strong>'; printf("%s",$data['PatientsName']);echo'</pre></h3>';?>
			   <?php echo'<h3><pre><strong>Phone       :</strong>'; printf("%s",$data['Phone']);echo'</pre></h3>';?>
			   <?php echo'<h3><pre><strong>Email       :</strong>'; printf("%s",$data['Email']);echo'</pre></h3>';?>
	         </div>
			 <div class="col-sm-6 col-md-3">
		      <?php echo'<h3><pre><strong>PatientsAge:</strong>'; printf("%s",$data['PatientsAge']);echo'</pre></h3>';?>
			  <?php echo'<h3><pre><strong>BloodGroup :</strong>'; printf("%s",$data['BloodGroup']);echo'</pre></h3>';?>
			  <?php echo'<h3><pre><strong>Gender     :</strong>'; printf("%s",$data['Gender']);echo'</pre></h3>';?>
				 
	         </div>
			  <div class="col-sm-6 col-md-3">
		      <?php echo'<h3><pre><strong>Diagnosis     </strong></pre></h3>'; printf("%s",$data['Diagnosis']);?>
			  <?php echo'<h3><pre><strong>DoctorsRemarks</strong></pre></h3>'; printf("%s",$data['DoctorsRemarks']);?>
			   
				 
	         </div>
		</div>
		<a href="homepage.html" class="btn btn-primary">Close</a>
	  </div>
	  
	</div>	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>