<?php
// Include your database connection file
include("dbConnection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // Hash the password using MD5

    // Insert user data into the database
    $sql = "INSERT INTO customer (FirstName, LastName, email, PasswordMD5Hash) VALUES ('$firstName', '$lastName', '$email', '$password')";

    if ($db->query($sql) === TRUE) {
        "Successfully registered. Redirecting to login page...";
        header("Refresh: 3; URL=login-page.php"); // Redirect after 3 seconds
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        echo "Error: Registration failed. Please check your data and try again.";
    exit();
    }
}

// Close the database connection
$db->close();
?>

