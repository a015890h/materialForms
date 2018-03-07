<?php
$servername = "localhost:3306";
$username = "Amin123";
$password = "Amin123";
$dbname = "materialDb";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contactUs (firstName, lastName, email, message) VALUES ('$firstName', '$lastName', '$email', '$message')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfuly";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>