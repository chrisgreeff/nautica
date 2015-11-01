<?php

$EmailFrom = "chriscoyier@gmail.com";
$EmailTo = "CHANGE-THIS@YOUR-DOMAIN.com";
$Subject = "New enquirey on the Nautica site";
$Firstname = Trim(stripslashes($_POST['Firstname']));
$Lastname = Trim(stripslashes($_POST['Lastname']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $Firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $Lastname;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Tel;
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
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
