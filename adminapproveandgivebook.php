<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/LMSPHP/home.php");
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
    <title>KOTTU.LK</title>
</head>

<body>

    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img" style="padding-top: 10%; background-image:url(Images/abc.jpg); width:100%; height:100%;">
            <div class="container flex-center">
                <h3 class="cart-head">Process Book Order</h3>
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
                            
                            $result = mysqli_query($conn,"SELECT * FROM adminapprovel WHERE statuss = 'no'");
                            
                            echo '<table class="table table-hover table-dark">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Book Id</th>';
                            echo '<th>Book Name</th>';
                            echo '<th>User Name</th>';
                            echo '<th>Phone</th>';
                            echo '<th>Requested Date</th>';
                            echo '<th>User Address</th>';
                            echo '<th>Approve</th>';

                            echo '<th>Decline</th>';
                            // echo '<th>Decline</th>';
            
                            echo '</tr>';
                            echo '</thead>';
                            
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>" . $row['book_id'] . "</td>";
                                echo "<td>" . $row['bookname'] . "</td>";
                                echo "<td>" . $row['usernamee'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['reg_date'] . "</td>";
                                echo "<td>" . $row['addresse'] . "</td>";
                                echo "<td>
                                <form action='approvecomplete.php' method='post'>
                                <input type='hidden' id='id' name='id' value=".$row['id'].">
                                <input type='hidden' id='userid' name='userid' value=".$row['userid'].">
                                <input class='btn btn-primary' type='submit' value='Approved'>
                                </form>
                                </td>";
                                echo "<td>
                                <form action='approvedecline.php' method='post'>
                                <input type='hidden' id='id' name='id' value=".$row['id'].">
                                <input type='hidden' id='book_id' name='book_id' value=".$row['book_id'].">
                                <input type='hidden' id='userid' name='userid' value=".$row['userid'].">
                                <input class='btn btn-danger' type='submit' value='Declined'>
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
                    <img src="./Images/abc.jpg" alt="book" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="book" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="book" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="./Images/abc.jpg" alt="book" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>




















































<script src="main/bootstrap.min.js"></script>
</body>

</html>