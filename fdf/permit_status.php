<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $permitId = $_POST["permit_id"];
    $status = $_POST["status"];

    // Update the status of the permit application
    $sql = "UPDATE permit_applications SET status = '$status' WHERE permit_id = $permitId";
    if ($conn->query($sql) === TRUE) {
        // Status updated successfully
        echo "Status updated successfully";
    } else {
        // Error updating status
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
