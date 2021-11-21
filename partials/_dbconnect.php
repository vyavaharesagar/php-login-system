<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
//     echo "Connection Successul!";
// }
// else{
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO users (username, "password", email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
?>