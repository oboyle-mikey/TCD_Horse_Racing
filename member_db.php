<?PHP

session_start();

include ("detail.php"); 

if(empty($_POST['Name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Name = test_input($_POST['Name']);
}
if(empty($_POST['Student_Number'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Student_Number = test_input($_POST['Student_Number']);
}
if(empty($_POST['Course'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Course = test_input($_POST['Course']);
}
if(empty($_POST['Year'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Year = test_input($_POST['Year']);
}
if(empty($_POST['Email']) || filter_var($_SESSION['Email'], FILTER_VALIDATE_EMAIL)){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Email = test_input($_POST['Email']);
}
if(empty($_POST['Member_Type'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$Member_Type = test_input($_POST['Member_Type']);
}

$Member_Fee;

if($Member_Type==0){
	$Member_Fee = 5;
}else{
	$Member_Fee = 3;
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO hrs_members (";
	$q .= "name, student_no, course, year, email, member_type, fee";
	$q .= ") VALUES (";
	$q .= "'$Name', '$Student_Number', '$Course', '$Year', '$Email', '$Member_Type', '$Member_Fee')";

	$result = $db->query($q);

	$_SESSION['ses_name'] = $Name;
	$_SESSION['ses_memberID'] = 0;//
	$_SESSION['ses_memberType'] = $Member_Type;

	header('Location: Home.php');

	
}else{
	header('Location: add_member.php');
}





?>

