<?php

$stmts = $conn->prepare("SELECT canceled, pending, booked FROM reservations WHERE id = ?");
$stmts->bind_param("i", $id);
$stmts->execute();
$results = $stmts->get_result()->fetch_assoc();
$actionCanceled = $results['canceled'];
$actionPending = $results['pending'];
$actionBooked = $results['booked'];
