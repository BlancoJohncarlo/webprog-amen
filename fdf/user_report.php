<?php

// ... Database configuration and connection code ...

// Fetch the user report data from the database
$sql = "SELECT * FROM system_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the user report
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        // Display other user details as needed
        echo "<br>";
    }
} else {
    // No users found
    echo "No users found";
}

// ... Other code and functions go here ...

?>
