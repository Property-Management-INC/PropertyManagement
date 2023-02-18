<?php
// Lines 0 - 41 written by William Hilton
// The insertUser file inserts a new user account into the database with a secure password hash

// Insert new user account
include("../includes/connect.php");
echo print_r($_POST,true);
// Get data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get user input
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  //echo "</br>";
  //echo $username;
  //echo "</br>";
  //echo $password;
  //echo "</br>";
  //echo $email;

  // Encrypt password
  $password = password_hash($password, PASSWORD_DEFAULT);
  echo $password;

  // Insert into database
  $sql = "INSERT INTO [USER].[USER] (POSTCODE, USERNAME_TXT, FIRST_NAME_TXT, LAST_NAME_TXT, STREET_ADDRESS_TXT, CITY, STATE, PASSWORD, EMAIL_ADDRESS_TXT, IS_ADMIN, IS_ACTIVE)
  VALUES (12345, '$username', 'John', 'Doe', '2398 RANDOM RD', 'NY', 'NY', '$password', 'johnDoe@gmail.com', 0, 1)";

  $stmt = sqlsrv_prepare($conn, $sql);

  if (sqlsrv_execute($stmt) === false) {
    echo "failed";
  } else {
    echo "new record created";
  }
  
}

// automatically log user in after creating new account

?>