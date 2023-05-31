<?php

// ... Database configuration and connection code ...

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM system_users WHERE id = $userId";
    if ($conn->query($sql) === TRUE) {
        // User deleted successfully
        echo "User deleted successfully";
    } else {
        // Error deleting user
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
