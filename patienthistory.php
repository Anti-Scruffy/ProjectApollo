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
	   header("location:patientshistory.php");
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
  	
	 <h4 align="center"><strong>Patient's History</strong></h4>
    
		<div class='container'>
		
		
    <div class='row'>
	
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='well'style="width:1000px;">
                <form action="http://localhost/projappolo/pupdate.php" method="post" enctype="multipart/form-data" name="uploadform" data-toggle="validator">
                    <div class='row'>
                        <div class='col-sm-4'>
						<p><strong><em>Make sure you enter the correct details.</em></strong></p>
						<div class="form-group">
						    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="pid" id="pid" disabled="disabled" placeholder="Enter the patientID" value="<?php echo $data['PatientsID'];?>"required/>
									
						    </div>
							<p id="invalid_1" style="color:red;"></p>
						</div>
						
                            <div class="form-group">
							    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter the name" value="<?php echo $data['PatientsName'];?>" pattern="[a-zA-Z\s]+" data-error="Enter only alphabets."required/>
								</div>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="0000000000" value="<?php echo $data['Phone'];?>"pattern="[0-9]{10}" data-error="Invalid phone number!"required/>
							</div>
							<div class="help-block with-errors"></div>
							</div>
							<div class="form-group" >
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter mail address" value="<?php echo $data['Email'];?>"required/>
							</div>
							</div>
							<div class="form-group">
							<div class="input-group" >
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="age" id="age"  placeholder="Enter the age"value="<?php echo $data['PatientsAge'];?>" pattern="[0-9]" max="100"data-error="Invalid age!"required/>
							</div>
							<div class="help-block with-errors"></div>
							</div>
                            <label for='bloodgroup'>BloodGroup</label>
                                <select name='bloodgroup' class='form-control' disabled="disabled">
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
                                <label for='description'>Diagnosis</label>
								<span><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                <textarea class='form-control' name='diagnosis' rows='5'placeholder="Enter the diagnosis results." required><?php echo $data['Diagnosis'];?></textarea>
                            </div>
                           </div>
                        <div class='col-sm-8'>
						
                            <div class='form-group'>
                                <label for='description'>Doctor's Remarks</label>
								<span><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                <textarea class='form-control' name='description' rows='10' required><?php echo $data['DoctorsRemarks'];?></textarea>
                            </div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-primary' value='Update' />
                            </div>
							
                        
						
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/uploadimage.js"></script>
	
  </body>
</html>