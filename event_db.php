<?PHP

include ("detail.php"); 

session_start();

include ("detail.php"); 

if(empty($_POST['Name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Name = test_input($_POST['Name']);
}
if(empty($_POST['Description'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Description = test_input($_POST['Description']);
}
if(empty($_POST['Date'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Date = test_input($_POST['Date']);
}
if(empty($_POST['Location'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Location = test_input($_POST['Location']);
}
if(empty($_POST['Capacity']) || !filter_var($_SESSION['Email'], FILTER_VALIDATE_EMAIL)){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Capacity = test_input($_POST['Capacity']);
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO hrs_events (";
	$q .= "event_name, event_description, event_date, event_venue, event_capacity";
	$q .= ") VALUES (";
	$q .= "'$Name', '$Description', '$Date', '$Location', '$Capacity')";

	$result = $db->query($q);

}else{
	header('Location: add_event.php');
}

?>
<script language="javascript">	

	document.location.replace("eventList.php");

</script>


