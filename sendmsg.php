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

echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">'
echo '<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>'
echo '<link href="css/myStylesheet.css" type="text/css" rel="stylesheet"/>'
echo '<div class="card-panel teal lighten-2">Go back</div>'

$conn->close();
?>