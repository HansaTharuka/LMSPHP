<?php session_start(); ?>

<?php 
if(isset($_SESSION['bookname'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lmsphp";

    $bookname = (($_SESSION['bookname']));
    $author = ($_SESSION['author']);
    $productId = (($_SESSION['productId']));

    echo $usernamee=($_SESSION['username']);
    echo $userid= ($_SESSION['id']);
    echo $role= ($_SESSION['role']);
    echo $phone= ($_SESSION['phone']);
    echo $address= ($_SESSION['address']);


    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO adminapprovel (statuss, book_id, bookname, authorname, usernamee, userid, rolee, phone, addresse)
    VALUES ('no', '$productId', '$bookname', '$author','$usernamee', '$userid', '$role', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:  http://localhost/LMSPHP/allbooks.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
    header("Location:  http://localhost/LMSPHP/allbooks.php");
    exit;
}
?>