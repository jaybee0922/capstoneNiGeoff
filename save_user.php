<?php
function saveUser($data)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration__db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $age = $data['age'];
        $number = $data['number'];
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO `registrationDB` (`firstname`, `lastname`, `age`, `number`, `username`, `password`) VALUES (:firstName, :lastName, :age, :number, :username, :password)");
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

$data = json_decode(file_get_contents("php://input"), true);
saveUser($data);
