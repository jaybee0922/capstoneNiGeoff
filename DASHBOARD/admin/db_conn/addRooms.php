<?php
include "db__conn.php";

$accommodation = $_POST['accomodation'];
$avail_rooms = $_POST['avail_rooms'];
$room_from = $_POST['room_from'];
$room_to = $_POST['room_to'];
$price = $_POST['price'];

// Check if any of the fields are empty
if (empty($_POST['accomodation']) || empty($_POST['avail_rooms']) || empty($_POST['room_from']) || empty($_POST['room_to']) || empty($_POST['price'])) {
    echo json_encode(array("status" => "error", "message" => "All fields are required"));
    exit();
}

// File upload handling
$img = null; // Initialize to null
if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {

    $uploadFolder = '../db_conn/room-img/';

    $imgFileName = uniqid() . '_' . $_FILES['img']['name'];

    // Move the uploaded file to the specified folder
    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFolder . $imgFileName)) {
        $img = $imgFileName; // Save only the image name and extension
    } else {
        die(json_encode(array("success" => false, "message" => 'Error moving uploaded file. ' . $_FILES['img']['error'])));
    }
}

$sql = "INSERT INTO `rooms` (`img`, `accomodation`, `avail_rooms`, `room_from`, `room_to`, `price`)
 VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die(json_encode(array("success" => false, "message" => 'Error preparing statement: ' . mysqli_error($conn))));
}

mysqli_stmt_bind_param($stmt, "ssiiid", $img, $accommodation, $avail_rooms, $room_from, $room_to, $price);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(array("status" => "success", "message" => "Room Added.", "redirect" => "aRooms.php"));
    exit();
} else {
    echo json_encode(array("status" => "error", "message" => "Error on Server: " . mysqli_error($conn)));
    exit();
}

mysqli_stmt_close($stmt);
$conn->close();
