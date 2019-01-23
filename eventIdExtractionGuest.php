<form type = "hidden" action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <input type = "hidden" name = "eventID" value = "<?php echo $row['eventID']; ?>">
        <br>
        <button type = "submit" name = "GUEST" >Show Guestlist</button>
</form>

