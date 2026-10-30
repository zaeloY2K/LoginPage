```php
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "user_db"; // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed.");
}

?>
```