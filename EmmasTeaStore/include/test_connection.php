<?php
// Include the database connection file
include 'dbConnection.php';

// Check if the connection is successful
if ($db->ping()) {
    echo "Connection is active!";
} else {
    echo "Connection failed: " . $db->error;
}

?>