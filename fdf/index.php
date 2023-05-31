<!DOCTYPE html>
<html>
<head>
    <title>Local Transport Permit for Wildlife Butterfly</title>
</head>
<body>
    <h1>Local Transport Permit for Wildlife Butterfly</h1>

    <!-- Wildlife Farm Permit Form -->
    <h2>Wildlife Farm Permit</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="form_type" value="wildlife_farm_permit">

        <label for="permit_no">Permit No.:</label>
        <input type="text" name="permit_no" required><br>

        <label for="bus_name">Bus Name:</label>
        <input type="text" name="bus_name" required><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="date_issue">Date Issue:</label>
        <input type="date" name="date_issue" required><br>

        <label for="expiration_date">Expiration Date:</label>
        <input type="date" name="expiration_date" required><br>

        <label for="certificate">Certificate:</label>
        <input type="text" name="certificate" required><br>

        <input type="submit" value="Create Wildlife Farm Permit">
    </form>

    <!-- Wildlife Collector's Permit Form -->
    <h2>Wildlife Collector's Permit</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="form_type" value="wildlife_collectors_permit">

        <label for="permit_no">Permit No.:</label>
        <input type="text" name="permit_no" required><br>

        <label for="bus_name">Bus Name:</label>
        <input type="text" name="bus_name" required><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="date_issue">Date Issue:</label>
        <input type="date" name="date_issue" required><br>

        <label for="expiration_date">Expiration Date:</label>
        <input type="date" name="expiration_date" required><br>

        <label for="certificate">Certificate:</label>
        <input type="text" name="certificate" required><br>

        <input type="submit" value="Create Wildlife Collector's Permit">
    </form>

    <!-- Account Registration Form -->
    <h2>Account Registration</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="form_type" value="account_registration">

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="business_name">Business Name:</label>
        <input type="text" name="business_name" required><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" required><br>

        <label for="email_address">Email Address:</label>
        <input type="email" name="email_address" required><br>

        <input type="submit" value="Register Account">
    </form>
</body>
</html>

<!-- Login,register,forgetpass Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Local Transport Permit for Wildlife Butterfly</title>
</head>
<body>
    <h1>Local Transport Permit for Wildlife Butterfly</h1>

    <!-- Login Form -->
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    <!-- May css -->
    <h2>Login</h2>
    <form class="login-form" action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>

    <!-- Registration Form -->
    <h2>Account Registration</h2>
    <form action="register.php" method="post">
        <!-- Add the fields for account registration -->

        <input type="submit" value="Register Account">
    </form>
    <!-- Registration Form  na may css-->
    <h2>Account Registration</h2>
    <form class="registration-form" action="register.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="business-name">Business Name</label>
        <input type="text" name="business-name" id="business-name" required>

        <label for="owner-name">Owner Name</label>
        <input type="text" name="owner-name" id="owner-name" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>

        <label for="contact-number">Contact Number</label>
        <input type="text" name="contact-number" id="contact-number" required>

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="confirm-password" id="confirm-password" required>

        <label>
            <input type="checkbox" name="terms-and-conditions" required>
            I agree to the Terms and Conditions
        </label>

        <button type="submit">Register</button>
    </form>




    <!-- Forget Password Form -->
    <h2>Forget Password</h2>
    <form action="forget_password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Reset Password">
    </form>
<!-- Forget Password Form na may css -->
    <h2>Forget Password</h2>
    <form class="forget-password-form" action="reset_password.php" method="POST">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Reset Password</button>
    </form>




<!-- New Permit Application Form -->
    <h2>New Permit Application</h2>
    <form action="new_permit.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="transport_to_address">Transport to Address:</label>
        <input type="text" name="transport_to_address" required><br>

        <label for="mode_of_transport">Mode of Transport:</label>
        <input type="text" name="mode_of_transport" required><br>

        <label for="date_of_transport">Date of Transport:</label>
        <input type="date" name="date_of_transport" required><br>

        <label for="purpose">Purpose:</label>
        <input type="text" name="purpose" required><br>

        <label for="butterfly_details">Butterfly Details:</label>
        <textarea name="butterfly_details" required></textarea><br>

        <label for="wfp_docs">Upload WFP Docs:</label>
        <input type="file" name="wfp_docs" required><br>

        <label for="wcp_docs">Upload WCP Docs:</label>
        <input type="file" name="wcp_docs" required><br>

        <input type="submit" value="Submit Application">
    </form>
<!-- New Permit Application Form na may css -->
    <h2>New Permit Application</h2>
    <form class="new-permit-form" action="submit_permit.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>

        <label for="transport-address">Transport to Address</label>
        <input type="text" name="transport-address" id="transport-address" required>

        <label for="mode-of-transport">Mode of Transport</label>
        <input type="text" name="mode-of-transport" id="mode-of-transport" required>

        <label for="date-of-transport">Date of Transport</label>
        <input type="date" name="date-of-transport" id="date-of-transport" required>

        <label for="purpose">Purpose</label>
        <textarea name="purpose" id="purpose" rows="3" required></textarea>

        <label for="butterfly-details">Butterfly Details</label>
        <textarea name="butterfly-details" id="butterfly-details" rows="5" required></textarea>

        <label for="wfp-docs">Upload WFP Docs (or No)</label>
        <input type="text" name="wfp-docs" id="wfp-docs" required>

        <label for="wcp-docs">Upload WCP Docs (or No)</label>
        <input type="text" name="wcp-docs" id="wcp-docs" required>

        <button type="submit">Submit</button>
    </form>


    <!-- Permit Status Update Form -->
