<?php
// Include your database connection file
require 'databaseConnection.php';

// Check if the Apartment_ID is set in the URL
if (isset($_GET['id'])) {
    $apartment_id = $_GET['id'];

    // Sanitize the input to prevent SQL injection
    $apartment_id = mysqli_real_escape_string($conn, $apartment_id);

    // SQL query to update the adminApproving field to "Approved"
    $sql = "UPDATE apartments SET adminApproving = 'NOT Approved' WHERE Apartment_ID = '$apartment_id'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to a success page or back to the admin dashboard
        echo "<script>alert('NOT Approving successfully!'); document.location.href = 'admin_dash.php';</script>";
        exit();
    } else {
        // Handle error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If no ID is set, redirect back or show an error
    echo "Invalid Request!";
}
?>
