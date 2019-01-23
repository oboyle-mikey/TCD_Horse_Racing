<?php
    session_start();
    echo $_SESSION['ses_eventID'];
    echo $_SESSION['ses_memberID'];

    include("detail.php");

    $event_id = $_SESSION['ses_eventID'];
    $member_id = $_SESSION['ses_memberID'];

    $query = "select memberID, eventID from hrs_reg where memberID = $member_id and eventID = $event_id";
    $result = $db->query($query);
    $num_results = mysqli_num_rows($result);

    if($num_results==0){
        $q  = "INSERT INTO hrs_reg (";
        $q .= "eventID, memberID";
        $q .= ") VALUES (";
        $q .= "'$event_id', '$member_id')";
    }
    $result = $db->query($q);

    unset($_SESSION['ses_eventID']);

    header('Location: Home.php');


?>