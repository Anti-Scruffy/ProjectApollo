<?php
   include("connection.php");
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
	  
      $name = mysqli_real_escape_string($dbcon,$_POST['name']);
      
	  
      $sqlquery = "DELETE FROM apolodatabase.appointments WHERE Name='$name'";
      $result = mysqli_query($dbcon,$sqlquery);
	  if (!$result) {
      printf("Error: %s\n", mysqli_error($dbcon));
      exit();
     }
	//else
		 //header("location:uploadsuccess.html");
	  
        
	}
?>