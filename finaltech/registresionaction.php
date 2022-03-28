<?php
// define variables and set to empty values
 $email = $pass ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $email = test_input($_POST["email"]);
  $pass = test_input($_POST["password"]);


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $email = "Invalid email format";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $pass = "Invalid email format";
}
?>