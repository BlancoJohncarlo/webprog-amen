<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Send password reset email to the user
        // Implement your email sending logic here
        echo "Password reset email sent";
    } else {
        // Email not found in the database
        echo "Email not found";
    }
}

// ... CRUD functions and other functions go here ...

?>
