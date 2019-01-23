<?PHP

include ("detail.php"); 

$Student_No = $_POST['Student_Number'];

$query = "select * from hrs_members where student_no =" . $Student_No;
$result = $db->query($query);
$num_rows= mysqli_num_rows($result);

session_start();

if($num_rows == 0){
	//Relink to sign up
	header('Location: add_member.php');
}else if($num_rows == 1){
	//Link to home
	header('Location: Home.php');
	$row = mysqli_fetch_assoc($result);
	$_SESSION['ses_name'] = $row['name'];
	$_SESSION['ses_memberID'] = $row['memberID'];
	$_SESSION['ses_memberType'] = $row['memberID'];

}else{
	//Error
}

?>
