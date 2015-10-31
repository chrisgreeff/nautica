<?php
  $isSuccess = false;

  if (!empty($_POST)) {

    $to = "kalemhall@gmail.com";
    $subject = "This is an Enquiery";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Nautica Shipping  <noreply@nauticashipping.co.nz>' . "\r\n";
    $headers .= 'Bcc: kalemhall@gmail.com' . "\r\n";

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr><td><strong>First Name</strong></td><td>" . strip_tags($_POST['firstname']) . "</td></tr>";
    $message .= "<tr><td><strong>Last Name</strong></td><td>" . strip_tags($_POST['lastname']) . "</td></tr>";
    $message .= "<tr><td><strong>Phone Number</strong></td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    $message .= "<tr><td><strong>Email Address</strong></td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "<tr><td><strong>Message</strong></td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $isSuccess = mail($to, $subject, $message, $headers);
  }
?>

<html>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <div align="center">
            <?php if ($isSuccess): ?>
              Thank You. Your Information Has Been Submitted.
            <?php else: ?>
              An error has occurred, please try again.
            <?php endif ?>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>
