<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Unset all session variables 
$_SESSION = array();


session_destroy();


header("Location: /dse/C-W/Advertising-Website/public/index.php");
exit;
?>