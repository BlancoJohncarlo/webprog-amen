<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $permitId = $_POST["permit_id"];
    $confirmationCode = $_POST["confirmation_code"];

    // Update the status of the permit application to "Used" if the confirmation code is valid
    $sql = "SELECT * FROM permit_applications WHERE permit_id = $permitId AND confirmation_code = '$confirmationCode'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $updateSql = "UPDATE permit_applications SET status = 'Used' WHERE permit_id = $permitId";
        if ($conn->query($updateSql) === TRUE) {
            // Permit marked as used successfully
            echo "Permit marked as used successfully";
        } else {
            // Error updating permit status
            echo "Error: " . $updateSql . "<br>" . $conn->error;
        }
    } else {
        // Invalid confirmation code
        echo "Invalid confirmation code";
    }
}

// ... Other code and functions go here ...

?>
