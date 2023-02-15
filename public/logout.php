<?php
// Logs user out of current session
session_start ();
session_destroy();
header("location:index.php")
?>