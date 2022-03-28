<?php 
$_SERVER ="localhost";
$username= "root";
$pass= "";
$dbname ="finaldata";

$conn = new mysqli($servername, $username, $password,$dbname);
var_dump();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
  $sql = "INSERT INTO reg_urs (email , psw);
VALUES ('john@example.com','123');

if ($conn->query($sql) === TRUE) {
  echo "successfully done";
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
