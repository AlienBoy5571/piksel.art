<?php $name = $_POST['FNAME'];
$email = $_POST['EMAIL'];
$company = $_POST['COMPANY'];
$phone = $_POST['PHONE'];
$message = $_POST['MESSAGE'];
$formcontent="From: $name \n Message: $message";
$recipient = "emmanuelle@piksel.art";
$subject = "Website Job Board";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader, $company, $phone) or die("Error!");
echo "Thank You!";
?>
