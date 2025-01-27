<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);

    $sql = "INSERT INTO users (name, email, dob) VALUES ('$name', '$email', '$dob')";

    if (mysqli_query($conn, $sql)) {
        header('Location: success.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
