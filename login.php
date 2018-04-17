<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($dbcon,$_POST['email']);
      $password = mysqli_real_escape_string($dbcon,$_POST['password']); 
      
      $sqlquery = "SELECT * FROM apolodatabase.auth WHERE Email = '$username' and Password = '$password'";
      $result = mysqli_query($dbcon,$sqlquery);
	  if (!$result) {
       $_SESSION['loginfailedmsg']="Invalid Username or Password!!";
	    header("location: index.php");
       exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: homepage.html");
      }else {
         $_SESSION['loginfailedmsg']="Invalid Username or Password!!";
		 header("location: index.php");
      }
   }
?>