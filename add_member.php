<?php

	session_start();
	$_SESSION['form_validation_err'] = 0;
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>TCD Horse Racing</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
 
<div class = "topnav">
<a> TCD Horse Racing Society</ab>
<a class="active" href = "Home.php">Home</a>
<a  href = "eventList.php">Events</a>
<a  href = "login.php">Log-In</a>
<a  href = "logout.php">Log-Out</a>
</div>
    

<form method="post" style="height: 379px" action="member_db.php">

<h2>Add Member</h2>

<?php
	if($_SESSION['form_validation_err']==1){
		echo "There was an error in your previous form, ensure you follow the field requirements";
	}
?>

<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Name</td>
		<td style="width: 253px">
			<input name="Name" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Student Number</td>
		<td style="width: 253px">
			<input name="Student_Number" type="text" maxlength = "8" pattern = '[0-9]+' required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Course</td>
		<td style="width: 253px">
			<input name="Course" type="text" required/>
		</td>
	</tr>

	<tr>
		<td style="width: 130px">Year</td>
		<td style="width: 253px">
			<select name="Year" style="width: 142px; height: 26px" required>
			<option></option>
			<option value="JF">JF</option>
			<option value="SF">SF</option>
			<option value="JS">JS</option>
			<option value="SS">SS</option>
			<option value="PG">PG</option>
			</select></td>
	</tr>

	<tr>
		<td style="width: 130px">Email</td>
		<td style="width: 253px">
			<input name="Email" type="email" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Member Type</td>
		<td style="width: 253px">
			<select name="Member_Type" style="width: 142px; height: 26px" required>
			<option></option>
			<option value="0">Ordinary</option>
			<option value="1">Committee</option>
			</select></td>
    </tr>
	
</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	</form>


</body>

</html>
