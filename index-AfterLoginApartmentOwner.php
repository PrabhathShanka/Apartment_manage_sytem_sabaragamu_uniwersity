<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // echo $email;
}

// Database connection
require 'databaseConnection.php';

// Fetch apartment data from the database
$query = "SELECT * FROM Apartments WHERE email = '$email'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Internal CSS -->
    <style>
        /* Search Section Styling */
        .search-bar {
            width: 100%;
            padding: 20px;
            background-color: #c7e47e;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;

        }

        .search-bar h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .search-bar form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .search-bar input[type="text"],
        .search-bar input[type="number"] {
            width: 200px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid white;
            font-size: 16px;

        }

        .search-bar input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;

        }

        table th,
        table td {
            padding: 12px;
            border: 0px solid #ddd;
            text-align: left;
            background-color: #707b7c;
        }

        table th {
            background-color: #333;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        .cta-button {
            margin-bottom: 10px;
        }

        .container,
        h2 {
            margin-top: 40px;
            margin-bottom: 50px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 75px;
            /* Increased height to make it a bit taller */
            background-color: #333;
            z-index: 1000;
            /* To ensure it stays on top of other elements */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
        }

        /* Navbar Content Styling */
        .navdiv {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            /* Slightly increased padding */
        }

        /* Navbar Image Styling */
        .navdiv img {
            width: 60px;
            /* Adjusted to fit the increased height */
            height: 60px;
            /* Adjusted to fit the increased height */
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Navbar Links Styling */
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar li {
            margin: 0 15px;
            /* Kept spacing the same for a balanced look */
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            /* Increased padding for more height */
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        /* Button Styling */
        .navbar button {
            background-color: #f00;
            color: white;
            border: none;
            padding: 5px;
            /* Increased padding */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .navbar button:hover {
            background-color: #d00;
        }

        body {
            margin: 0;
            padding-top: 75px;
            /* Match with the height of the navbar to prevent content overlap */
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-5">
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
                <a class="nav-item nav-link mr-4" href="index.php">Home</a>
                <a class="nav-item nav-link mr-4" href="#about">Apartment details</a> <!-- Changed to Apartment details -->
                <a class="nav-item nav-link mr-4" href="#contact">Contact</a>
                <a class="nav-item nav-link mr-4" href="index.php">Logout</a>
                </li>
            </div>
        </div>
    </nav>


    <header class="hero-section">
        <div class="hero-content">
            <h1>Welcome to STAY SABRA</h1>
            <p>This website aims to bridge the gap between students seeking suitable housing and owners looking for reliable tenants.</p>
            <!-- <a class="cta-button" href="#">Learn More</a> -->
        </div>
    </header>

    <section id="about" class="about-section">
        <div class="container">
            <h2>Apartment Details</h2>
            <a class="cta-button" href="add_apartment.php">ADD Apartment</a><br /><br />


            <!-- Apartments Table -->
            <!-- <br/>  <h2><hr>List of Apartments <hr></h2> -->
            <table>
                <thead>

                </thead>
                <tbody>
                    <?php
                    // Check if there are apartments to display
                    if (mysqli_num_rows($result) > 0) {
                        // Output data for each row
                        while ($row = mysqli_fetch_assoc($result)) { ?>



                            <tr>
                                <td style="text-align: center; vertical-align: middle;">
                                    <h1><?php echo $row["location"]; ?> (<?php echo $row["adminApproving"]; ?>)</h1><br>
                                    <img src="images/<?php echo $row["image"]; ?>" width="600" height="400" title="<?php echo $row['image']; ?>"><br>
                                    <h4>Price :-
                                        <?php echo $row["price"]; ?></h4>
                                    <br>
                                    <h4>Contact Number :-
                                        <?php echo $row["TeleNo"]; ?></h4>
                                    <br>
                                    <h4>GPS Code :-
                                        <?php echo $row["gps_tag"]; ?>
                                    </h4>
                                    <br>

                                    <h4>Discription <br>
                                        <?php echo $row["description"]; ?></h4>
                                    <br>

                                    <h2>
                                        <a href='apartment_owner_delete_apartment.php?Apartment_ID=<?php echo urlencode($row["Apartment_ID"]); ?>' style="color: #cb0404;">
                                            <b>DELETE</b>
                                        </a>
                                    </h2>

                                    <br>

                                    <hr style="border: 6px solid #fbfcfc; width: 100%;">


                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='8'>No apartments found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <div class="mb-5" id="contact">
        <div class="row d-flex justify-content-center mx-5">
            <div class="col-sm-12 col-lg-6 m-4 p-3">
                <h2><b>About Stay Sabra</b></h2>
                <p>If you have any questions, comments, or would like to learn more about our services, please don’t hesitate to get in touch with us. We’re committed to providing you with all the information you need and assisting you throughout the entire process. Whether you need clarification on our platform, have specific concerns, or want to explore more about how we can help you find the ideal boarding house, we’re here for you. Feel free to reach out to us anytime via email at staysabra@gmail.com or give us a call at +94 455666236. Our team is always ready to assist, and we look forward to connecting with you and helping you with any inquiries you might have!</p>
            </div>
            <div class="col-sm-12 col-lg-4 m-4 p-3">
                <h2><b>Contact Us</b></h2>
                <p><b>Address</b></p>
                <p>56, Belihuloya, Ratnapura,Sri Lanka</p>

                <p><b>Phone</b></p>
                <p>+94 4556666236</p>

                <p><b>Email</b></p>
                <p>staysabra@gmail.com</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div>
            <p>&copy; Copyright HMPM 2024. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>

<?php
$conn->close();
?>