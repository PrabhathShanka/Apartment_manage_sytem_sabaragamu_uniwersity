<?php

if (isset($_POST["submit"])) {
    
  require 'databaseConnection.php';
  
  if (isset($_POST['username']) && isset($_POST['password'])) {
  
      function validate($data){
  
         $data = trim($data);
  
         $data = stripslashes($data);
  
         $data = htmlspecialchars($data);
  
         return $data;
  
      }
  
      $uname = validate($_POST['username']);
  
      $pass = validate($_POST['password']);
  
      if (empty($uname)) {
  
          echo "User Name is required";
  
          exit();
  
      }else if(empty($pass)){
  
          echo"Password is required";
  
          exit();
  
      }else{
  
          $sql = "SELECT * FROM admindetails WHERE uname='$uname' AND password ='$pass'";
  
          $result = mysqli_query($conn, $sql);
  
          if (mysqli_num_rows($result) === 1) {
  
              $row = mysqli_fetch_assoc($result);
  
              if ($row['uname'] === $uname && $row['password'] === $pass) {
                  header("Location: admin_dash.php");
                  exit();
                  
              }
              
              else{

                ?>
              <script type="text/javascript">
               var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
              alert("User name or password is invalid !!!");
                window.location.href = "adminlogin.php";
                </script>
          <?php
  
             //header("Location: adminlogin.html");
             //exit();
            }
  
          }else{

            ?>
              <script type="text/javascript">
               var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
              alert("User name or password is invalid !!!");
                window.location.href = "adminlogin.php";
                </script>
          <?php
    
             // header("Location: adminlogin.html");
             // exit();
            }
   
          }
      }
          else{
                  exit();
              }





}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  
  <link rel="stylesheet" type="text/css" href="index.css">
  
  <style>
    /* General Styles */
    body {
      padding-top: 60px; /* Adjust for navbar height */
      padding-bottom: 60px; /* Adjust for footer */
      margin: 0;
      font-family: Arial, sans-serif;
      background: #fdebdb;
    }

    /* Background image blur effect */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('image/apt.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      filter: blur(5px);
      z-index: -1;
    }

    /* Navbar Styles */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background-color: rgba(0, 0, 0, 0.8); /* Transparent dark background */
      padding: 10px 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar img {
      width: 50px;
      height: 50px;
      margin-right: 15px;
      vertical-align: middle;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
    }

    .navbar ul li {
      margin-right: 15px;
    }

   

    /* Login Container - Dark Mode */
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      background-color: rgba(20, 20, 20, 0.7); /* Dark background */
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #f5f5f5; /* Light text color */
    }

    .input-container {
      margin-bottom: 20px;
    }

    .input-container label {
      display: block;
      font-size: 14px;
      color: #f5f5f5; /* Light label color */
      margin-bottom: 5px;
    }

    .input-container input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #555;
      background-color: #333; /* Darker input background */
      color: #fff; /* White text color for inputs */
      border-radius: 5px;
      box-sizing: border-box;
      transition: border 0.3s;
    }

    .input-container input:focus {
      border-color: #f44336; /* Red border on focus */
    }

    /* Login Button */
    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #0cc100;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background-color: green;
    }

    /* Footer */
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      z-index: 1000;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .login-container {
        margin: 50px auto;
        padding: 20px;
      }

      .navbar ul {
        flex-direction: column;
        text-align: center;
      }

      .navbar ul li {
        margin-right: 0;
        margin-bottom: 10px;
      }

      .navbar img {
        width: 40px;
        height: 40px;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="navdiv">
      <img src="image/boarding_logo.jpg" alt="Logo">
      <ul>
        <li><button onclick="location.href='index.php'"><a>Home</a></button></li>
        <li><button onclick="location.href='customerRegister.php'"><a>Sign up</a></button></li>
      </ul>
    </div>
  </nav>

  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="#" method="POST">
      <div class="input-container">
        <label for="username">Admin ID</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="input-container">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>

  <footer class="footer">
    <div class="container">
      <p>&copy; Copyright HMPM 2024. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>

