<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php 
$name = $_POST['name'];
$author = $_POST['author'];
$productId = $_POST['productId'];

    $_SESSION['bookname']=$name;
    $_SESSION['author']=$author;
    $_SESSION['productId']=$productId;


echo $name;
echo $author;
echo $productId;
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmsphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE product SET reserve='yp' WHERE productId=$productId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header("Location:  http://localhost/LMSPHP/adminapprove.php");
exit;
?>