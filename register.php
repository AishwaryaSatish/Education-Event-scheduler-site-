<?php
include "dbconfig.php";

$USN = $_POST['usn'];
$NAME = $_POST['name'];
$SEMSECTION = $_POST['semsec'];
$BRANCH = $_POST['branch'];
$PHONE = $_POST['mob'];
$EMAILID = $_POST['email'];
$PASSWORD = $_POST['pass'];
$CLUBNAME = $_POST['ic'];

 
$sql = "INSERT INTO registeration (USN,NAME,SEMSECTION,BRANCH,PHONE,EMAILID,PASSWORD,CLUBNAME) VALUES ('$USN','$NAME','$SEMSECTION','$BRANCH','$PHONE','$EMAILID','$PASSWORD','$CLUBNAME')";

if (mysqli_query($conn, $sql)) {

   echo "<script>alert('Registration Successfull login now');</script>";
	echo "<script> window.location.assign('https://localhost/DBMS PROJECT/index.php');</script>";

} else {

   echo "<script>alert('Registration Fail');</script>";
	echo "<script> window.location.assign('https://localhost/DBMS PROJECT/index.php');</script>";
}

mysqli_close($conn);
?>
