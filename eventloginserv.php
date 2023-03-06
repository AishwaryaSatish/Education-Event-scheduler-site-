<?php
include "dbconfig.php";
 
  	
  		$usn =$_POST['usn'];
  		$password =$_POST['password'];
  	
  		$query =mysqli_query($conn,"SELECT * FROM student_admin where PASSWORD='$password' AND  USN='$usn' ");

  		$rows = mysqli_num_rows($query);
  		if($rows>0)
  		{
  			echo "<script>alert('Login Succces');window.location.assign('https://localhost/DBMS PROJECT/event_admin_panel.php');</script> ";
  		}
  		else{
  			 echo "<script>alert('USN or Password incorrect');window.location.assign('https://localhost/DBMS PROJECT/admin_login.php');</script> ";
    
  		}
  		mysqli_close($conn);



  
 





?>