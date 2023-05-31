<?php

// ... Database configuration and connection code ...

// Check if the butterfly ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the butterfly details from the database
    $sql = "SELECT * FROM butterfly_list WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $speciesType = $row['species_type'];
        $className = $row['class_name'];
        $familyName = $row['family_name'];
        $commonName = $row['common_name'];
        $scientificName = $row['scientific_name'];
        $description = $row['description'];
    } else {
        // Butterfly not found
        echo "Butterfly not found";
        exit();
    }
} else {
    // Butterfly ID not provided
    echo "Butterfly ID not provided";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $speciesType = $_POST["species_type"];
    $className = $_POST["class_name"];
    $familyName = $_POST["family_name"];
    $commonName = $_POST["common_name"];
    $scientificName = $_POST["scientific_name"];
    $description = $_POST["description"];

    // Update the butterfly in the database
    $sql = "UPDATE butterfly_list SET species_type = '$speciesType', class_name = '$className', family_name = '$familyName', common_name = '$commonName', scientific_name = '$scientificName', description = '$description' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        // Butterfly updated successfully
        echo "Butterfly updated successfully";
    } else {
        // Error updating butterfly
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>
