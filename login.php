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
    <a class="active" href = "Home_Login.php">Home</a>
    <a  href = "login.php">Log-In</a>
</div>

&nbsp;



<form method="post" style="height: 100px" action="loginCheck.php">

<h2>Enter Your Login Details</h2>

   <table style="width: 28%; height: 100px">
        <tr>
            <td style="width: 130px">Student Number</td>
            <td style="width: 253px">
                <input name="Student_Number" type="text" required/></td>
        </tr>
    </table>
    
    
        <input name="Button1" type="submit" value="Log-In" />
        <input name="Button2" type="reset" value="Reset" />
        <h2>Sign Up</h2>
        <a id = 'href-link-button' href = add_member.php>Sign Up</pSign></a>
</form>

</body>

</html>