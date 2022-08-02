<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$product = $_POST['product'];
$message = $_POST['message'];
$email_form = 'aniltextiles2020@gmail.com';
$email_subject = 'new form submission';
$email_body = "User Name: $name.\n".
              "User email: $visitor_email.\n".
              "product: $product.\n".
              "User message: $message.\n".;
$to = 'guptapalak2001@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")


?>