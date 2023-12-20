<?php
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

// Handle sign-up request
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Simple validation
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        // Hash the password (you should use password_hash in a real-world scenario)
        // $hashedPassword = md5($password);

        // Insert data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Sign up successful";
            ?>
            <script>
                window.location.href = "../html/login.html";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>