<?php

// Select user account
// Verify password is correct
// password_hash($password, $hash);

include("../includes/connect.php");
session_start ();

if(isset($_REQUEST['username'])) {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    // Select user -- get id
    $sql = "SELECT * FROM [USER].[USER] WHERE USERNAME_TXT='$username' AND PASSWORD='$password'";

    $stmt = sqlsrv_query($conn, $sql);
    $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

    //$rows = $result->numRows();

    if ($result !== null) {
        echo "</br>" . "Logged in";
        $_SESSION["login"]="1"; // SET = TO USER ID
        header("location:../index.php");
        // switch page
    } else {
        echo "</br>" . "Invalid username or password";
    }


}

?>