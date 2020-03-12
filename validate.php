<?php

$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $_POST["userName"];
$email  = $_POST["userEmail"];
$subject = $_POST["subject"];
$message = $_POST["message"];



  if (empty($_POST["userName"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["userName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

  if (empty($_POST["userEmail"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["userEmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "Subject is required";
  } else {
    $message = test_input($_POST["message"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
