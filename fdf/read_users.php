<?php

// ... Database configuration and connection code ...

// Fetch the list of users from the database
$sql = "SELECT * FROM system_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the list of users
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br><br>";
    }
} else {
    // No users found
    echo "No users found";
}

// ... Other code and functions go here ...

?>
