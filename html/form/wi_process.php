<?php

// if (($name == "") && ($email == "") && ($comments == "")) {
//	header("Location: wi_contact.html");
//	exit;
// }


$msg = "Contact Information:\n";
$msg .= "Name:                 $name\n";
$msg .= "Email:                $email\n";
$msg .= "Phone:                $phone\n";
$msg .= "Wedding Date:         $wedDate\n";
$msg .= "Quantity:             $quantity\n";
$msg .= "Mailing Date:         $mailDate\n";
$msg .= "State:                $state\n\n";

$msg .= "I need interrobang to:\n";
$msg .= "Design & Print:      $designPrint\n\n";

$msg .= "I have a design or designer:\n";
$msg .= "I just need printing: $print\n";
$msg .= "I'll supply files:    $supplyFiles\n";
$msg .= "File upload:          $file\n";
$msg .= "I'll supply paper:    $supplyPaper\n";
$msg .= "Pantone Color:        $pantone\n\n";

$msg .= "Elements in the Package:\n";
$msg .= "Outside Envelope:     $outsideEnv\n";
$msg .= "Printed:              $outsideEnvPrinted\n";
$msg .= "Inside Envelope:      $insideEnv\n";
$msg .= "Ornament on Inside:   $insideEnvOrnament\n";
$msg .= "Invitation:           $invitation\n";
$msg .= "RSVP Envelope:        $rsvpEnv\n";
$msg .= "RSVP Address:         $rsvpEnvAddress\n";
$msg .= "RSVP:                 $rsvp\n";
$msg .= "Program:              $program\n";
$msg .= "Menu:                 $menu\n";
$msg .= "Placecards:           $placecards\n";
$msg .= "Announcement Env:     $announcementEnv\n";
$msg .= "Announce Env Addr:    $announceEnvAddress\n";
$msg .= "Announce:             $announcement\n";
$msg .= "Map:                  $map\n";
$msg .= "Other:                $other\n";
$msg .= "Other:                $other2\n";
$msg .= "Comments:             $comments\n\n";


$to = "mjb@interrobangletterpress.com";
$subject = "Wedding Invitation Inquiry";
$mailheaders = "From: $name\n";
$mailheaders .= "Reply-To: $email\n\n";

mail($to, $subject, $msg, $mailheaders);

header ("Location: contact_thanks.html");
exit;
?>