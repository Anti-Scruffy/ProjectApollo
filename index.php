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

    
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
  </head>
  <body>
    
	<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span><strong>Appolo Medical</strong></a>
    </div>
	
	<!--Menu bar buttons-->
	<div class="navbar-collapse collapse">
		    <ul class="nav navbar-nav navbar-right">
			    
				<li class="active"><a href="#AboutUs" data-toggle="modal"><strong>AboutUs</strong></a></li>
                <li class="active"><a href="#contact" data-toggle="modal"><strong>Contact Us</strong></a></li>	
                <li class="active"><a href="http://localhost/projappolo/healthtipsview.php"><strong>Health Tips</strong></a></li>					
				<li class="active"><a href="signup.html"><span class="glyphicon glyphicon-user"><b>Signup</b> </a>
				<li ><form id="signin" class="navbar-form navbar-right" role="form" method="post" action="http://localhost/projappolo/login.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address" required>                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                   </form></li>
		
			</ul>
	  </div>
	  <!--Error handling-->

	  <div id="Msg">
            <?php if(!empty($_SESSION['loginfailedmsg'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['loginfailedmsg']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['loginfailedmsg']);?>
		<div id="Msg">
            <?php if(!empty($_SESSION['signupstatusmsg'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:green;"><div class="modal-content"><strong>';echo $_SESSION['signupstatusmsg']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['signupstatusmsg']);?>
		 <div id="Msg">
            <?php if(!empty($_SESSION['loginstatus'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['loginstatus']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
		<?php unset($_SESSION['loginstatus']);?>
  
  
	  <img src="images/homeimage.jpg" height="300dp" width="100%">
	</nav>
	<h2 align="center"><em>Appolo, We Care</em></h2>
	  <div class="row" style="border-style:solid;" >
			      <div class="col-sm-4" style="border-style:solid;">
					  <img src="images/doc.jpg" alt="Image" style="height:100px; width:100px"></img>
					  <p style="text-align:justify;">ksjdlaksjlskalksandklsnclskacnsacnsanclsakncscnsncsan
					                                 ksalksflaksf;jaslfj;aslfj;aslfj;salfj;asjf;lasjf;salfj
													  sfnaksfalksf;nasfna;sfln;saflnsafnsa;fn;safnsanfsanfsn
													  </p>
					</div>
					<div class="col-sm-4" style="border-style:solid;">
					  <img src="images/medicine.png" alt="Image" style="height:100px; width:100px"></img>
					  <p style="text-align:justify;">ksjdlaksjlskalksandklsnclskacnsacnsanclsakncscnsncsan
					                                 ksalksflaksf;jaslfj;aslfj;aslfj;salfj;asjf;lasjf;salfj
													  sfnaksfalksf;nasfna;sfln;saflnsafnsa;fn;safnsanfsanfsn
													  </p>
					</div>
					<div class="col-sm-4" style="border-style:solid;">
					  <img src="images/doc.jpg" alt="Image" style="height:100px; width:100px"></img>
					  <p style="text-align:justify;">ksjdlaksjlskalksandklsnclskacnsacnsanclsakncscnsncsan
					                                 ksalksflaksf;jaslfj;aslfj;aslfj;salfj;asjf;lasjf;salfj
													  sfnaksfalksf;nasfna;sfln;saflnsafnsa;fn;safnsanfsanfsn
													  </p>
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

 <div class="container">
	  <div class="jumbotron text-center" style="margin-top:50px;">
	     <h1><strong> Admin's Pannel</strong></h1>
	     <h3> Only authorized to medical management.</h3>
	     <hr/>
		 <div class="container" style="width:200px;">
		 <form class="form" role="form" method="POST" action="http://localhost/projappolo/adminlogin.php" accept-charset="UTF-8" id="login">
			<div class="form-group">
											 
				 <input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
											 
			    <input type="password" class="form-control" name="password" placeholder="Password" required width="200">
            
			</div>
			<div class="form-group">
			   <button type="submit" class="btn btn-primary btn-block">Login</button>
			</div>
										
		 </form>
		 
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