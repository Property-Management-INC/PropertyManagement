<?php
// Lines 0 - 8 written by William Hilton
// Ends the current user session after logging out of account

// Logs user out of current session
session_start ();
session_destroy();
header("location:index.php")
?>