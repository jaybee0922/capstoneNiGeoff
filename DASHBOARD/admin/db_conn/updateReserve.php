<?php
include "db__conn.php";

$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE reservations SET status = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "si", $status, $id);

if (mysqli_stmt_execute($stmt)) {
  echo json_encode(array("success" => true, "message" => "Status Updated.", "redirect" => "reservation.php"));
  exit();
}else {
  echo json_encode(array("success" => false, "message" => "Error on Server"));
exit();
}

?>