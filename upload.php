<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
	  
      $name = mysqli_real_escape_string($dbcon,$_POST['name']);
      $state = mysqli_real_escape_string($dbcon,$_POST['statename']);
	  $city = mysqli_real_escape_string($dbcon,$_POST['cityname']);
	  $phone=$_POST['phone'];
      $doctor = mysqli_real_escape_string($dbcon,$_POST['Doctor']);
	  $date = mysqli_real_escape_string($dbcon,$_POST['date']);
	  
	  $description = mysqli_real_escape_string($dbcon,$_POST['description']);
	  
      $sqlquery = "INSERT INTO apolodatabase.appointments(`Name`, `State`,`City`, `Phone`, `Doctor`,`Description`,`AppointmentDate`) VALUES ('$name', '$statename','$city', '$phone', '$doctor','$description','$date');";
      $result = mysqli_query($dbcon,$sqlquery);
	  if (!$result) {
      printf("Error: %s\n", mysqli_error($dbcon));
      exit();
     }
	 else
		 header("location:uploadsuccess.html");
	  
        
	}
?>