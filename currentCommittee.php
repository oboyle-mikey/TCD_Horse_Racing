<?php

    session_start();
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<style>
    body {margin: 0;}
    
    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav ab {
        text-align: center;
        font-size: 20px;
    }
</style>
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

<h2>List of Committee Members</h2>

<?php

include("detail.php");

$query = "select * from hrs_members where member_type = 1";
$result = $db->query($query);
$num_committee = mysqli_num_rows($result);

for($i = 0; $i<$num_committee; $i++){
    $row = mysqli_fetch_assoc($result);
    echo ($row['name']);
    echo ('<p> </p>');
}

mysqli_close($db);
?>

</body>

</html>