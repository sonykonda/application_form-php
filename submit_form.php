<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phd_applications";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle photo upload
$photo_name = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
$photo_folder = "uploads/";
if (!is_dir($photo_folder)) mkdir($photo_folder, 0777, true);

$photo_new_name = time() . "_" . basename($photo_name);
$photo_path = $photo_folder . $photo_new_name;

if (!move_uploaded_file($photo_tmp, $photo_path)) die("Error uploading photo.");

// Get form data
$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$qualification = $conn->real_escape_string($_POST['qualification']);
$research_area = $conn->real_escape_string($_POST['research_area']);
$statement = $conn->real_escape_string($_POST['statement']);

// Insert into database
$sql = "INSERT INTO applications 
(fullname, email, phone, dob, gender, qualification, research_area, statement, photo)
VALUES ('$fullname','$email','$phone','$dob','$gender','$qualification','$research_area','$statement','$photo_new_name')";

if ($conn->query($sql) === TRUE) {
    echo "Application submitted successfully!<br>";
    echo "<img src='$photo_path' width='150' alt='Uploaded Photo'>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
