<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmsphp";

$productId = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE adminapprovel SET statuss='yp' WHERE id=$productId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header("Location:  http://localhost/LMSPHP/adminapproveandgivebook.php");
exit;
?>