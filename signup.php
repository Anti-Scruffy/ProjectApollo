<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  
      $email = mysqli_real_escape_string($dbcon,$_POST['email']);
      $fullname = mysqli_real_escape_string($dbcon,$_POST['name']);
      $password = mysqli_real_escape_string($dbcon,$_POST['password']); 
        
      $sqlquery = "INSERT INTO apolodatabase.auth (`Email`, `Name`,`Password`) VALUES ('$email', '$fullname','$password');";
      $result = mysqli_query($dbcon,$sqlquery);
	  if (!$result) {
          $_SESSION['signupstatusmsg']= mysqli_error($dbcon);
    exit();
     }
else
{	
     $_SESSION['signupstatusmsg']="Successfully Registered!!";
     header("location:index.php");
}
  

   }
?>