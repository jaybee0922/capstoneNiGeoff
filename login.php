<?php
function loginUser($data)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration__db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $loginUsername = $data['username'];
        $loginPassword = $data['password'];

        $stmt = $conn->prepare("SELECT `username`, `password` FROM `registrationDB` WHERE `username` = :username");
        $stmt->bindParam(':username', $loginUsername);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($loginPassword, $result['password'])) {
            $_SESSION['username'] = $loginUsername;
            echo json_encode(['success' => true, 'username' => $loginUsername]);
        } else {
            echo json_encode(['success' => false]);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

$data = json_decode(file_get_contents("php://input"), true);
loginUser($data);
