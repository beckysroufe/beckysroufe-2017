<?php

$EmailFrom = "becky@beckysroufe.com";
$EmailTo = "becky@beckysroufe.com";
$Subject = "You've received a message from beckysroufe.com!";
$Name = Trim(stripslashes($_POST['firstName']));
$Phone = Trim(stripslashes($_POST['phoneNumber'])); 
$Email = Trim(stripslashes($_POST['emailAddress'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>