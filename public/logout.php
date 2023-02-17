<?php
// Lines 0 - 8 written by William Hilton

// Logs user out of current session
session_start ();
session_destroy();
header("location:index.php")
?>