<html>
<head>
</head>
<body bgcolor="91C2D5">
<br><br><br>
<table border="1"  align="center" bgcolor="FFF99E">
<caption> <big> <b>LOGIN<b> </big> </caption>
<form action="" method="GET">
<tr> <th align="left"> NAME </th> <td> <input type = "text" name = "name" value = ""/> </td> </tr>
<tr> <th align="left">  PASSWORD </th> <td> <input type = "text" name = "pass" value = ""/> </td> </tr>
<tr> <td colspan="2" align="center"> <input style="background-color:grey;color:yellow;width:90px" type = "submit" name="submit" value="Login"/> </td> </tr>
</form>
</table>

<?php
error_reporting(0);
if($_GET['submit'])
{
	$user = $_GET['name'];
	$pass = $_GET['pass'];
	if($user == "admin" && $pass == "password")
	{
		echo "Login Successful<br>";
		header( "Location: login_success.php" ); die;
	}
	else 
	{
		?>
		<html>
		<body>
	 <p align="center"> <br> <b>INCORRECT LOGIN!!! TRY AGAIN.</b> </p>";
	 <?php
	}
}
?>
</body>
</html>
