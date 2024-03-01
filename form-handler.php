<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_Contact_Number = $_POST['mobile'];
$no_of_adults = $_POST['adult'];
$no_of_children = $_POST['children'];
$check_in = $_POST['checkin'];
$check_out = $_POST['checkout'];
$short_term_long_long = $_POST['term'];
$Message = $_POST['message'];



$email_from = 'noreply@naprentals.com';


$email_subject = 'New Enquiry';

$email_body = "User name: $name.\n".
"User Email: $visitor_email.\n".
"User Contact Number: $visitor_Contact_Number.\n".
"Number of Adults: $no_of_adults.\n".
"Number of Children: $no_of_children.\n".
"Check-in Date: $check_in.\n".
"Check-out Date: $check_out.\n".
"Short term or Long Term: $short_term_long_long.\n".
"Message: $Message.\n";

$to = 'novaarafapalace@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html")



?>