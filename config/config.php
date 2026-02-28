<?php
// config/config.php

define('APP_NAME', 'Cirql');
define('APP_URL', 'http://localhost:8000'); // Update this based on the actual domain
define('CONTACT_EMAIL', 'hello@cirql.com'); // Where form submissions will go

// Basic settings for error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Session start for potential flash messages
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
