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
    <a  class = 'active' href = "Home.php">Log-In</a>
    <a  href = "eventList.php">Events</a>
    <?php 
        if($_SESSION['ses_memberType']==1){
            echo '<a  href = "committee.php">Committee</a>';
        }
    ?>
    <a  href = "login.php">Log-In</a>
    <a  href = "logout.php">Log-Out</a>
</div>

&nbsp;
&nbsp;

<h2>The Total Membership Revenue</h2>

<?php
    include("detail.php");

    $query = "select sum(fee) from hrs_members";
    $result = $db->query($query);
    $row = mysqli_fetch_assoc($result);
    //Fetch and display result for calculated field

    echo 'The total fee from membership is €' . $row['sum(fee)'];
?>

</body>