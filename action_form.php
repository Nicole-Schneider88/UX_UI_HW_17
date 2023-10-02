<?php
// define variables and set to empty values
$firstname = $lastname = $email = $phonenumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["First Name"]);
  $lastname = test_input($_POST["Last Name"]);
  $email = test_input($_POST["Email"]);
  $phonenumber = test_input($_POST["Phone Number (Optional)"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  
  return $data;
}
?>




