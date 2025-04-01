<?php
session_start();

// Unset the specific session variable
unset($_SESSION["sidx"]);

// Destroy the entire session if needed
// session_destroy();

header('Location: index.php');
exit();
?>
