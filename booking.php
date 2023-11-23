<?php
function saveBooking($data)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration__db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $checkInDate = $data['checkInDate'];
        $checkOutDate = $data['checkOutDate'];
        $qtyRooms = $data['qtyRooms'];
        $selectedRoomType = $data['selectedRoomType'];
        $selectedRoomPrice = $data['selectedRoomPrice'];
        $totalAmount = $selectedRoomPrice * $qtyRooms;
        $bookingStatus = 'Pending';

        $stmt = $conn->prepare("INSERT INTO reservations (guest, trans_date, check_in, check_out, room_type, room_qty, assigned_room, status) VALUES (?, NOW(), ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $guest);
        $stmt->bindParam(2, $checkInDate);
        $stmt->bindParam(3, $checkOutDate);
        $stmt->bindParam(4, $selectedRoomType);
        $stmt->bindParam(5, $qtyRooms);
        $stmt->bindParam(6, $assignedRoom);
        $stmt->bindParam(7, $bookingStatus);

        // Set values for the parameters
        $guest = 'guest';
        $assignedRoom = '0';

        $stmt->execute();

        echo json_encode(['status' => 'success', 'message' => 'Booking successful']);
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Booking failed: ' . $e->getMessage()]);
    }

    $conn = null;
}

$data = json_decode(file_get_contents("php://input"), true);
saveBooking($data);
