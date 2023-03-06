<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clbg";*/
include "dbconfig.php";
/*$USN = $_POST['usn'];
$NAME = $_POST['name'];
$SEMSECTION = $_POST['semsec'];
$BRANCH = $_POST['branch'];
$PHONE = $_POST['mob'];
$EMAILID = $_POST['email'];
$PASSWORD = $_POST['pass'];
$CLUBNAME = $_POST['ic'];*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registeration";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
  echo "<table><tr><th>USN</th><th>NAME</th><th>SEMSECTION</th><th>BRANCH</th><th>PHONE</th><th>EMIALID</th><th>PASSWORD</th><th>CLUBNAME</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["USN"]."</td><td>".$row["NAME"]."</td><td>".$row["SEMSECTION"]."</td><td>".$row["BRANCH"]."</td><td>".$row["PHONE"]."</td><td>".$row["EMIALID"]."</td><td>".$row["PASSWORD"]."</td><td>".$row["CLUBNAME"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}*/
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>View</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Registeration Information</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>USN</th>
                <th>Name</th>
                <th>SemSec</th>
                <th>Branch</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
                <th>Clubname</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['USN'];?></td>
                <td><?php echo $rows['NAME'];?></td>
                <td><?php echo $rows['SEMSECTION'];?></td>
                <td><?php echo $rows['BRANCH'];?></td>
                <td><?php echo $rows['PHONE'];?></td>
                <td><?php echo $rows['EMAILID'];?></td>
                <td><?php echo $rows['PASSWORD'];?></td>
                <td><?php echo $rows['CLUBNAME'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>