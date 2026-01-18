<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../../config/config.php';
// Unset all session variables 
$_SESSION = array();


session_destroy();



header("Location: " . URLROOT . "/index.php");
exit;
?>