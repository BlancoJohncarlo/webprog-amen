<?php

// Database configuration
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType = $_POST["form_type"];

    // Process the form based on the form type
    if ($formType == "wildlife_farm_permit") {
        // Wildlife Farm Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        // Extract other fields for the Wildlife Farm Permit

        // Call createWildlifeFarmPermit() function with the form data
        $result = createWildlifeFarmPermit($permitNo /* Add other form fields here */);

        // Output the result
        echo $result;
    } elseif ($formType == "wildlife_collectors_permit") {
        // Wildlife Collector's Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        // Extract other fields for the Wildlife Collector's Permit

        // Call createWildlifeCollectorsPermit() function with the form data
        $result = createWildlifeCollectorsPermit($permitNo /* Add other form fields here */);

        // Output the result
        echo $result;
    } elseif ($formType == "account_registration") {
        // Account Registration form submitted

        // Extract form data
        $username = $_POST["username"];
        // Extract other fields for Account Registration

        // Call createUserAccount() function with the form data
        $result = createUserAccount($username /* Add other form fields here */);

        // Output the result
        echo $result;
    } else {
        echo "Invalid form type";
    }
}

// Close the database connection
$conn->close();

// CRUD functions and other functions go here (same functions as mentioned in the previous code example)


// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType = $_POST["form_type"];

    // Process the form based on the form type
    if ($formType == "wildlife_farm_permit") {
        // Wildlife Farm Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        $busName = $_POST["bus_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $dateIssue = $_POST["date_issue"];
        $expirationDate = $_POST["expiration_date"];
        $certificate = $_POST["certificate"];

        // Call createWildlifeFarmPermit() function with the form data
        $result = createWildlifeFarmPermit($permitNo, $busName, $ownerName, $address, $dateIssue, $expirationDate, $certificate);

        // Output the result
        echo $result;
    } elseif ($formType == "wildlife_collectors_permit") {
        // Wildlife Collector's Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        $busName = $_POST["bus_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $dateIssue = $_POST["date_issue"];
        $expirationDate = $_POST["expiration_date"];
        $certificate = $_POST["certificate"];

        // Call createWildlifeCollectorsPermit() function with the form data
        $result = createWildlifeCollectorsPermit($permitNo, $busName, $ownerName, $address, $dateIssue, $expirationDate, $certificate);

        // Output the result
        echo $result;
    } elseif ($formType == "account_registration") {
        // Account Registration form submitted

        // Extract form data
        $username = $_POST["username"];
        $businessName = $_POST["business_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $contactNumber = $_POST["contact_number"];
        $emailAddress = $_POST["email_address"];

        // Call createUserAccount() function with the form data
        $result = createUserAccount($username, $businessName, $ownerName, $address, $contactNumber, $emailAddress);

        // Output the result
        echo $result;
    } else {
        echo "Invalid form type";
    }
}

// ... CRUD functions and other functions go here ...




?>






<?php

// Database configuration
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType = $_POST["form_type"];

    // Process the form based on the form type
    if ($formType == "wildlife_farm_permit") {
        // Wildlife Farm Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        // Extract other fields for the Wildlife Farm Permit

        // Call createWildlifeFarmPermit() function with the form data
        $result = createWildlifeFarmPermit($permitNo /* Add other form fields here */);

        // Output the result
        echo $result;
    } elseif ($formType == "wildlife_collectors_permit") {
        // Wildlife Collector's Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        // Extract other fields for the Wildlife Collector's Permit

        // Call createWildlifeCollectorsPermit() function with the form data
        $result = createWildlifeCollectorsPermit($permitNo /* Add other form fields here */);

        // Output the result
        echo $result;
    } elseif ($formType == "account_registration") {
        // Account Registration form submitted

        // Extract form data
        $username = $_POST["username"];
        // Extract other fields for Account Registration

        // Call createUserAccount() function with the form data
        $result = createUserAccount($username /* Add other form fields here */);

        // Output the result
        echo $result;
    } else {
        echo "Invalid form type";
    }
}

// Close the database connection
$conn->close();

// CRUD functions and other functions go here (same functions as mentioned in the previous code example)

?>




<?php

// ... Database configuration and connection code ...

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType = $_POST["form_type"];

    // Process the form based on the form type
    if ($formType == "wildlife_farm_permit") {
        // Wildlife Farm Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        $busName = $_POST["bus_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $dateIssue = $_POST["date_issue"];
        $expirationDate = $_POST["expiration_date"];
        $certificate = $_POST["certificate"];

        // Call createWildlifeFarmPermit() function with the form data
        $result = createWildlifeFarmPermit($permitNo, $busName, $ownerName, $address, $dateIssue, $expirationDate, $certificate);

        // Output the result
        echo $result;
    } elseif ($formType == "wildlife_collectors_permit") {
        // Wildlife Collector's Permit form submitted

        // Extract form data
        $permitNo = $_POST["permit_no"];
        $busName = $_POST["bus_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $dateIssue = $_POST["date_issue"];
        $expirationDate = $_POST["expiration_date"];
        $certificate = $_POST["certificate"];

        // Call createWildlifeCollectorsPermit() function with the form data
        $result = createWildlifeCollectorsPermit($permitNo, $busName, $ownerName, $address, $dateIssue, $expirationDate, $certificate);

        // Output the result
        echo $result;
    } elseif ($formType == "account_registration") {
        // Account Registration form submitted

        // Extract form data
        $username = $_POST["username"];
        $businessName = $_POST["business_name"];
        $ownerName = $_POST["owner_name"];
        $address = $_POST["address"];
        $contactNumber = $_POST["contact_number"];
        $emailAddress = $_POST["email_address"];

        // Call createUserAccount() function with the form data
        $result = createUserAccount($username, $businessName, $ownerName, $address, $contactNumber, $emailAddress);

        // Output the result
        echo $result;
    } else {
        echo "Invalid form type";
    }
}

// ... CRUD functions and other functions go here ...

?>
