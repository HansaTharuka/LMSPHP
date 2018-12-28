<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/site/home.php");
    exit;   
}

?>


<?php require_once('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main/style.css">
    <link rel="stylesheet" href="./main/bootstrap.min.css">
    <title>LMS</title>
</head>

<body>

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img" style="padding-top: 10%; background-image:url(Images/abc.jpg); width:100%; height:100%;">
            <div class="container flex-center">
                <h3 class="cart-head">Update Or Delete Books</h3>
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
                       
            <div class="container con-addpdct">
                <div class="col-lg-12">
                    
                            
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
                            
                            $result = mysqli_query($conn,"SELECT * FROM product");
                            
                            echo '<table class="table table-hover table-dark">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Book ID</th>';
                            echo '<th>Name</th>';
                            echo '<th>Author</th>';
                            echo '<th>Type</th>';
                            echo '<th>Image</th>';
                            echo '<th>Edit</th>';
                            echo '<th>Delete</th>';
                            echo '</tr>';
                            echo '</thead>';
                            
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['productId'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['author'] . "</td>";
                            echo "<td>" . $row['type'] . "</td>";
                            echo "<td >" .'<img src="data:image/jpg;base64,'.base64_encode($row['image']).'" alt="" class="img-thumbnail promo-img"/>'. "</td>";
                            echo "<td>

                            <form action='adminupdateproduct.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['productId'].">
                            <input type='hidden' id='name' name='name' value=".$row['name'].">
                            <input type='hidden' id='author' name='author' value=".$row['author'].">
                            <input type='hidden' id='type' name='type' value=".$row['type'].">
                            
                            <input class='btn btn-primary' type='submit' value='Edit'/>
                            </form>
                            
                            </td>";
                            echo "";
                            echo "<td>
                            <form action='Deletebook.php' method='post'>
                            <input type='hidden' id='productid' name='productid' value=".$row['productId']."/>
                            <input class='btn btn-primary' type='submit' value='Delete'/>
                            </form>
                            </td>";
                            echo "</tr>";
                            
                            }
                            echo "</table>";
                            
                            mysqli_close($conn);
                            ?>
                        
                    <div class="form-group">
                                <a href="./adminpanel.php" type="button" class="btn btn-success add-pdct-btn">Back
                                    to Admin Panel</a>
                            </div>
                </div>
                <br>
            </div>
            </form>
            <div class="row img-row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="Kottu1" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="Kottu2" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="Kottu3" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="Kottu4" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>






















































<script src="main/bootstrap.min.js"></script>
</body>

</html>