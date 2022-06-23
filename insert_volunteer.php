<?php
include("connection.php");
error_reporting(0);
?>


<html>
<head>
</head>
<body bgcolor="91C2D5">
<br><br><br>
<p align="center"> <img src="volunteer_icon.png" height = "200" width="300"> </p>
<table border="1"  align="center" bgcolor="FFF99E" width="450">
<caption> <big> <b>Volunteer's Information<b> </big> </caption>

<form action="" method="GET">
<tr> <th align="left"> NAME </th> <td> <input size = "50" type = "text" name = "name" value = ""/> </td> </tr>
<tr> <th align="left">  ID </th> <td> <input size = "50" type = "text" name = "id" value = ""/> </td> </tr>
<tr> <th align="left"> PHONE </th> <td> <input size = "50" type = "text" name = "phone" value = ""/> </td> </tr>

<tr> <td align="center"> <input type = "submit" name="submit" value="Submit"/> </td> <td align="center"> <input type = "submit" name="display" value="Display"/> </td> </tr>
</form>
</table>
<br><br><br> 
<?php
if($_GET['submit'])
{
	$nm = $_GET['name'];
	$phn = $_GET['phone'];
	$idd = $_GET['id'];
	if($nm!=""  && $phn != "" && $idd != "")
	{
		$query1 = "INSERT INTO volunteer VALUES('$nm','$idd','$phn')";
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
	$query = "select * from volunteer";
	$work = mysqli_query($conn,$query);
	$total = mysqli_num_rows($work);
	if($total!=0)
	{
		?>
		<html>
		<body>
		<br><br>
		<table border="1" align = "center" bgcolor="B6EDAD" width="450">
		<caption> <big> <b> All Volunteer's Info. </b> </big> </caption>
				<tr>
					<th>NAME</th>
					<th>ID</th>
					<th>PHONE</th>
				 </tr>
		<?php
		while($result = mysqli_fetch_assoc($work))
		{
			echo "<tr>
					<td> ".$result['volunteer_name']."</td>
					<td> ".$result['volunteer_id']."</td>
					<td> ".$result['volunteer_phone']."</td>
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
</body>
</html>

<html>
	<body>
		<ul>
		<big>
			<li> <a href="login_success.php"> <b><font style="color:purple"> Homepage </font> </b> </a> </li>
			<br><li> <a href="insert.php"> <b><font style="color:purple"> Insert Donor's Info. </font> </b> </a> </li>
			<br><li> <a href="insert_patient.php"> <b><font style="color:purple"> Insert Patient's Info.</font> </b> </a> </li>
		</big></ul>
	</body>
</html>