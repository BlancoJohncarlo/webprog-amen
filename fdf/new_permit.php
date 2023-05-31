<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $transportToAddress = $_POST["transport_to_address"];
    $modeOfTransport = $_POST["mode_of_transport"];
    $dateOfTransport = $_POST["date_of_transport"];
    $purpose = $_POST["purpose"];
    $butterflyDetails = $_POST["butterfly_details"];

    // Handle file uploads
    $wfpDocs = $_FILES["wfp_docs"]["name"];
    $wcpDocs = $_FILES["wcp_docs"]["name"];
    // Upload the files to a directory on the server
    move_uploaded_file($_FILES["wfp_docs"]["tmp_name"], "uploads/" . $wfpDocs);
    move_uploaded_file($_FILES["wcp_docs"]["tmp_name"], "uploads/" . $wcpDocs);

    // Insert the new permit application into the database
    $sql = "INSERT INTO permit_applications (name, address, transport_to_address, mode_of_transport, date_of_transport, purpose, butterfly_details, wfp_docs, wcp_docs) VALUES ('$name', '$address', '$transportToAddress', '$modeOfTransport', '$dateOfTransport', '$purpose', '$butterflyDetails', '$wfpDocs', '$wcpDocs')";
    if ($conn->query($sql) === TRUE) {
        // Permit application submitted successfully
        echo "Permit application submitted successfully";
    } else {
        // Error submitting permit application
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ... Other code and functions go here ...

?>