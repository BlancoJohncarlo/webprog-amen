<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Insert the new user into the database
    $sql = "INSERT INTO system_users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        // User added successfully
        echo "User added successfully";
    } else {
        // Error adding user
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
