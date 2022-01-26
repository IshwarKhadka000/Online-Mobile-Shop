<?php
session_start();
if(!isset($_SESSION['firstrun'])){    
    $_SESSION['firstrun'] = 'firstrun';    
    $_SESSION['login'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mobile Shop</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
        //require function.php file
        require('functions.php');
    ?>
</head>
<body>
    <!-- Start header -->
    <header id="header"> 
        <div class="strip d-flex justify-content-between px-4 py1 bg-light">
            <p class="font-rale font-size-14 text-black-50 m-0">Madhyapur thimi-6, Bhaktapur,9828039221</p>
            <div class="font-rale font-size-14">
                <?php
                if($_SESSION['login']==''){
                ?>
                    <a href="login.php" class="px-3 border-right border-left text-dark text-decoration-none">login/register</a>
                <?php 
                } 
                else{ 
                ?>
                    <a href="login.php" class="px-3 border-right border-left text-dark text-decoration-none"><?php echo $_SESSION['username']; ?></a> 
                <?php 
                }?>
                <a href="cart.php" class="px-3 border-right  text-dark text-decoration-none">Wishlist(0)</a>
            </div>
        </div>

        <!-- Start Navigation bar -->

        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Online Mobile Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse font-raleway font-size-16" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="allproducts.php" >All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comparison.php">Comparison</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="onsale.php">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>
                        
                    </ul>
                    <!-- start cart option -->
                    <form action="#" class="font-rale font-size-14">
                        <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-dark"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                    <!-- end cart option -->
                </div>
                
            </div>
        </nav>
        
        <!-- End Navigation bar -->
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main id="main-site">