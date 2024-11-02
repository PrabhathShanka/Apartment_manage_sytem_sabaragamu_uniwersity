<?php
// Step 1: Database connection
require 'databaseConnection.php';

if (isset($_GET['Apartment_ID'])) {
    $ApartmentID = mysqli_real_escape_string($conn, $_GET['Apartment_ID']);

    // Step 2: SQL query to delete the apartment
    $sql = "DELETE FROM apartments WHERE Apartment_ID='$ApartmentID'";

    if (mysqli_query($conn, $sql)) {
        // Step 3: If successful, show an alert and redirect
        ?>
        <script type="text/javascript">
            alert("NOT Approve Apartment deleted Successfully!");
            window.location.href = "admin_NOT_Approve_List.php"; // Redirect to the approval list
        </script>
        <?php
        exit(); // Stop further execution
    } else {
        // Show error message in case of failure
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Error message if Apartment_ID is missing in the GET request
    echo "No Apartment_ID provided for deletion.";
}

// Close the database connection
mysqli_close($conn);
?>
