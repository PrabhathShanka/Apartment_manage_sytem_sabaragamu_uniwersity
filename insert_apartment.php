<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    echo $email;
}

// Database connection
require 'databaseConnection.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $location = $_POST['location'];
    $gps_tag = $_POST['gps_tag'];
    $teleNo = $_POST['TeleNo'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $private_bathroom = $_POST['private_bathroom'];
    $toilet = $_POST['toilet'];
    $room_bed = $_POST['room_bed'];
    $room_mattress = $_POST['room_mattress'];
    $room_table = $_POST['room_table'];
    $room_chair = $_POST['room_chair'];
    $dining_area = $_POST['dining_area'];
    $sitting_area = $_POST['sitting_area'];
    $accommodation = $_POST['accommodation'];
    $parking = $_POST['parking'];



    // Handle image upload
    if ($_FILES["image"]["error"] === 4) {
        echo "<script> alert('Image Does Not Exist')</script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid Image Extension');</script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Image Size Is Too Large');</script>";
        } else {
            // Generate a unique name for the image and move it
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, 'images/' . $newImageName);

            $approving = "pending";

            // Insert apartment data into the database
            $query = "INSERT INTO Apartments (location, gps_tag, image, TeleNo, price, description, email, adminApproving, Private_bathroom, Toilet, Room_Amenities_Bed, Room_Amenities_Mattress, Room_Amenities_Table, Room_Amenities_Chair, Living_area_Dining_area, Living_area_Sitting_area, Accommodation, Parking)
                      VALUES ('$location', '$gps_tag', '$newImageName', '$teleNo', '$price', '$description', '$email', '$approving', '$private_bathroom', '$toilet', '$room_bed', '$room_mattress', '$room_table', '$room_chair', '$dining_area', '$sitting_area', '$accommodation', '$parking')";

            if (mysqli_query($conn, $query)) {

                echo "<script>
                        alert('ADD Apartment is successful! Email Address: $email');
                        document.location.href = 'index-AfterLoginApartmentOwner.php';
                      </script>";
            } else {
                echo "<script> alert('Error: Could not insert data.');</script>";
            }
        }
    }
}

$conn->close();
