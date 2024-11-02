<?php

if (isset($_POST["submitCustomer"])) {
  $telNumber = $_POST['telephone'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $userRole = $_POST['userRole'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  require 'databaseConnection.php';

  if ($password1 == $password2) {
    $sql = "INSERT INTO `users`(`email`,`name`, `tel_number`, `user_role` , `password1`) VALUES ('$email','$name','$telNumber','$userRole','$password1')";
    $ret = mysqli_query($conn, $sql);

    if ($ret) {
      echo "No of records inserted: $ret <br>";
      // echo "registration successfully";

?>
      <script type="text/javascript">
        var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
        alert("registration successfully !!!");
        window.location.href = "login1.php";
      </script>
<?php


      //  header("Location: login.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Disconnect
    mysqli_close($conn);
  } else {
    echo "Passwords do not match.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="cusregister.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <style>
    /* Ensure the navbar stays fixed at the top */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    /* Add padding to the top of the body to prevent the content from being hidden behind the fixed navbar */
    body {
      padding-top: 60px;
      /* Adjust this value based on the height of your navbar */
      padding-bottom: 60px;
      /* Add padding to the bottom to make space for the footer */
      margin: 0;
      position: relative;
      /* Needed to position the pseudo-element */
      background: none;
      /* Remove the default background */
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("image/bg.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      filter: blur(1px);
      z-index: -1;
    }

    /* Style for input fields and select elements */
    input[type="text"],
    input[type="tel"],
    input[type="password"],
    select {
      background-color: #333;
      /* Dark background */
      color: #fff;
      /* White text */
      border: 1px solid #555;
      /* Optional: Darker border */
      border-radius: 5px;
      /* Optional: Rounded corners */
      padding: 10px;
      /* Padding for better spacing */
      width: 100%;
      /* Full width */
      margin-bottom: 15px;
      /* Space between input fields */
    }

    /* Change the background color of the button */
    button {
      background-color: #007bff;
      /* Bootstrap primary color */
      color: #fff;
      /* White text */
      border: none;
      /* Remove default border */
      border-radius: 5px;
      /* Optional: Rounded corners */
      padding: 10px;
      /* Padding for better spacing */
      cursor: pointer;
      /* Pointer cursor on hover */
    }

    /* Change the button color on hover */
    button:hover {
      background-color: #0056b3;
      /* Darker shade on hover */
    }

    /* Footer styles to ensure it stays at the bottom */
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #333;
      /* Change footer color to #333 */
      color: #fff;
      /* Change text color to white for better contrast */
      text-align: center;
      padding: 10px 0;
    }

    .navbar {
      display: flex;
      /* Use flexbox layout */
      justify-content: space-between;
      /* Space between items */
      align-items: center;
      /* Center items vertically */
      padding: 10px 20px;
      /* Add padding around the navbar */
      background-color: #333;
      /* Background color for the navbar */
      position: fixed;
      /* Fixed position */
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    /* Styles for the logo image */

    .navbar img {
      width: 70px;
      /* Width of the image */
      height: 70px;
      /* Height of the image */
    }

    /* Styling for the navigation buttons */

    .navbar ul {
      list-style: none;
      /* Remove default list styling */
      padding: 0;
      /* Remove padding */
      margin: 0;
      /* Remove margin */
      display: flex;
      /* Use flexbox for list items */
    }

    /* Optional: Style for list items */

    .navbar ul li {
      margin-left: 20px;
      /* Space between buttons */
    }

    /* General styles for navigation buttons */

    .navbar button {
      background-color: #ffd900;
      /* Button background color */
      color: black;
      /* Text color */
      padding: 10px 15px;
      /* Padding */
      border: none;
      /* No border */
      border-radius: 5px;
      /* Rounded corners */
      cursor: pointer;
      /* Pointer on hover */
      font-size: 16px;
      /* Font size */
      transition: background-color 0.3s ease, transform 0.2s;
      /* Smooth transition */
    }

    /* Hover effect for buttons */

    .navbar button:hover {
      background-color: orangered;
      /* Darker shade on hover */
      transform: translateY(-2px);
      /* Slight lift effect */
    }

    /* Active effect for buttons */

    .navbar button:active {
      background-color: #004085;
      /* Even darker shade when active */
      transform: translateY(0);
      /* Reset lift effect */
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="nav-left">
      <img src="image/boarding_logo.jpg" alt="Your Image Description" />
    </div>
    <div class="nav-right">
      <ul>
        <li>
          <button onclick="location.href='index.php'">Home</button>
        </li>
        <li>
          <button onclick="location.href='login1.php'">Sign In</button>
        </li>
      </ul>
    </div>
  </nav>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <a class="nav-item nav-link mr-4" href="login1.php">Sign In</a>
                </li>
            </div>
        </div>
    </nav>




  <div class="registration-container mt-5">
    <h2>Customer Registration</h2>
    <form action="#" method="POST">
      <div class="input-container">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-container">
        <label for="telephone">Telephone number:</label>
        <input type="tel" id="telephone" name="telephone" placeholder="Enter your telephone number" required>
      </div>
      <div class="input-container">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-container">
        <label for="userRole">User role:</label>
        <select style="height: 45px;" name="userRole" required>
          <option selected>--- Select User role ---</option>
          <option value="students">Student</option>
          <option value="apartmentOwner">Apartment Owner</option>
        </select>
      </div>
      <div class="input-container">
        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1" placeholder="Password" required>
      </div>
      <div class="input-container">
        <label for="password2">Confirm Password:</label>
        <input type="password" id="password2" name="password2" placeholder="Confirm Password" required>
      </div>
      <button type="submit" name="submitCustomer" class="mt-2">Register</button>
    </form>
    <p class="mt-4">Already have an account? <a href="login1.php">Login</a></p>
  </div>
  <footer class="footer">
    <div class="container">
      <p>&copy; Copyright STAY_SABRA 2024. All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>