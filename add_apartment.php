<?php
session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Add Apartment</title>

  <!-- Dark Mode CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      color: #e0e0e0;
      background-image: url("image/apt.jpg");
    }

    .apartment-form {
      width: 500px;
      margin: 0 auto;
      background: #e3dfde;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      margin-top: 50px;
    }

    .apartment-form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: black;
    }

    .apartment-form form {
      display: flex;
      flex-direction: column;
      color: black;
    }

    .apartment-form label {
      margin-bottom: 5px;
      font-weight: bold;
      color: black;
    }

    .apartment-form input[type="text"],
    .apartment-form input[type="email"],
    .apartment-form input[type="file"],
    .apartment-form textarea {
      margin-bottom: 15px;
      padding: 10px;
      font-size: 16px;
      background-color: white;
      color: black;
      border: 1px solid #444444;
      border-radius: 4px;
    }

    .apartment-form input[type="text"]:focus,
    .apartment-form input[type="email"]:focus,
    .apartment-form input[type="file"]:focus,
    .apartment-form textarea:focus {
      border-color: #007bff;
      outline: none;
    }

    .apartment-form input[type="submit"] {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #45a049;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }

    .apartment-form input[type="submit"]:hover {
      background-color: green;
    }

    .apartment-form input[type="button"] {
      padding: 10px 20px;
      font-size: 16px;
      background-color: red;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }

    .apartment-form input[type="button"]:hover {
      background-color: darkred;
    }

    .footer {
      bottom: 0;
      width: 100%;
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <section class="apartment-form">
    <h2>Add Apartment</h2>
    <form action="insert_apartment.php" method="POST" enctype="multipart/form-data">
      <label for="location">Location:</label>
      <input type="text" name="location" required />

      <label for="gps_tag">GPS Tag:</label>
      <input type="text" name="gps_tag" required />

      <label for="image">Apartment Main Image ( jpg , jpeg , png ):</label>
      <input type="file" name="image" accept="image/*" required />

      <label for="TeleNo">Telephone Number:</label>
      <input type="text" name="TeleNo" required />

      <label for="price">Price ( LKR ):</label>
      <input type="text" name="price" required />

      <label for="description" class="mt-4">Description:</label>
      <textarea name="description" required></textarea>

      <h2>Select Facilities</h2>

      <div class="row">
        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Private Bathroom:</label><br>
          <span class="mr-4">
            <input type="radio" name="private_bathroom" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="private_bathroom" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Toilet:</label><br>
          <span class="mr-4">
            <input type="radio" name="toilet" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="toilet" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Room Amenities - Bed:</label><br>
          <span class="mr-4">
            <input type="radio" name="room_bed" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="room_bed" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Room Amenities - Mattress:</label><br>
          <span class="mr-4">
            <input type="radio" name="room_mattress" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="room_mattress" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Room Amenities - Table:</label><br>
          <span class="mr-4">
            <input type="radio" name="room_table" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="room_table" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Room Amenities - Chair:</label><br>
          <span class="mr-4">
            <input type="radio" name="room_chair" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="room_chair" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Living Area - Dining Area:</label><br>
          <span class="mr-4">
            <input type="radio" name="dining_area" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="dining_area" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Living Area - Sitting Area:</label><br>
          <span class="mr-4">
            <input type="radio" name="sitting_area" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="sitting_area" value="NO" required> No
          </span>
        </div>

        <div class="col-sm-12 col-lg-6 radio-group">
          <label>Accommodation:</label><br>
          <span class="mr-4">
            <input type="radio" name="accommodation" value="YES" required> Yes
          </span>
          <span>
            <input type="radio" name="accommodation" value="NO" required> No
          </span>
        </div>
      </div>

      <!-- Button section with alignment -->
      <div class="d-flex justify-content-between mt-4">
        <!-- Left-aligned Go Back button -->
        <input type="button" value="Go Back" onclick="window.location.href='index-AfterLoginApartmentOwner.php';"
          style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 120px; height: 40px;" />

        <!-- Right-aligned Submit button -->
        <input type="submit" value="Submit"
          style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 120px; height: 40px;" />
      </div>

    </form>
  </section>

  <div class="footer">
    <p>&copy; 2024 Your Website. All rights reserved.</p>
  </div>
</body>

</html>