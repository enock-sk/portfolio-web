<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Insert data into database
$sql = "INSERT INTO portfolio (name, email,title,message) VALUES ('$name', '$email','$title','$message')";

if (mysqli_query($conn, $sql)) {
  echo "Successfully.Thankyou for conducting.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
