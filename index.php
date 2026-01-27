<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Use your actual DB username
$password = "";     // Use your actual DB password
$dbname = "twingroup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3308);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['location']) &&isset($_POST['eventdate']) && isset($_POST['message'])) {
    // Get form values
    $name = $_POST['name'];
    $mobile = $_POST['phone'];
    $location = $_POST['location'];
    $eventdate = $_POST['eventdate'];
    $message = $_POST['message'];

    // Insert into database using prepared statement
    $sql = "INSERT INTO enquiry (name, mobile, location,eventdate,message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $mobile, $location,$eventdate, $message);
        if ($stmt->execute()) {
            echo "<script>alert('Your enquiry has been submitted successfully!'); window.location.href='index.html';</script>";
        } else {
            echo "Execute failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Prepare failed: " . $conn->error;
    }
} else {
    echo "Required form fields are missing.";
}

$conn->close();
?>
