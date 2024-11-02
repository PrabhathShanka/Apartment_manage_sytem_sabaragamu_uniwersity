<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Manage customers</title>

    <style>
        .nav-link {
            transition: transform 0.3s ease-in-out;
        }
        
        .nav-link:hover {
            transform: scale(1.1);
        }
        /*bg color*/
        
        body {
            background-color: rgb(218, 216, 209);
        }
        /*footer styles*/
        
        footer {
            background-color: #343a40;
            color: #dcdcdc;
            padding: 20px 0;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <img src="image/boarding_logo.jpg" alt="Your Image Description" style="
          width: 70px;
          height: 70px;
          vertical-align: middle;
          margin-left: 50px;
        " />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto px-5">
                <a class="nav-item nav-link mr-4" href="admin_dash.php">Booking Requests</a>
                <a class="nav-item nav-link mr-4" href="admin_NOT_Approve_List.php">NOT Approve List</a>
                <a class="nav-item nav-link mr-4" href="admin_Approve_List.php">Approve List</a>
                <a class="nav-item nav-link mr-4" href="admin_customers.php">Customers</a>
                <a class="nav-item nav-link mr-4" href="admin_owners.php">Owners</a>
                <a class="nav-item nav-link mr-4" href="index.php">Sign Out</a>
            </div>
        </div>
    </nav>

    <h2 class="text-center mb-5">Registered Customers</h2>

    <div class="mx-5">
    <?php
// Step 1: Database connection
require 'databaseConnection.php'; // Ensure this contains your correct connection details

// Step 2: SQL query to fetch user data
$sql = "SELECT * FROM users WHERE user_role = 'students' ";
$result = mysqli_query($conn, $sql);

// Step 3: Display the data in an HTML table with inline CSS
if (mysqli_num_rows($result) > 0) {
    echo "<table style='width: 100%; border-collapse: collapse; border: 1px solid #ddd;'>";
    
    // Header row with inline styles
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th style='padding: 12px; border: 1px solid #ddd; text-align: left;'>Email</th>";
    echo "<th style='padding: 12px; border: 1px solid #ddd; text-align: left;'>Name</th>";
    echo "<th style='padding: 12px; border: 1px solid #ddd; text-align: left;'>Telephone Number</th>";
    echo "<th style='padding: 12px; border: 1px solid #ddd; text-align: left;'>Action</th>";
    echo "</tr>";

    // Fetch each row of data and display it in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr style='border: 1px solid #ddd;'>";
        echo "<td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['tel_number']) . "</td>";

        // Add the "Action" column with a delete button, styled inline
        echo "<td style='padding: 12px; border: 1px solid #ddd; text-align: center;'>";
        echo "<a href='admin_delete_user_student.php?email=" . urlencode($row['email']) . "' style='color: #ff0000; text-decoration: none;' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align: center; color: red;'>No users found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>

    </div>
</body>

</html>