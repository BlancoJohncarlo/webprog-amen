<?php

// ... Database configuration and connection code ...

// Fetch the butterfly report data from the database
$sql = "SELECT * FROM butterfly_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the butterfly report
    while ($row = $result->fetch_assoc()) {
        echo "Species Type: " . $row["species_type"] . "<br>";
        echo "Class Name: " . $row["class_name"] . "<br>";
        echo "Family Name: " . $row["family_name"] . "<br>";
        // Display other butterfly details as needed
        echo "<br>";
    }
} else {
    // No butterflies found
    echo "No butterflies found";
}

// ... Other code and functions go here ...

?>
