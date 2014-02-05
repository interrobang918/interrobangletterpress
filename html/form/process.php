<?php

// if (($name == "") && ($email == "") && ($comments == "")) {
//	header("Location: contact.html");
//	exit;
// }


$msg = "Contact Information:\n";
$msg .= "Name:       $name\n";
$msg .= "Address 1:  $address1\n";
$msg .= "Address 2:  $address2\n";
$msg .= "City:       $city\n";
$msg .= "State:      $state\n";
$msg .= "Zip:        $zip\n";
$msg .= "Phone:      $phone\n";
$msg .= "Fax:        $fax\n";
$msg .= "E-Mail:     $email\n";
$msg .= "Comments:   $comments\n\n";

$to = "mjb@interrobangletterpress.com";
$subject = "interrobang : Contact Form";
$mailheaders = "From: $email\n";
$mailheaders .= "Reply-To: $email\n\n";

mail($to, $subject, $msg, $mailheaders);

header ("Location: contact_thanks.html");
exit;
?>