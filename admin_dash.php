
<?php
session_start();
require 'databaseConnection.php';

$query = "SELECT * FROM Apartments WHERE adminApproving = 'pending'";
$result = mysqli_query($conn, $query);
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
    <title>Admin Landing Page</title>

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

    <h2 class="text-center mb-5">Currently Pending Requests</h2>







        <section id="about" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>

<div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
    <!-- Left side: Text details -->
    <div style="flex: 1; padding-right: 20px;">
    <h1 style="font-size: 28px; color: #333;"><b><?php echo $row["location"]; ?></b></h1>
        <p style="font-size: 18px; margin: 10px 0;"><strong>Price:</strong> <?php echo $row["price"]; ?></p>
        <p style="font-size: 18px; margin: 10px 0;"><strong>Contact Number:</strong> <?php echo $row["TeleNo"]; ?></p>
        <p style="font-size: 18px; margin: 10px 0;"><strong>Email:</strong> <?php echo $row["email"]; ?></p>
        <p style="font-size: 18px; margin: 10px 0;"><strong>GPS Code:</strong> <?php echo $row["gps_tag"]; ?></p>
        <p style="font-size: 18px; margin: 10px 0;"><strong>Description:</strong> <?php echo $row["description"]; ?></p>
    </div>

    <!-- Right side: Image -->
    <div style="flex: 1;">
        <img src="images/<?php echo $row["image"]; ?>" width="500" height="350" title="<?php echo $row['image']; ?>" style="border-radius: 10px;">
    </div>
</div>

     



            </div>
        </div>
        <br>

    
        <div>
    <h2>
        <a href='approve_request.php?id=<?php echo urlencode($row["Apartment_ID"]); ?>' style="color: #05ca05;">
           <h3> <b>Approve</b></h3>
        </a>
    </h2>
    
    <h2>
        <a href='not_approve_request.php?id=<?php echo urlencode($row["Apartment_ID"]); ?>' style="color: #cb0404;">
            <h3><b>NOT Approve</b></h3>
        </a>
    </h2>
</div>

<br>
 <hr>
 <br>

        <?php
            }
        } else {
            echo "<p>No apartment found.</p>";
        }
        mysqli_close($conn);
        ?>
    </section>










    </div>
</body>

</html>