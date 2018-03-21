<?php
$servername = "localhost:3306";
$username = "Amin123";
$password = "Amin123";
$dbname = "materialDb";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$colour = $_POST['colour'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contactUs (firstName, lastName, email, message, colour) VALUES ('$firstName', '$lastName', '$email', '$message', '$colour')";

if ($conn->query($sql) === TRUE){
    echo header ('Location: confirm.html');
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>