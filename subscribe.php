<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "admin@bezzietech.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "http://bezzietech.com/comingsoon/";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
<html>
    <body>
        <form method="POST" action="">
<p>Name: <input type="text" name="Name" size="20"></p>
<p>Email: <input type="text" name="Email" size="20"></p>
<p><input type="submit" value="Submit" name="Submit"></p>
</form>
    </body>
</html>