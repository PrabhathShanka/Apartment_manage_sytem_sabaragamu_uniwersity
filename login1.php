<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <style>
        /* Ensure the navbar stays fixed at the top */
        
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
            background-color: #ff6f00;
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
        /* Add padding to the top of the body to prevent the content from being hidden behind the fixed navbar */
        
        body {
            padding-top: 60px;
            padding-bottom: 60px;
            margin: 0;
            position: relative;
            background: none;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        body::before {
            content: "";
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
        /* Footer styles */
        
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* Dark theme for the login container */
        
        .login-container {
            background-color: rgba(34, 34, 34, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
            text-align: center;
            color: white;
        }
        /* Add CSS for the submit button */
        
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        /* Hover effect for submit button */
        
        input[type="submit"]:hover {
            background-color: green;
        }
        /* Styling for the input fields */
        
        .input-container input[type="text"],
        .input-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #555;
            background-color: #333;
            color: white;
            border-radius: 4px;
            box-sizing: border-box;
        }
        /* Optional: Center the login container */
        
        .login-container h2 {
            text-align: center;
            color: white;
        }
        /* Adjust the space between links */
        
        .links {
            margin-top: 25px;
            color: white;
        }
        
        .links p {
            margin-bottom: 5px;
            color: white;
        }
    </style>
</head>

<body>
    



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
                <a class="nav-item nav-link mr-4" href="customerRegister.php">Sign up</a>
                </li>
            </div>
        </div>
    </nav>



    <div class="login-container">
        <h2>Customer Login</h2>
        <form action="login.php" method="POST">
            <div class="input-container">
                <label for="emailAddress">Email Address</label>
                <input type="text" id="emailAddress" name="emailAddress" placeholder="Enter your Email" required />
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required />
            </div>
            <input type="submit" name="submit" value="Login" />
            <div class="links">
                <p>Don't have an Account? <a href="customerRegister.php">Sign up</a></p>
                <p>Are you an Admin? <a href="adminlogin.php">Login as Admin</a></p>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="container">
            <p>&copy; Copyright STAY_SABRA 2024. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>