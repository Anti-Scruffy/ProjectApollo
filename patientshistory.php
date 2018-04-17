
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
	<link rel="stylesheet" href="css/uploadform.css">
	<link rel="stylesheet" href="css/customcss.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
      
	  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  
  </head>
  <body>
  <div id="Msg">
            <?php if(!empty($_SESSION['msg'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['msg']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['msg']);?>
		
		<div id="Msg">
            <?php if(!empty($_SESSION['updatefail'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['updatefail']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['updatefail']);?>
		<div id="Msg">
            <?php if(!empty($_SESSION['updated'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:green;"><div class="modal-content"><strong>';echo $_SESSION['updated']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['updated']);?>
		<div id="Msg">
            <?php if(!empty($_SESSION['fail'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:red;"><div class="modal-content"><strong>';echo $_SESSION['fail']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['fail']);?>
		<div id="Msg">
            <?php if(!empty($_SESSION['pass'])) {echo'<form><div class="modal-dialog modal-sm" id="pop"role="dialog" style="color:green;"><div class="modal-content"><strong>';echo $_SESSION['pass']; echo'</strong><div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" onclick="myFunction()">Close</button></form></div></div></div>';} ?>
        </div>
        <?php unset($_SESSION['pass']);?>
    <h4 align="center"><a class="navbar-brand" href="adminpage.php"><span class="glyphicon glyphicon-home"></span><strong>ApploMedical</strong></a> <strong>Patient's History</strong></h4>
		
		<div class='container'>
		
		
    <div class='row'>
	
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='well'style="width:1000px;">
                <form action="http://localhost/projappolo/phadd.php" method="post" data-toggle="validator"enctype="multipart/form-data" name="uploadform">
                    <div class='row'>
                        <div class='col-sm-4'>
						<p><strong><em>Make sure you enter the correct details.</em></strong></p>
						<div class="form-group">
						    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="pid" id="pid"  placeholder="Enter the patientID" required/>
									
						    </div>
							<p id="invalid_1" style="color:red;"></p>
						</div>
						
                            <div class="form-group">
							    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter the name"  pattern="[a-zA-Z\s]+" data-error="Enter only alphabets."required/>
								</div>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="0000000000" pattern="[0-9]{10}" data-error="Invalid phone number!"required/>
							</div>
							<div class="help-block with-errors"></div>
							</div>
							<div class="form-group" >
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter mail address" required/>
							</div>
							</div>
							<div class="input-group" >
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="age" id="age"  placeholder="Enter the age" required/>
							</div>
							<div class="form-group">
							<div class="input-group" class="radio-inline" style="width:300px;">
									<p><i class="fa fa-male fa" aria-hidden="true"></i><strong>Gender</strong></p>
										<label class="radio-inline">
										  <input type="radio" name="gender" value="Male">Male
										</label>
										<label class="radio-inline">
										  <input type="radio" name="gender" value="Female">Female
										</label>
										<label class="radio-inline">
										  <input type="radio" name="gender" value="Others">Others
										</label>
							</div>
							</div>
                            <label for='bloodgroup'>BloodGroup</label>
                                <select name='bloodgroup' class='form-control'>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
									<option>AB-</option>
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
                                </select>
							<div class='form-group'>
                                <label for='diagnosis'>Diagnosis</label>
								<span><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                <textarea class='form-control' name='diagnosis' rows='5'placeholder="Enter the diagnosis results." required></textarea>
                            </div>
                           </div>
                        <div class='col-sm-8'>
						<p><strong>Upload your image.</strong></p>
						<!-- image-preview-filename input [CUT FROM HERE]-->
					<div class="input-group image-preview">
					<input type="text" class="form-control image-preview-filename" name="image" disabled="disabled"required> <!-- don't give a name === doesn't send on POST/GET -->
					<span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/jpg ,image/gif" name="image"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
                            <div class='form-group'>
                                <label for='description'>Doctor's Remarks</label>
								<span><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                <textarea class='form-control' name='description' rows='10'placeholder="Enter short description of your uploaded books." required></textarea>
                            </div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-primary' value='ADD' />
                            </div>
							<div class="container" style="border-style:dotted; width:300px;">
							<pre><p><strong><em>Already have registered as patient?</em></strong></p></pre>
							<a href="#Updatepatienthistory" data-toggle="modal" class="btn btn-primary" style="margin-left:80px;">Udpate History</a>
							</div>
                        </div>
						
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Updatepatienthistory" role="dialog">
	    <div class="modal-dialog">
		 <div class="modal-content">
		   
			<div class="modal-body">
			<form method="post" action="http://localhost/projappolo/patienthistory.php">
			    <p>Enter the PatientsID</p>
				<input type="text" name="pid" required>
			
			 <div class="modal-footer">
			   <input type="submit" class="btn btn-primary">
			 </div>
			 </form>
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
	<script src="js/uploadimage.js"></script>
	
  </body>
</html>