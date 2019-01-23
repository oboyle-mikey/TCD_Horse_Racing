<?php

    session_start();

    if(isset($_POST['RSVP'])){
        $_SESSION['ses_eventID'] = $_POST['eventID'];
        header("Location: register_db.php");
    }elseif(isset($_POST['GUEST'])){
        $_SESSION['ses_eventID'] = $_POST['eventID'];
        header("Location: guestList.php");
    }
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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

<h2>List of Planned Events</h2>

<?php

echo "<br>";


include("detail.php");

$query = "select * from hrs_events";
$result = $db->query($query);
$num_committee = mysqli_num_rows($result);

echo '<table style="width: 28%; height: 100px">';
for($i = 0; $i<$num_committee; $i++){
    $row = mysqli_fetch_assoc($result);
    echo "Name:" . "\t" . ($row['event_name']) . "<br>";
    echo "Description:" . ($row['event_description']) . "<br>";
    echo "Date:" . ($row['event_date']) . "<br>";
    echo "Venue:" . ($row['event_venue']) . "<br>";
    include("eventIdExtraction.php");
    include("eventIdExtractionGuest.php");
    echo ('<p> </p>');
}
echo '</table>';

mysqli_close($db);
?>

</body>

</html>








