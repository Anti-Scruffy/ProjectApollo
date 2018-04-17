<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  
      $tips = mysqli_real_escape_string($dbcon,$_POST['healthtips']);
	  $title = mysqli_real_escape_string($dbcon,$_POST['title']);
	  $writer = mysqli_real_escape_string($dbcon,$_POST['writer']);
 
        
      $sqlquery = "INSERT INTO apolodatabase.healthtips (`Title`,`Writer`,`Article`) VALUES ('$title','$writer','$tips');";
      $result = mysqli_query($dbcon,$sqlquery);
	  if ($result) {
               echo'<table style="margin:400px; border:solid; height:100px;width:450px">';
			     echo'<tr>';
                      echo' <td>';printf("Your article has been submited.");echo'</td>';
                      echo'<td><p>Homepage<a class="navbar-brand" href="adminpage.html"><span class="glyphicon glyphicon-home"></span><strong>AppoloMedical</strong></a></p></td>';				  
			   echo'</table>';
     }

  

   }
?>