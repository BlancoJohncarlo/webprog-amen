<?php

// ... Database configuration and connection code ...

// Check if the butterfly ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the butterfly from the database
    $sql = "DELETE FROM butterfly_list WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        // Butterfly deleted successfully
        echo "Butterfly deleted successfully";
    } else {
        // Error deleting butterfly
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Butterfly ID not provided
    echo "Butterfly ID not provided";
}

// ... Other code and functions go here ...

?>
