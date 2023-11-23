<?php
include "db__conn.php";
// include "getActions.php";


$status = $_POST['status'];
$id = $_POST['id'];

// select all the actions.
$stmts = $conn->prepare("SELECT canceled, pending, booked FROM reservations WHERE id = ?");
$stmts->bind_param("i", $id);
$stmts->execute();
$results = $stmts->get_result()->fetch_assoc();
$actionCanceled = $results['canceled'];
$actionPending = $results['pending'];
$actionBooked = $results['booked'];





$stmt4 = $conn->prepare("SELECT assigned_room FROM reservations WHERE id = ?");
$stmt4->bind_param("i", $id);
$stmt4->execute();
$result4 = $stmt4->get_result()->fetch_assoc();
$currAssign = $result4['assigned_room'];





// Select the available rooms
$stmt3 = $conn->prepare("SELECT avail_rooms FROM rooms");
$stmt3->execute();
$result3 = $stmt3->get_result()->fetch_assoc();
$avail_rooms = $result3['avail_rooms'];

// Update rooms
$sql2 = "UPDATE rooms SET avail_rooms = ? WHERE id = ?";
$stmt2 = $conn->prepare($sql2);


if ($status == "booked") {
  $assigned_room = rand(401, 420);
  $qty = $_POST['qty'];
  $minus = $avail_rooms - $qty;

  $stmt2->bind_param("ii", $minus, $id);
  $stmt2_result = $stmt2->execute();

  $actionBooked++; // Increment the booked count

  $stmt0 = $conn->prepare("UPDATE reservations SET booked = ? WHERE id = ?");
  $stmt0->bind_param("ii", $actionBooked, $id);
  $stmt0->execute();

  if ($actionBooked > 1) {
    $assigned_room = $currAssign;
    $qty = 1;
    $times = $avail_rooms * $qty;
    $stmt2->bind_param("ii", $times, $id);
    $stmt2->execute();
  } else if ($actionBooked == 1) {
    $actionCanceled = 0; // Increment the canceled count
    $actionPending = 0; // Increment the pending count

    $stmt0 = $conn->prepare("UPDATE reservations SET canceled = ?, pending = ? WHERE id = ?");
    $stmt0->bind_param("iii", $actionCanceled, $actionPending, $id);
    $stmt0->execute();
  }
} else if ($status == "canceled" || $status == "pending") {
  $assigned_room = 0;
  $qty = $_POST['qty'];
  $plus = $avail_rooms + $qty;

  $stmt2->bind_param("ii", $plus, $id);
  $stmt2_result = $stmt2->execute();

  $actionCanceled++; // Increment the canceled count
  $actionPending++; // Increment the pending count

  $stmt0 = $conn->prepare("UPDATE reservations SET canceled = ?, pending = ? WHERE id = ?");
  $stmt0->bind_param("iii", $actionCanceled, $actionPending, $id);
  $stmt0->execute();

  if ($actionCanceled > 1 || $actionPending > 1) {
    $qty = 1;
    $times = $avail_rooms * $qty;
    $stmt2->bind_param("ii", $times, $id);
    $stmt2->execute();
  } else if ($actionCanceled == 1 || $actionPending == 1) {
    $actionBooked = 0; // Increment the booked count

    $stmt0 = $conn->prepare("UPDATE reservations SET booked = ? WHERE id = ?");
    $stmt0->bind_param("ii", $actionBooked, $id);
    $stmt0->execute();
  }
}

// Update reservations
$sql1 = "UPDATE reservations SET status = ?, assigned_room = ? WHERE id = ?";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("sii", $status, $assigned_room, $id);
$stmt1_result = $stmt1->execute();

// Check if both queries were successful
if ($stmt1_result && $stmt2_result) {
  echo json_encode(array("success" => true, "message" => "Status and Room Assignment Updated.", "redirect" => "reservation.php"));
  exit();
} else {
  echo json_encode(array("success" => false, "message" => "Error on Server: " . $conn->error));
  exit();
}
