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
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mobile']) && isset($_POST['EventType']) && isset($_POST['Package']) && isset($_POST['eventdate']) && isset($_POST['eventtime']) && isset($_POST['budget']) && isset($_POST['location']) &&isset($_POST['venue']) && isset($_POST['requirements'])) {
    // Get form values
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $eventtype = $_POST['EventType'];
	$package = $_POST['Package'];
	$eventdate = $_POST['eventdate'];
	$eventtime = $_POST['eventtime'];
	$budget = $_POST['budget'];
	$location = $_POST['location'];
	$venue = $_POST['venue'];
    $requirements = $_POST['requirements'];

    // Insert into database using prepared statement
    $sql = "INSERT INTO booking (firstname,lastname,mobile,eventtype,package,eventdate,eventtime,budget,location,venue,requirements) VALUES (?, ?, ?, ?, ?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssssssssss", $firstname,$lastname,$mobile,$eventtype,$package,$eventdate,$eventtime,$budget,$location,$venue, $requirements);
        if ($stmt->execute()) {
            echo "Your bookings has been submitted successfully!";
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
