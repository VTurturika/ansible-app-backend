<?php

if(array_key_exists('email',$_GET)) {

  $email = $_GET['email'];
  $address = $_GET['address'];
  unset($_GET['email']);
  unset($_GET['address']);

  $message_body="Address = $address\nRequest params:\n";

  foreach ($_GET as $key=>$val) {

    $message_body .= "$key = $val\n";
  }

  mail($email, "Subject", $message_body);
}

header("Location: index.php");
die();
