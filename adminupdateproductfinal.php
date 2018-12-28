<?php 

require_once('connection.php'); 

if(isset($_POST['productid'],$_POST["author"],$_POST["type"])){

$productId = ($_POST["productid"]);
$author = ($_POST["author"]);
$type = ($_POST["type"]);
$productname=($_POST["productname"]);

// echo $productId;
// echo $productName;
// echo $productAmount;
// echo $productImage;


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lmsphp';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE product SET name='$productname',author='$author', type='$type' WHERE productId=$productId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();




}

header("Location: http://localhost/LMSPHP/adminupdatedeletebooks.php");
exit;     
?>