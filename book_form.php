<?php
$connection = new mysqli('localhost', 'root', '23520008', 'travel_book');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $stmt = $connection->prepare("INSERT INTO book (name, email, phone, address, location, guests, arrival, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    if ($stmt->execute()) {
        header('Location: book.php');
        exit(); 
    } else {
        echo "Something went wrong: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();
?>