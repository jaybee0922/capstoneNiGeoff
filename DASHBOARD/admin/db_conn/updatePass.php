<?php
require "db__conn.php";
session_start();

$new_pass = $_POST['new_password'];
$confirm_pass = $_POST['confirm_password'];

// Validate new password
if (empty(trim($new_pass)) || strlen(trim($new_pass)) < 6) {
    echo json_encode(array("success" => false, "message" => "Invalid Password."));
    exit();
}

// Validate confirm password
if (empty(trim($confirm_pass)) || $new_pass !== $confirm_pass) {
    echo json_encode(array("success" => false, "message" => "Password Mismatch."));
    exit();
}

// Prepare an update statement
$sql = "UPDATE adminacc SET password = ? WHERE id = ?";
if ($stmt = mysqli_prepare($conn, $sql)) {
    // Set parameters
    $param_password = password_hash($new_pass, PASSWORD_DEFAULT);

    // Check if 'user_id' is set in the session
    if (isset($_SESSION['user_id'])) {
        $param_id = $_SESSION['user_id'];

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Password updated successfully. Destroy the session, and send a JSON response
            echo json_encode(array("success" => true, "message" => "Password Updated.", "redirect" => "home.php"));
            exit();
        }
    } else {
        // 'user_id' is not set in the session. Send a JSON response indicating an issue.
        echo json_encode(array("success" => false, "message" => "User Not Authenticated."));
        exit();
    }
    // Close statement
    mysqli_stmt_close($stmt);
}

// If the code reaches here, there was an issue with the update. Send a JSON response
echo json_encode(array("success" => false, "message" => "Server Problem."));
exit();
?>

