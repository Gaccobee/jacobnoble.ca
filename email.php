<?php
if (isset($_POST["saveForm"]))
$receiver = "Jacob.noble989@gmail.com";
$sender = $_POST["email_address"];
$sendersName = $_POST["fullName"];
// If this does not work when it goes live change the next line to $subject = "New form submission";
$subject = "New form submission from $sender";
$message = $_POST["emailMessage"];

mail($receiver, $subject, $message);
header('Location: home_updated.html');
die();
?>
