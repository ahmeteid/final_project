<?php
session_start();
// // Assuming your MySQL server is running on localhost with the username "root" and no password.
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "final_project";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Handle authentication request
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password (you should use password_hash in a real-world scenario)
    // $hashedPassword = md5($password);

    // Query the database for authentication
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            //display all of them
            $username = $row["username"];
        }
        echo "success";
        $_SESSION["username"] = $username;
        ?> 
        <script>
            window.location.href = "../html/index.php";
        </script>
        <?php
    } else {
        echo "failure";
    }
}

// Close the database connection
$conn->close();
?>