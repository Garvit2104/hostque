<?php
define('DB_HOST', 'localhost');
// define('DB_PORT', '8080');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hostque');

// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($connection->connect_error) {
    die('Doatabase is not connected: ' . $connection->connect_error);
}

// echo 'Connected successfully';