<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "phpUser");
    define("DB_PASS", "password");
    define("DB_NAME", "php_feedback");
    
    // Create connection to DB.
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306);

    // Check connection to DB.
    if($connection->connect_error) {
        die("Connection to MySQL failed: " . $connection->connect_error);
    }

    // echo "Connected to MySQL";
?>
