<?php
include "db__conn.php";

$sql = "SELECT * FROM reservations ORDER BY id DESC";
$run_sql = mysqli_query($conn, $sql);
$output = [];

if (mysqli_num_rows($run_sql) > 0) {
    while ($row = mysqli_fetch_assoc($run_sql)) {
        $output[] = $row;
    }
} else {
    $output["empty"] = "empty";
}

header('Content-Type: application/json');
echo json_encode($output);
?>
