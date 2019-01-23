<?php

	session_start();
	$_SESSION['form_validation_err'] = 0;
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>TCD Horse Racing</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>

		<div class = "topnav">
				<a> TCD Horse Racing Society</ab>
				<a class="active" href = "Home.php">Home</a>
				<a  href = "eventList.php">Events</a>
				<?php 
        if($_SESSION['ses_memberType']==1){
            echo '<a  href = "committee.php">Committee</a>';
        }
    ?>
				<a  href = "login.php">Log-In</a>
				<a  href = "logout.php">Log-Out</a>
			</div>

<form method="post" style="height: 379px" action="event_db.php">

<h2>Add Event</h2>

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
		<td style="width: 130px">Description</td>
		<td style="width: 253px">
			&nbsp;<form method="post">
				<textarea cols="20" name="Description" rows="6" required></textarea></form></td>
	</tr>
	<tr>
		<td style="width: 130px">Date</td>
		<td style="width: 253px">
			<input name="Date" type="date" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Location</td>
		<td style="width: 253px">
			<input name="Location" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Capacity</td>
		<td style="width: 253px">
			<input name="Capacity" type="text" pattern = '[0-9]+' required/></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>
