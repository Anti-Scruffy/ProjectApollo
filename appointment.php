<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Appolo Medical</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/uploadform.css">
	<link rel="stylesheet" href="css/customcss.css">
	<link rel="stylesheet" href="css/dtp.css">

    
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
      
	  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  
  </head>
  <body style="background-color:#6DBFF5;">
    
		<div class='container'>
		
		
    <div class='row'>
	
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='well'style="width:1000px;">
                <form action="http://localhost/projappolo/upload.php" method="post" data-toggle="validator"enctype="multipart/form-data" name="uploadform" onsubmit="return validation()">
                    <div class='row'>
                        <div class='col-sm-4'>
						<p><strong><em>Make sure you enter the correct details.</em></strong></p>
						<div class="form-group">
						    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" pattern="[a-zA-Z\s]+" data-error="Enter only alphabets."required/>
									
						    </div>
							<div class="help-block with-errors"></div>
						</div>
						
                            <div class="form-group">
							    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="statename" id="statename"  placeholder="Enter your state name" pattern="[a-zA-Z\s]+" data-error="Enter only alphabets." required/>
								</div>
								<div class="help-block with-errors"></div>
							</div>
							 <div class="form-group">
							    <div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cityname" id="cityname"  placeholder="Enter your city name" pattern="[a-zA-Z\s]+" data-error="Enter only alphabets."required/>
								</div>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="0000000000" pattern="[0-9]{10}" data-error="Invalid phone number!" required/>
								</div>
								<div class="help-block with-errors"></div>
                            </div>
                            <div class='form-group'>
                                <label for='Doctor'>Doctor</label>
                                <select name='Doctor' class='form-control'>
                                    <option>Gynecologist</option>
									<option>Dermatologist</option>
									<option>Cardiologist</option>
									<option>Neurologist</option>
									<option>Ophthalmologist</option>
									<option>Surgeon</option>

                                </select>
                            </div>
						</div>
						<div class='col-sm-8'>
						
                            <div class='form-group'>
                                <label for='description'>Problem Description</label>
								<span><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                <textarea class='form-control' name='description' rows='10'placeholder="Enter short description of your medical problem." required></textarea>
                            </div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-primary' value='Take Appointment' />
                            </div>
                        </div>
							<div class="form-group">
							
							     
										<div class="row">
											<div class="col-sm-offset-4 col-sm-4">
												<h4 align="center"><strong>Select Appointment Date</strong></h4>
										
												<div class="date-picker"  data-date="2014-02-03" >
													<div class="date-container">
														<h3 class="date">
															
															<span class="text">17th</span>
															<span data-toggle="datepicker" data-method="add" data-type="d" class="fa fa-angle-right"></span>
														</h3>
														<h2 class="month">
															
															<span class="text">December</span>
															
														</h2>
													</div>
												</div>
											</div>
										</div>

                                         <input type="hidden" id="dateinput" name="date"></input>
 
          


						     
                            </div>
						

                        
						</div>
                   
                </form>
			</div>
           </div>
        </div>
    </div>


<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/uploadimage.js"></script>
	
	<script src="js/dtp.js"></script>
  </body>
</html>