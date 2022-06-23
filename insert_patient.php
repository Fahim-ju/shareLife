<?php
include("connection.php");
error_reporting(0);
?>


<html>
<head>
</head>
<body bgcolor="91C2D5">
<br><br><br>
<p align="center"> <img src="patient_icon.png" height = "200" width="300"> </p>
<table border="1" bgcolor="FFF99E" align="center" width="450">
<caption> <big> <b>Patient's Information<b> </big> </caption>

<form action="" method="GET">
<tr> <th align="left"> NAME </th> <td> <input size = "40" type = "text" name = "name" value = ""/> </td> </tr>
<tr> <th align="left"> BLOOD GROUP </th> <td> <input size = "40" type = "text" name = "blood_group" value = ""/> </td> </tr>
<tr> <th align="left"> PHONE </th> <td> <input size = "40" type = "text" name = "phone" value = ""/> </td> </tr>
<tr> <th align="left"> CAUSE </th> <td> <input size = "40" type = "text" name = "cs" value = ""/> </td> </tr>
<tr> <th align="left"> MEDICAL </th> <td> <input size = "40" type = "text" name = "md" value = ""/> </td> </tr>

<tr> <td align="center"> <input type = "submit" name="submit" value="Submit"/> </td> <td align="center"> <input type = "submit" name="display" value="Display"/> </td> </tr>
</form>
</table>
<br><br><br> 
<?php
if($_GET['submit'])
{
	$nm = $_GET['name'];
	$cse = $_GET['cs'];
	$bg = $_GET['blood_group'];
	$phn = $_GET['phone'];
	$medi = $_GET['md'];
	if($nm!="" && $cse!="" && $bg!="" && $phn != "" && $medi != "")
	{
		$query1 = "INSERT INTO patient VALUES('$nm','$bg','$phn','$cse','$medi')";
		$work1 = mysqli_query($conn,$query1);
		if($work1)
		{
			echo "Data Submitted";
		}
		else 
		{
			echo "Submission Failed";
		}
	}
	else 
	{
		echo "All fields are required";
	}
}
else if($_GET['display'])
{
	$query = "select * from patient";
	$work = mysqli_query($conn,$query);
	$total = mysqli_num_rows($work);
	if($total!=0)
	{
		?>
		<html>
		<body>
		<br><br>
		<table border="1" align = "center" bgcolor="B6EDAD" width="450">
		<caption> <big> <b> All Patient's Info. </b> </big> </caption>
				<tr>
					<th>NAME</th>
					<th>BLOOD GROUP</th>
					<th>PHONE</th>
					<th>DISEASES</th>
					<th>HOSPITAL</th>
				 </tr>
		<?php
		while($result = mysqli_fetch_assoc($work))
		{
			echo "<tr>
					<td> ".$result['patient_name']."</td>
					<td>".$result['patient_blood_group']." </td>
					<td> ".$result['patient_phone']."</td>
					<td> ".$result['patient_cause']."</td>
					<td> ".$result['patient_medical']."</td>
				 </tr>";
		}
	}
	else 
	{
		echo "NO Data Found"."<br>";
	}
}

?>

</body>
</html>
<p align="center" >
<big>
<li> <a href="login_success.php"> <b><font style="color:purple"> Go to Homepage </font> </b> </a> </li>
<br><li> <a href="insert.php"> <b><font style="color:purple"> Insert Donor's Info.</font> </b> </a> </li>
<br><li> <a href="insert_volunteer.php"> <b><font style="color:purple"> Insert Volunteer's Info. </font> </b> </a> </li>
</big></p>
</body>
</html>