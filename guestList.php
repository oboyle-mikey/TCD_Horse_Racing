<?php
    session_start();
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

<h2>List of Guests for the Event</h2>

<?php

    $event_id = $_SESSION['ses_eventID'];
    $member_id = $_SESSION['ses_memberID'];

    //Inner Join Query on Event ID

    include("detail.php");

    $query = "select event_name, name from hrs_events, hrs_members where hrs_events.eventID =". $_SESSION['ses_eventID'];
    $result = $db->query($query);
    $num_committee = mysqli_num_rows($result);

    for($i = 0; $i<$num_committee; $i++){
        $row = mysqli_fetch_assoc($result);
        echo ($row['name']) . ($row['event_name']);
        echo ('<p> </p>');
    }

    mysqli_close($db);

    unset($_SESSION['ses_eventID']);
?>

<body>