<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_p";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events from the database
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

$events = array();
while ($row = $result->fetch_assoc()) {
    $event = array(
        'title' => $row['title'],
        'start' => $row['start_date'],
        'end' => $row['end_date']
    );
    array_push($events, $event);
}

// Convert events array to JSON format
echo json_encode($events);

$conn->close();
