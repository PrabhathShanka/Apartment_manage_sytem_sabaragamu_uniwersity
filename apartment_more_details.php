<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $apartment_id = $_GET['id'];
}
?>

<?php
session_start();
require 'databaseConnection.php';



$query = "SELECT * FROM Apartments WHERE Apartment_ID = '$apartment_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; color: #333; margin: 0; padding-top: 75px;">

    <nav style="position: fixed; top: 0; width: 100%; height: 75px; background-color: #333; display: flex; align-items: center; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); z-index: 1000;">
        <div style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 0 20px;">
            <img src="image/boarding_logo.jpg" alt="Your Image Description" style="width: 70px; height: 70px; vertical-align: middle; margin-right: 10px;">
            <ul style="list-style: none; margin: 0; padding: 0; display: flex; align-items: center;">
                <li style="margin: 0 15px;">
                    <button onclick="location.href='index-AfterLoginUser.php'" style="background-color: #f00; color: white; border: none; padding: 10px 20px; cursor: pointer;">BACK</button>
                </li>
            </ul>
        </div>
    </nav>

    <section id="about" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; font-size: 40px; color: #333;">Apartment Details</h2>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                    <!-- Left side: Text details -->
                    <div style="flex: 1; padding-right: 20px;">
                        <h1 style="font-size: 28px; color: #333;"><?php echo $row["location"]; ?></h1>
                        <p style="font-size: 18px; margin: 10px 0;"><strong>Price:</strong> <?php echo $row["price"]; ?></p>
                        <p style="font-size: 18px; margin: 10px 0;"><strong>Contact Number:</strong> <?php echo $row["TeleNo"]; ?></p>
                        <p style="font-size: 18px; margin: 10px 0;"><strong>GPS Code:</strong> <?php echo $row["gps_tag"]; ?></p>
                        <p style="font-size: 18px; margin: 10px 0;"><strong>Description:</strong> <?php echo $row["description"]; ?></p>
                    </div>

                    <!-- Right side: Image -->
                    <div style="flex: 1;">
                        <img src="images/<?php echo $row["image"]; ?>" width="500" height="350" title="<?php echo $row['image']; ?>" style="border-radius: 10px;">
                    </div>
                </div>

                <!-- Facilities Section -->
                <div style="margin-top: 10px;">
                    <h2 style="text-align: center; font-size: 50px; color: #333;">Facilities</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(5px, 1fr)); gap: 20px; margin-top: 10px;">

                        <!-- Bathroom -->
                        <div style="background-color: #f1f1f1; border-radius: 100px; text-align: center; padding: 20px;">
                            <img src="assets/bath.png" alt="Room Amenities" style="width: 50px; height: 50px; border-radius: 10px;">
                            <p>Bathroom</p>
                            <p>Common Washroom: <?php echo $row["Private_bathroom"]; ?><br>Private Washroom: <?php echo $row["Toilet"]; ?></p>
                        </div>

                        <!-- Room Amenities -->
                        <div style="background-color: #f1f1f1; border-radius: 100px; text-align: center; padding: 20px;">
                            <img src="assets/room.jpg" alt="Room Amenities" style="width: 50px; height: 50px; border-radius: 10px;">
                            <p>Room Amenities</p>
                            <p>Bed: <?php echo $row["Room_Amenities_Bed"]; ?><br>Mattress: <?php echo $row["Room_Amenities_Mattress"]; ?><br>Table: <?php echo $row["Room_Amenities_Table"]; ?><br>Chair: <?php echo $row["Room_Amenities_Chair"]; ?></p>
                        </div>

                        <!-- Living Area -->
                        <div style="background-color: #f1f1f1; border-radius: 100px; text-align: center; padding: 20px;">
                            <img src="assets/living area.jpg" alt="Living Area" style="width: 50px; height: 50px; border-radius: 10px;">
                            <p>Living area</p>
                            <p>Dining area: <?php echo $row["Living_area_Dining_area"]; ?><br>Sitting area: <?php echo $row["Living_area_Sitting_area"]; ?></p>
                        </div>

                        <!-- Accommodation -->
                        <div style="background-color: #f1f1f1; border-radius: 100px; text-align: center; padding: 20px;">
                            <img src="assets/food.jpg" alt="Accommodation" style="width: 50px; height: 50px; border-radius: 10px;">
                            <p>Accommodation: <?php echo $row["Accommodation"]; ?></p>
                        </div>

                        <!-- Parking -->
                        <div style="background-color: #f1f1f1; border-radius: 100px; text-align: center; padding: 20px;">
                            <img src="assets/parking.png" alt="Parking" style="width: 50px; height: 50px; border-radius: 10px;">
                            <p>Parking: <?php echo $row["Parking"]; ?></p>
                        </div>


                    </div>
                </div>

        <?php
            }
        } else {
            echo "<p>No apartment found.</p>";
        }
        mysqli_close($conn);
        ?>
    </section>

</body>

</html>