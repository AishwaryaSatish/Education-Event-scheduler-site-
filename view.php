<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clbg";*/
include "dbconfig.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registeration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>USN</th><th>NAME</th><th>SEMSECTION</th><th>BRANCH</th><th>PHONE</th><th>EMIALID</th><th>PASSWORD</th><th>CLUBNAME</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["USN"]."</td><td>".$row["NAME"]."</td><td>".$row["SEMSECTION"]."</td><td>".$row["BRANCH"]."</td><td>".$row["PHONE"]."</td><td>".$row["EMIALID"]."</td><td>".$row["PASSWORD"]."</td><td>".$row["CLUBNAME"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>