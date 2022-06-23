<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body bgcolor="91C2D5">
<p align="center" > <img src="donor_icon.png" height = "200" width="300"> </p>
<table border="1" bgcolor="FFF99E" align="center" width="450">
<caption> <big> <b>Donor's Information<b> </big> </caption>
<form action="" method="GET">
<tr> <th align="left"> ID </th> <td> <input size = "40" type = "text" name = "id" value = ""/> </td> </tr>
<tr> <th align="left"> NAME </th> <td> <input size = "40" type = "text" name = "name" value = ""/> </td> </tr>
<tr> <th align="left"> BLOOD GROUP </th> <td> <input size = "40" type = "text" name = "blood_group" value = ""/> </td> </tr>
<tr> <th align="left"> PHONE </th> <td> <input size = "40" type = "text" name = "phone" value = ""/> </td> </tr>

<tr> <td align="center"> <input type = "submit" name="submit" value="Submit"/> </td> <td align="center"> <input type = "submit" name="display" value="Display"/></td> </tr>
</form>
</table>
<br><br><br>
<?php
if($_GET['submit'])
{
	$nm = $_GET['name'];
	$idd = $_GET['id'];
	$bg = $_GET['blood_group'];
	$phn = $_GET['phone'];
	if($nm!="" && $idd!="" && $bg!="" && $phn != "")
	{
		$query = "INSERT INTO donor VALUES('$idd','$nm','$bg','$phn')";
		$work = mysqli_query($conn,$query);
		if($work)
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
	$query = "select * from donor";
	$work = mysqli_query($conn,$query);
	$total = mysqli_num_rows($work);
	if($total!=0)
	{
		?>
		<html>
		<body>
		<br><br>
		<table border="1" align = "center" bgcolor="B6EDAD" width="450">
		<caption> </big> <b> All Donor's Info. </b> </big> </caption>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>BLOOD GROUP</th>
					<th>PHONE</th>
				 </tr>
		<?php
		while($result = mysqli_fetch_assoc($work))
		{
			echo "<tr>
					<td>".$result['donor_id']."</td>
					<td> ".$result['donor_name']."</td>
					<td>".$result['donor_blood_group']." </td>
					<td> ".$result['donor_phone']."</td>
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
<p align="center">
<big>
 <a href="login_success.php"> <b><font style="color:purple"> Go To Homepage </font> </b> </a> 
</p>  <p align="center"> <a href="insert_patient.php"> <b><font style="color:purple"> Insert Patient's Info.</font> </b> </a> 
<br> <a href="insert_volunteer.php"> <b><font style="color:purple"> Insert Volunteer's Info. </font> </b> </a> 
</big></p>
</body>
</html>
