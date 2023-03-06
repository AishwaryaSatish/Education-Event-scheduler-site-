<?php

$link=mysqli_connect("localhost", "root","");
mysqli_select_db($link,"clbg");

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin_panel</title>
	<style type="text/css">
		#admin_panel_design{
			margin-top:200px; 
            margin-left:700px;
            text-align: center;
            
            

		}
		body{
			background-image: url('background.png');
			background-repeat: no-repeat;
			background-size: cover;
		}
		table tr td{
			 border: 1px solid black;
    border-collapse: collapse;

		}
		table tr {
    background-color: rgba(18, 120, 98, 1);
    color: white;
    width: 100px;
		h2{
			text-align: center;
		}
    height: 10px;
}
		
		#txt{
			text-align: center;
			list-style: none;
		}
		#box{

    background-color: ;
    width: 600px;
    height: 900px;
    border: 15px solid rgba(18, 120, 98, 1);

    padding: 25px;
    margin: 25px;
    margin-left:350px;

}
	</style>
</head>
<body>
	<div class="back">
<h1 style="text-align: center;">ADMIN PANEL</h1>



<form name="form1" action="" method="post">
<table id="admin_panel_design">
<tr>
	<td>Insert  usn:</td>
	<td><input type="text" name="t1"></td>
</tr> 
<tr>
	<td>Insert name:</td>
	<td><input type="text" name="t2"></td>
</tr> 
<tr>

	<td>Insert semsec:</td>
	<td><input type="text" name="t3"></td>
</tr>
<tr>
	<td>Insert branch:</td>
	<td><input type="text" name="t4"></td>
<tr>
	<td>Insert phone:</td>
	<td><input type="text" name="t5"></td>
</tr>
<tr>
	<td>Insert email:</td>
	<td><input type="email" name="t6"></td>
</tr>
<tr>
	<td>Insert eventid:</td>
	<td><input type="text" name="t7"></td>
</tr>
<tr>
	<td>Insert eventname:</td>
	<td><input type="text" name="t8"></td>
</tr>
<tr>
	<td colspan="5" align="center"> 
	<input type="submit" name="submit1" value="insert" > 
	<input type="submit" name="submit2" value="delete" > 
	<input type="submit" name="submit3" value="view" >
	

	</td>
	
</tr>
</tr>
</table>
</form>



<?php

 if(isset($_POST["submit1"]))
 {
 	mysqli_query($link,"INSERT into event_register values ('$_POST[t1]','$_POST[t2]','$_POST[t3]',
 		'$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]') ");
 }


 if(isset($_POST["submit2"]))
 {
 	mysqli_query($link,"DELETE FROM event_register where usn='$_POST[t1]' ");
}
if(isset($_POST["submit3"])){
echo "<script> alert('you can view the information'); window.location.assign('http://localhost/DBMS PROJECT/eventadminview.php');</script>";
}


 	?>

</div>
</body>
</html>