<h2>Permit Status Update</h2>
<form action="permit_status.php" method="post">
    <label for="permit_id">Permit ID:</label>
    <input type="text" name="permit_id" required><br>

    <label for="status">Status:</label>
    <select name="status" required>
        <option value="Draft">Draft</option>
        <option value="On Process">On Process</option>
        <option value="Returned">Returned</option>
        <option value="Accepted">Accepted</option>
        <option value="Released">Released</option>
        <option value="Expired">Expired</option>
        <option value="Used">Used</option>
    </select><br>

    <input type="submit" value="Update Status">
</form>
<!-- Permit Status Update Form na may css -->
<h2>Permit Status Update</h2>
    <form class="permit-status-form" action="update_permit_status.php" method="POST">
        <label for="permit-no">Permit No.</label>
        <input type="text" name="permit-no" id="permit-no" required>

        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="Draft">Draft</option>
            <option value="On Process">On Process</option>
            <option value="Returned">Returned</option>
            <option value="Accepted">Accepted</option>
            <option value="Released">Released</option>
            <option value="Expired">Expired</option>
            <option value="Used">Used</option>
        </select>

        <button type="submit">Update Status</button>
    </form>


<!-- Butterfly List CRUD -->
    <h2>Butterfly List CRUD</h2>
    <form action="create_butterfly.php" method="post">
        <label for="species_type">Species Type:</label>
        <input type="text" name="species_type" required><br>

        <label for="class_name">Class Name:</label>
        <input type="text" name="class_name" required><br>

        <label for="family_name">Family Name:</label>
        <input type="text" name="family_name" required><br>

        <label for="common_name">Common Name:</label>
        <input type="text" name="common_name" required><br>

        <label for="scientific_name">Scientific Name:</label>
        <input type="text" name="scientific_name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <input type="submit" value="Add Butterfly">
    </form>
<!-- Butterfly List CRUD  na may css-->
    <h2>Butterfly List</h2>
    <table class="butterfly-list">
        <tr>
            <th>Species Type</th>
            <th>Class Name</th>
            <th>Family Name</th>
            <th>Common Name</th>
            <th>Scientific Name</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Species 1</td>
            <td>Class 1</td>
            <td>Family 1</td>
            <td>Common Name 1</td>
            <td>Scientific Name 1</td>
            <td>Description 1</td>
        </tr>
        <tr>
            <td>Species 2</td>
            <td>Class 2</td>
            <td>Family 2</td>
            <td>Common Name 2</td>
            <td>Scientific Name 2</td>
            <td>Description 2</td>
        </tr>
        <!-- Add more rows as needed -->
    </table>

    <!-- Display Butterfly List -->
    <h2>Butterfly List</h2>
    <table>
        <tr>
            <th>Species Type</th>
            <th>Class Name</th>
            <th>Family Name</th>
            <th>Common Name</th>
            <th>Scientific Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
        // Fetch and display butterfly list from the database
        $sql = "SELECT * FROM butterfly_list";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['species_type'] . "</td>";
                echo "<td>" . $row['class_name'] . "</td>";
                echo "<td>" . $row['family_name'] . "</td>";
                echo "<td>" . $row['common_name'] . "</td>";
                echo "<td>" . $row['scientific_name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td><a href='edit_butterfly.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_butterfly.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No butterflies found</td></tr>";
        }
        ?>
    </table>


    <!-- Admin Page -->
    <h2>Admin Page - Update Application Form</h2>
    <form action="update_application.php" method="post">
        <label for="permit_id">Permit ID:</label>
        <input type="text" name="permit_id" required><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Return">Return</option>
            <option value="Encode OR">Encode OR</option>
            <option value="Accepted">Accepted</option>
            <option value="Others">Others</option>
        </select><br>

        <input type="submit" value="Update Application">
    </form>


    <!-- QR Confirmation Form -->
    <h2>QR Confirmation of Used Permit</h2>
    <form action="qr_confirmation.php" method="post">
        <label for="permit_id">Permit ID:</label>
        <input type="text" name="permit_id" required><br>

        <label for="confirmation_code">Confirmation Code:</label>
        <input type="text" name="confirmation_code" required><br>

        <input type="submit" value="Confirm">
    </form>

    <!-- System Users CRUD -->
    <h2>System Users - CRUD</h2>
    <ul>
        <li><a href="create_user.php">Create User</a></li>
        <li><a href="read_users.php">Read Users</a></li>
        <li><a href="update_user.php">Update User</a></li>
        <li><a href="delete_user.php">Delete User</a></li>
    </ul>


    <!-- Reports -->
    <h2>Reports</h2>
    <ul>
        <li><a href="permit_report.php">Permit Report</a></li>
        <li><a href="user_report.php">User Report</a></li>
        <li><a href="butterfly_report.php">Butterfly Report</a></li>
        <!-- Add more report links as needed -->
    </ul>

</body>
</html>
