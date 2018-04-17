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
    <title>ApploMedical</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
  </head>
  <body>
     <!--menubar-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
       <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
           <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span><strong>ApploMedical</strong></a>
        </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
	   
	   <li class="active"><a href="#AboutUs" data-toggle="modal"><strong>AboutUs</strong></a></li>
                <li class="active"><a href="#contact" data-toggle="modal"><strong>Contact Us</strong></a></li>	
                <li class="active"><a href="http://localhost/projappolo/healthtipsview1.php"><strong>Health Tips</strong></a></li>
	    <li class="active"><a href="appointment.php"><span class="glyphicon glyphicon-dashboard"><strong>Appointment</strong></a></li>
		
		<li class="active"><a href="#Patient" data-toggle="modal"><span class="glyphicon glyphicon-book"><strong>PatientsHistory</strong></a></li>
	   </ul>
	 </div>
	</div>
	 <div id="Msg">
            <?php if(!empty($_SESSION['msg'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['msg']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['msg']);?>
  </nav>
  
  <!-- Homepage Image-->
	
	<div id="myCarousel" class="carousel slide" data-interval="1000" data-ride="carousel">
	
	  <ul class="carousel-indicators">
	     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		 <li data-target="#myCarousel" data-slide-to="1" ></li>
		 <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ul>
	  
	  <div class="carousel-inner">
	  
	    <div class="item active">
		  <img src="images/image1.jpg" style="height:440px;" alt="Books" class="img-responisve"  width="100%">		 
		
		</div>
		<div class="item">
		  <img src="images/image2.jpeg" style="height:440px;" alt="Books" class="img-responisve"  width="100%">		 
		
		</div>
		<div class="item">
		  <img src="images/image3.jpeg"  style="height:440px;"alt="Books" class="img-responisve" width="100%" >		 
		
		</div>
	  </div>
	  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	     <span class="icon-prev"></span>
	</a>
	 <a class="carousel-control right" href="#myCarousel" data-slide="next">
	     <span class="icon-next"></span>
	</a>

	</div>	

  <!--Jumbotron-->
  <div class="container">
	  <div class="jumbotron text-center">
	    <h3 align="center">Applo Medical</h3>
		<p align=""center"><em>We care</em></p>
	 </div>
	</div>
	
	<div class="modal fade" id="Patient" role="dialog">
	    <div class="modal-dialog">
		 <div class="modal-content">
		   
			<div class="modal-body">
			<form method="post" action="http://localhost/projappolo/viewpatient.php">
			    <p>Enter the PatientsID</p>
				<input type="text" name="pid">
			
			 <div class="modal-footer">
			   <input type="submit" class="btn btn-primary">
			 </div>
			 </form>
		 </div>
		</div>
	</div>
	</div>
	<!--modal for contact info-->
<div class="modal fade" id="contact" role="dialog">
	    <div class="modal-dialog">
		 <div class="modal-content">
		   <div class="modal-header">
		     <h4>About Us</h4>
			</div>
			<div class="modal-body">
			  <h3 style="align:center;background:#ADD8E6;"><em>Pleace call in the given branch numbers for state and you will be provided with information about your nearest branch.<em></h3>
			  
			  <pre><p align="justify"><h3>For Karnataka Branches</h3><span class="glyphicon glyphicon-earphone"></span>9848788936</p></pre>
			  
			  <pre><p align="justify"><h3>For Maharashtra Branches</h3><span class="glyphicon glyphicon-earphone"></span>9848762994</p></pre>
			  
			  <pre><p align="justify"><h3>For Delhi Branches</h3><span class="glyphicon glyphicon-eearphone"></span>9848784444</p></pre>
			  
			  <pre><p align="justify"><h3>For Gujrat Branches</h3><span class="glyphicon glyphicon-earphone"></span>9092321412</p></pre>
			  
			  <pre><p align="justify"><h3>For Goa Branches</h3><span class="glyphicon glyphicon-earphone"></span>9841241126</p></pre>
			 
			   <a class="btn btn-primary" data-dismiss="modal">Close</a>
			 </div>
		 </div>
		</div>
	</div>
</div>
<!--jquery for displaying the developer info i.e about us-->
	
	<div class="modal fade" id="AboutUs" role="dialog">
	    <div class="modal-dialog">
		 <div class="modal-content">
		   <div class="modal-header">
		     <h4>About Us</h4>
			</div>
			<div class="modal-body">
			  <p style="text-align:justify;">Apollo Hospitals, a name synonymous with world-class healthcare, 
			  was started by its founder and present Chairman, Dr. Prathap C. Reddy in 1983 with the establishment
			  of the first corporate hospital in India. Its unique ability of resource management and able deployment of 
			  technology and knowledge to the service of mankind, justifies its recognition within the Healthcare Industry 
			  in India and abroad. Today, Apollo Hospitals Group is the uncontested leader in the delivery of healthcare of 
			  international standards in South Asia. Apart from the core area of hospitals, the Group has diversified into various
			  related avenues including e-health, franchising, IT & internet based technology, telemedicine, virtual medical 
			  university, education and training, home healthcare, pharmacy retailing, hospital project management and health insurance.
			  Apollo Hospitals pioneered the concept of corporate healthcare delivery in India. Today it has emerged as the single largest 
			  private hospital group in Asia. It commands the leadership by providing healthcare to several nations with over 9000 beds and 54
			  hospitals across India and overseas. In recognition of its healthcare delivery systems, Apollo has 7 hospitals in the Indian 
			  Subcontinent accredited by The Joint Commission International, USA. Late Mother Theresa cited Apollo Hospitals as “The Jewel in 
			  the Crown” for its medical excellence and unstinting, dedicated service to humanity while felicitating Dr. Prathap C Reddy, Chairman,
			  Apollo Hospitals Group. The Apollo group has associations with over 120 teaching hospitals across the country and abroad. The training
			  for Apollo’s medical professionals is supported by affiliations with various world renowned healthcare and teaching institutions in
			  the USA and UK. Apollo Hospitals gives a lot of significance to training and education. It has created many education and training
			  institutes providing technical and clinical knowledge inputs to almost the entire gamut of healthcare professionals.</p>
			 <div class="modal-footer">
			   <a class="btn btn-primary" data-dismiss="modal">Close</a>
			 </div>
		 </div>
		</div>
	</div>
</div>
<script type="text/javascript">
   function myFunction() {
	
	var x = document.getElementById("pop"); 
    x.hide();
}
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>