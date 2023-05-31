<?php

// ... Database configuration and connection code ...

// Fetch the permit report data from the database
$sql = "SELECT * FROM permit_applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the permit report
    while ($row = $result->fetch_assoc()) {
        echo "Permit ID: " . $row["permit_id"] . "<br>";
        echo "Bus Name: " . $row["bus_name"] . "<br>";
        echo "Owner Name: " . $row["owner_name"] . "<br>";
        // Display other permit details as needed
        echo "<br>";
    }
} else {
    // No permits found
    echo "No permits found";
}

// ... Other code and functions go here ...

?>
