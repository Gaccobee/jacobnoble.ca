<?php
if (isset($_POST['submit']))

  $subject2 = $_POST["subject"];
  $message2 = $_POST["fname"] . " " . $_POST["lname"] . " wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . " This person's email is: " . $_POST["email"];
  $headers2 = "From: " . $_POST["email"];

// Won't send to outlook for some reason.
  mail("jacob@jacobnoble.ca",$subject2,$message2,$headers2);
//   echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//   $message2 = "Subject: " . $_POST["subject"] . "\n\n" . $_POST["fname"] . " " . $_POST["lname"] . " from " . $country . " wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . " This person's email is: " . $_POST["email"];
// Redirects to home page
header('Location: http://www.jacobnoble.ca') ;
?>
