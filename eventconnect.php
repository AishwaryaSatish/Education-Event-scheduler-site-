<?php
include "dbconfig.php";

$USN = $_POST['usn'];
$NAME = $_POST['name'];
$SEMSECTION = $_POST['semsec'];
$BRANCH = $_POST['branch'];
$PHONE = $_POST['mob'];
$EMAILID = $_POST['email'];
$EVENTID = $_POST['eid'];
$EVENTNAME = $_POST['er'];

 
$sql = "INSERT INTO event_register (USN,NAME,SEMSECTION,BRANCH,PHONE,EMAILID,EVENTID,EVENTNAME) VALUES ('$USN','$NAME','SEMSECTION','$BRANCH',$PHONE,'$EMAILID','$EVENTID','$EVENTNAME')";

if (mysqli_query($conn, $sql)) {

   echo "<script>alert('Registration Successful');</script>";
	echo "<script> window.location.assign('https://localhost/DBMS PROJECT/home.html');</script>";

} else {

   echo "<script>alert('Registration Fail');</script>";
	echo "<script> window.location.assign('https://localhost/DBMS PROJECT/upevents.html');</script>";
}

mysqli_close($conn);
?>
