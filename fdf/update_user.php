<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["user_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Update the user in the database
    $sql = "UPDATE system_users SET username = '$username', password = '$password', email = '$email' WHERE id = $userId";
    if ($conn->query($sql) === TRUE) {
        // User updated successfully
        echo "User updated successfully";
    } else {
        // Error updating user
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
