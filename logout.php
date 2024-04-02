<?php
// Start the session
session_start();
require_once 'config.php';

// Destroy the session
session_destroy();
header('Location: footer.php' );