

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ORORS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="preloader-area">
            	<div class="preloader-box">
            		<div class="preloader"></div>
            	</div>
            </div>
        </div>


        <?php include('./header_strip.php')?>
<!--Header to ah-->
<header class="header-section">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/logo.jpeg" width="320" height="439"></a>
                        <br>
                        <br>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <br> <br>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="menu.php">Menu</a></li>
                            <li><a href="reservation.php">Book a Reservation</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="#contactus">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="addcart.php"><span> Cart </span> <span class="shoping-cart">0</span></a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>       

        <?php include('./search_option.php') ?>


        <!---Yung nagsaslide sa una-->
        <section class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/background.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2> <b>Our Menu</b></h2>
                            <h3><b>Foods & Drinks</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--New Recipe-->
        <!-- <section class="new-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>NEW Recipe</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                        <div class="product-item">
                            <img src="images/1.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <br>
                                    <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Tempura</h3>
                                    <span>&#8369 350.00</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


<!--Dish We Offer-->
        <section class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Dishes we offer</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul class="button-group sort-button-group" id="menu_tabs">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="menu_container">

                </div>
            </div>
        </section>

<!--Drinks we Offer
<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Drinks We Offer</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-menu">
                    <ul class="button-group sort-button-group">
                        <li class="button active" data-category="all">All<span>2</span></li>
                        <li class="button" data-category="cat-1">Milk Tea<span>1</span></li>
                        <li class="button" data-category="cat-2">Fruit Tea<span>1</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured isotope">

            <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/Drinksz/DFrappeTaro.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="sell-meta">
                        <a href="#" class="new-item">Add to Order</a>
                    </div>
                    <div class="product-hover">
                        <div class="product-meta">
                            <br>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Taro</h3>
                            <span>&#8369 99.00</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/Drinksz/DFruitTeaPeach.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="sell-meta">
                        <a href="#" class="new-item">Add to Order</a>
                    </div>
                    <div class="product-hover">
                        <div class="product-meta">
                            <br>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Peach Tea</h3>
                            <span>&#8369 75.00</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<!--Best Seller n-->
<!-- <section class="best-seller-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>BEST SELLERS</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Dish-->
            <!-- <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="product-item">
                    <img src="menu/BSeller/BSTBone.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <br>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>T-Bone Steak</h3>
                            <span>&#8369 235.00</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--drinks-->
            <!-- <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="menu/Drinksz/PeachB.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <br>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Peach</h3>
                            <span>&#8369 100</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

    <!--Get Intouch Section-->
        <section id="contactus" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>GET IN TOUCH</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                            <h1><span>D</span>avids<span>G</span>rill</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                            <div class="contact-info">
                                <p><b>Main Office:</b> 396 Brgy. Santol</p>
                                <p><b>Phone:</b> 09975242698</p>
                                <p><b>Email:</b> davidsgrillrestosy2021@gmail.com</p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="https://web.facebook.com/DavidsGrillbyBe4/menu/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/davids_grill"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/davidsgrill_2021/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <form action="" method="" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Website URL">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Your Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="submit" class="contact-submit" value="Send" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center">Made with <i class="fa fa-heart"></i> <a href="" target="_blank">Group3</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-12">
                        <p class="center"> <a href="termspolicy.php" target="_blank">Terms and Privacy Policy</a> </p>
                    </div>
                    <br>
                </div>
            </div>
        </footer>
        
        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/class/menu.class.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
