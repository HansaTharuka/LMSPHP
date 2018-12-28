
<?php 
session_start();

if($_SESSION['role'] !=1){
    header("Location: http://localhost/LMSPHP/home.php");
    exit;   
}

?>



<!DOCTYPE html>
<?php   
 include("connection.php"); //include the config
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>LMS</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" id="nav-color">
        <img src="" alt="">
        <a class="navbar-brand" href="#">LMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto nav-list ">
        <li class="nav-item">
                    <a class="nav-link" href="./allbooks.php">All Books</a>
                </li>
                <?php 
                if(isset($_SESSION['username'])){
    echo "<li class='nav-item'>
    <a class='btn btn btn-warning' href='logout.php'>Logout</a>
    </li>";
}

?>
            </ul>
        </div>
    </nav>


    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img" style="padding-top: 10%; background-image:url(Images/abc.jpg); width:100%; height:100%;">
            <div class="container flex-center">
                <h3 class="cart-head">ADMIN PANEL</h3>
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
            <div class="container">
                <div class="offset-lg-4 col-lg-4">
                    <table class="table table-hover table-dark adm-tbl">
                        <thead>
                            <tr>
                                <th scope="col">NUMBER</th>
                                <th scope="col">ADMIN ACTIVITY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                <!-- <form action="./adminaddproduct.php">
                                <input type="button" class="btn btn-primary ad-btn" style="line-height: 3em;" value="Add Products">
                                </form> -->
                                    <a href="./adminaddbooks.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Add Books</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <a href="./adminapproveandgivebook.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Give Approvel</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <a href="./approvedbooks.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Approved Books</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <a href="./adminupdatedeletebooks.php" type="button" class="btn btn-primary ad-btn" style="line-height: 3em;">Update Delete Books</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>


                <!-- image line -->
                <div class="row" id="row1">
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
        </div>
    </section>
















































</body>

</html>