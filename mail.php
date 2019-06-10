<?php
$name = $_POST['customerName'];
$hotel = $_POST['customerHotel'];
$mobile = $_POST['customerMobile'];
$duration = $_POST['customerDuration'];

$formcontent=" From: $name \n Hotel: $hotel \n Phone Number: $mobile \n duration: $duration;
$recipient = "myonchev99@gmail.com";
$subject = "Boat Booking";
$mailheader = "Booking From: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://highwaywebconsulting.com' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
