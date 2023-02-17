<?php
// Lines 0 - 13 written by William Hilton
$serverName = "DESKTOP-PEPJQC4";
$dbName = "CAPSTONE_ADVERTISEMENT";
$connectionInfo = array( "Database"=>"CAPSTONE_ADVERTISEMENT");
// Connect using Windows Authentication
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if (!$conn) {
     die("Connection failed");
} 

?>