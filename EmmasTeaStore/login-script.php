<?php
// Include your database connection file
include("dbConnection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // Hash the password using MD5

    // Check user credentials
    $sql = "SELECT * FROM customer WHERE email = '$email' AND PasswordMD5Hash = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // User authentication successful
        session_start();
        $_SESSION["email"] = $email; // Store user email in session for future use if needed
        header("Location: index.php"); // Redirect to index.php
        exit();
    } else {
        // User authentication failed
        echo "Invalid email or password. Please try again.";
    }
}

// Close the database connection
$db->close();
?>