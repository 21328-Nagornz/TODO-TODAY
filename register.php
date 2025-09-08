<?php
$connect = new mysqli("localhost", "root", "", "myapp");

if ($connect->connect_error) {
    die("Failed to connect to database: " . $connect->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "INSERT INTO users (username, password, email)
        VALUES ('$username', '$password', '$email')";

if ($connect->query($sql) === TRUE) { echo "Registered successfully"; }
else { echo "An unexpected error occurred"; }

$connect->close();
?>