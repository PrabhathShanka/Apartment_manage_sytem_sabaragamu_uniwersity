<?php
require 'databaseConnection.php';

session_start();

if (isset($_POST['emailAddress']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $email = validate($_POST['emailAddress']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        echo "User email is required";
        exit();
    } else if (empty($pass)) {
        echo "Password is required";
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password1='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password1'] === $pass) {

                $_SESSION['email'] = $email;
                // Check if the user role is 'apartmentOwner' or 'students'
                if ($row['user_role'] === 'apartmentOwner') {
                    header("Location: index-AfterLoginApartmentOwner.php");
                    exit();
                } else if ($row['user_role'] === 'students') {
                    header("Location: index-AfterLoginUserchoics.php");
                    exit();
                } else {
                    // Handle other roles or show an error
?>
                    <script type="text/javascript">
                        alert("You do not have permission to access this page.");
                        window.location.href = "login1.php";
                    </script>
                <?php
                }
            } else {
                ?>
                <script type="text/javascript">
                    alert("The email address or password is invalid !!!");
                    window.location.href = "login1.php";
                </script>
            <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("The email address or password is invalid !!!");
                window.location.href = "login1.php";
            </script>
<?php
        }
    }
} else {
    exit();
}
?>