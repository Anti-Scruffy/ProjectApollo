<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Appolomedical</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


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
	   <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span><strong>Appolo Medical</strong></a>
	   </div>
	  <ul class="nav navbar-nav navbar-right">

	  <li class="active"><a href="http://localhost/projappolo/viewappointments.php"><strong>ViewAppointments</strong></a></li>
	  <li class="active"><a href="http://localhost/projappolo/patientshistory.php"><strong>PatientsHistory</strong></a></li>
	  <li class="active"><a href="http://localhost/projappolo/healthtips.php"><strong>AddHealthTips</strong></a></li>
	  <li><pre style="background-color:#66C2FF"><p style="color:#197ABA;"><strong>Welcome Back Admin!!</strong></p></pre></li>
	  </ul>

	</div>
</nav>

	<marquee><h3>Appolo Medical...</h3><p><pre style="width:200px;">        We Care!!</pre></p></marquee>
 <div class="row" style="margin-top:100px;margin-left:10px;margin-right:10px;">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="http://localhost/projappolo/viewappointments.php?">
        <img src="images/appointment.png" alt="Appointment" style="width:100%; height:300px;">
        <div class="caption">
          <p align="center"><strong>VIEW APPOINTMENTS</strong></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="http://localhost/projappolo/patientshistory.php">
        <img src="images/patientshistory.jpg" alt="Patients History" style="width:100%; height:300px;">
        <div class="caption">
          <p align="center"><strong>PATIENT'S HISTORY</strong></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="http://localhost/projappolo/healthtips.php">
        <img src="images/healthtips.png" alt="Fjords" style="width:100%; height:300px;">
        <div class="caption">
            <p align="center"><strong>UPDATE HEALTH TIPS</strong></p>

        </div>
      </a>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>