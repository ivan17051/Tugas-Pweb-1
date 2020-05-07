<!DOCTYPE html>
<html lang="en">

<head>
    <title>X Store - Your Trusted Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Main css -->
    <link href="../css/style-products.css?v=<?php echo time();?>" rel="stylesheet">

    <script type="text/javascript" src="../js/iconwc.js"></script>
</head>

<body>
    <!-- db conn -->
    <?php require '../conn.php' ?>
    <?php 
        $query = $db->prepare('SELECT nama, harga, gambar FROM tproduk');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        //  print_r($result);
    ?>
    <!-- Nav Menu -->
    <?php session_start(); 
        if(isset($_GET['logout'])){
            unset($_SESSION['logged-in']);
            header('Location: home.php');
        }
    ?>

    <div class="nav-menu fixed-top">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg">

                <a class="d-inline-block mr-5" href="../home.php"><img src="../images/logo.png" style="width:150px" alt="logo"></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="../home.php">HOME</a> </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Sandisk</a>
                                <a class="dropdown-item" href="#">Kingston</a>
                                <a class="dropdown-item" href="#">Transcend</a>
                            </div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="../aboutus.php">ABOUT US</a> </li>
                        <?php if(isset($_SESSION['logged-in'])): ?>
                                <li class="nav-item"><a href="../cart.html" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Cart</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span> 
                                        <strong id="nama-atas">Hi Ivan!</strong>
                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <div class="navbar-logout">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="text-center">
                                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <p class="text-left"><strong id="nama-bawah">RM Ivan</strong></p>
                                                        <p class="text-left small">anjay@email.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="navbar-logout">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p>
                                                            <a href="home.php?logout=1" class="btn btn-danger btn-block">Log Out</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php else: ?>
                                <li class="nav-item"><a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Login</a></li>
                                <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

    <header class="bg-gradient">

    </header>


    <div class="mb-3 bd-bottom">

    </div>
    <div class="container-fluid bd-bottom mb-3">
        <nav class="nav-index" id="nav-index">
            <ul class="list inline">
                <li class="list-inline-item"><a href="../index.html">Home</a></li>
                <li class="list-inline-item"><a href="#">Page2</a></li>
                <li class="list-inline-item"><a href="#">Page3</a></li>
            </ul>
        </nav>
    </div>

    <div class="wrapper m-4">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <p class="bd-bottom">Dummy Heading</p>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled">
                        <li>
                            <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="toggle">Page
                                1</a>
                            <ul class="collapse list-unstyled">
                                <li>
                                    <a href="#">subPage 1</a>
                                </li>
                                <li>
                                    <a href="#">subPage 2</a>
                                </li>
                                <li>
                                    <a href="#">subPage 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <div class="row">
                
                <div class="container-fluid">
                    hai
                </div>
                
            </div>
        </div>
    </div>

    <!-- // end .section -->
    <footer class="my-5 text-center">
        <div class="col-12">
            <!-- Copyright removal is not prohibited! -->
            <p class="mb-2"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. </small></p>
        </div>

    </footer>

    <script type="text/javascript"></script>
    <!-- jQuery and Bootstrap -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/script.js"></script>
    <script>
        $(document).ready(function () {
            $('a.dropdown-toggle').on('click', function () {
                // alert("The paragraph was clicked.");
                if ($(this).next().hasClass('show')) {
                    $(this).next().collapse('hide');
                    $(this).attr('aria-expanded', 'false');
                } else {
                    $(this).next().collapse('show');
                }
            });
        });
    </script>
</body>

</html>