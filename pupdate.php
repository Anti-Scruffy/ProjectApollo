<?php
   include("connection.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST"){
	   

	      
          $name = mysqli_real_escape_string($dbcon,$_POST['name']);
          $phone = mysqli_real_escape_string($dbcon,$_POST['phone']); 
	      $email = mysqli_real_escape_string($dbcon,$_POST['email']);
		  $age = mysqli_real_escape_string($dbcon,$_POST['age']); 
		  
		  $diagnosis = mysqli_real_escape_string($dbcon,$_POST['diagnosis']);  
		  $description = mysqli_real_escape_string($dbcon,$_POST['description']);
		  
		
		
        
		
		 $sqlquery=" UPDATE apolodatabase.patientshistory SET  PatientsName='$name' , Phone='$phone' , Email='$email', PatientsAge='$age',Diagnosis='$diagnosis', DoctorsRemarks='$description';";
	     $result= mysqli_query($dbcon,$sqlquery);
		  if (!$result) 
		  {
			$_SESSION['updatefail']="Update fail..Try again!!";
			header('location:patientshistory.php');
			exit();
         }
		 else{
			 $_SESSION['updated']="Record updated!!";
			header('location:patientshistory.php');
		 }
   
   }



?>