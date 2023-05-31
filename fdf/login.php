<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password against the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful";
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

// ... CRUD functions and other functions go here ...

?>
