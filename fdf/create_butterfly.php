<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $speciesType = $_POST["species_type"];
    $className = $_POST["class_name"];
    $familyName = $_POST["family_name"];
    $commonName = $_POST["common_name"];
    $scientificName = $_POST["scientific_name"];
    $description = $_POST["description"];

    // Insert the new butterfly into the database
    $sql = "INSERT INTO butterfly_list (species_type, class_name, family_name, common_name, scientific_name, description) VALUES ('$speciesType', '$className', '$familyName', '$commonName', '$scientificName', '$description')";
    if ($conn->query($sql) === TRUE) {
        // Butterfly added successfully
        echo "Butterfly added successfully";
    } else {
        // Error adding butterfly
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
