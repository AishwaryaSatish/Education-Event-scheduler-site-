<?php
include "dbconfig.php";
 

$USN = $_POST['usn'];
$PASSWORD = $_POST['pass'];
 
$sql= "SELECT * FROM registeration WHERE USN = '$USN' AND PASSWORD = '$PASSWORD' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo "<script> alert('login successful'); window.location.assign('http://localhost/DBMS PROJECT/home.html');</script>";
}else{
echo "<script> alert('login unsuccessful'); window.location.assign('http://localhost/DBMS PROJECT/index.php');</script>";
}

?>
