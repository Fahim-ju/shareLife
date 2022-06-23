<html>
		<body bgcolor="91C2D5">
		<h1> <marquee > <b> <i> <p style="color:red">  WELCOME TO OUR BLOOD DONATION SYSTEM DATABASE  </p> </b> </i> </marquee> </h1>
	<p align="center" > <img src="homepage_icon.jpg" width = "700" height="150"> </p>

			<table align="center">
<tr>
	<td><a href="http://localhost/blood_donation/insert.php"> <img src="donor_icon.png" height="200" width="200" > </a> </td>
	<td> <br> </td>
	<td><a href="http://localhost/blood_donation/insert_patient.php"> <img src="patient_icon.png" height="200" width="200" > </a> </td>
	<td> <br> </td>
	<td><a href="http://localhost/blood_donation/insert_volunteer.php"> <img src="volunteer_icon.png" height="200" width="200" > </a> </td>
</tr>
<tr>
	<td> DONOR ENTRY </td>
	<td> <br> </td>
	<td> PATIENT ENTRY </td>
	<td> <br> </td>
	<td>VOLUNTEER ENTRY </td>
</tr>
</table>
<br><br><br><br><br>
			<p align="center"> <a href="http://localhost/blood_donation/insert.php"> <img src="donor_icon.png" height="29" width="29" > DONOR ENTRY </a> <br>
			<a href="http://localhost/blood_donation/insert_patient.php"> <img src="patient_icon.png" height="29" width="28" >PATIENT ENTRY </a> <br>
			<a href="http://localhost/blood_donation/insert_volunteer.php"> <img src="volunteer_icon.png" height="25" width="25" >VOLUNTEER ENTRY </a> <br>
			</p>
			
<form action="" method="GET">
<p align="center" > 
<input style="background-color:grey;color:yellow;width:90px" type = "submit" name="submit" value="Log Out"/> </p>
<?php
error_reporting(0);
if($_GET['submit'])
{
		echo "Logout Successful<br>";
		header( "Location: homepage.php" ); die;
} ?>
</form> </p>
		</body>
</html>

