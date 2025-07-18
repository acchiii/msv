<?php

include 'connect.php';

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];

// Insert into database
$sql = "INSERT INTO booking (name, email, phone, checkin, checkout, guests)
VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$guests')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful! Thank you, " . htmlspecialchars($name) . ".";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



