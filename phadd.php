<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $pid = mysqli_real_escape_string($dbcon,$_POST['pid']);
      $name = mysqli_real_escape_string($dbcon,$_POST['name']);
      $phone = mysqli_real_escape_string($dbcon,$_POST['phone']); 
	  $email = mysqli_real_escape_string($dbcon,$_POST['email']);
      $age = mysqli_real_escape_string($dbcon,$_POST['age']); 
      $bloodgroup = mysqli_real_escape_string($dbcon,$_POST['bloodgroup']);
	  $diagnosis = mysqli_real_escape_string($dbcon,$_POST['diagnosis']);  
	  $description = mysqli_real_escape_string($dbcon,$_POST['description']);
      $gender = mysqli_real_escape_string($dbcon,$_POST['gender']);	  
	  
        
      $sqlquery = "INSERT INTO apolodatabase.patientshistory (`Image`, `PatientsID`,`PatientsName`,`Phone`,`Email`,`PatientsAge`,`BloodGroup`,`Gender`,`Diagnosis`,`DoctorsRemarks`) 
	                                                          VALUES ('$file','$pid', '$name','$phone','$email','$age','$bloodgroup','$gender','$diagnosis','$description');";
      $result = mysqli_query($dbcon,$sqlquery);
	  if (!$result) {
          $session['fail']="Record not added!!Error.";
		  header('location:patientshistory.php');
    exit();
     }
else
{	
		 $session['pass']="Record  added successfully.";
		 header("location:patientshistory.php");
}
  

   }
?>