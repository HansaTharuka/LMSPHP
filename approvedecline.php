<?php 
session_start();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmsphp";

$id = (($_POST['id']));
$bookid = ($_POST['book_id']);

echo $order_orderId;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE product SET reserve='no' WHERE productId=$bookid";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $sql = "DELETE FROM adminapprovel WHERE id=$id";
    if($conn->query($sql) === TRUE){
        header("Location:  http://localhost/LMSPHP/adminapproveandgivebook.php");
        exit;
        echo "Deleted";
    }else{

    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();




?>

