<?php
session_start();

// Unset the specific session variable
unset($_SESSION["fidx"]);

// Destroy all session data (optional, if you want a full logout)
session_destroy();

// Redirect to index.php
header('Location: index.php');
exit(); // Ensure script execution stops after redirection
?>
