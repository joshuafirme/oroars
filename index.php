<?php 
include_once 'includes/connect.php'
?>
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
        <link rel="stylesheet" href="css/slider-pro.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <!-- PRELOADER -->
        <!-- <div id="preloader">
            <div class="preloader-area">
            	<div class="preloader-box">
            		<div class="preloader"></div>
            	</div>
            </div>
        </div> -->


        <?php include('./header_strip.php')?>
<!--Header-->
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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="reservation.php">Book a Reservation</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li class="active">
                            <li><a href="gallery.php">Gallery</a></li>
                            </li>
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
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/background.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2>A good <b>restaurant</b>is like a <b>vacation;</b>it transports you,</h2>
                            <h3>and it becomes a lot more than just about the food.</h3>
                            <a href="reservation.php">Reserve Now</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/healtht.png" width="1648" height="600" alt="">
                    </div>
                    <div class="item ">
                        <img src="images/slider.png" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2>Discounts <b>&</b> Promos</h2>
                            <h3><Span>SALE</Span></h3>
							
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section>


        <!--Chicken, Pork, Seafood-->
        <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                        <div class="service-item">
                            <i><img src="https://img.icons8.com/plumpy/64/000000/thanksgiving-turkey.png"/></i>
                            <h3>Chicken</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                        <div class="service-item">
                            <i><img src="https://img.icons8.com/ios-filled/64/000000/steak-rare.png"/></i>
                            <h3>Pork</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="service-item">
                            <i><img src="https://img.icons8.com/glyph-neue/64/000000/prawn.png"/></i>
                            <h3>Seafoods</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--New Recipe-->
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

        <section class="best-seller-section">
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
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.4s">
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
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.6s">
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
        </section>

<!--Customer feedback and Suggestions-->
<section class="review-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Customer Feedback and Suggestion</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="feedback" class="carousel slide feedback" data-ride="feedback">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/m1.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
								<p>Are ay comment ng customer abay sadya la naman</p>
                                    <h3>- Odessa -</h3>
                                    <span>Brgy. Dalig</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/m2.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
                                    <p>Aguy pagkakainam</p>
									<h3>- Uweng -</h3>
                                    <span>Calaca</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/m3.png" width="320" height="439" alt="">
                                <div class="carousel-caption">
                                    <p>Abay sya nga</p>
									<h3>- Erot -</h3>
                                    <span>Gapas</span>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators review-controlar">
                            <li data-target="#feedback" data-slide-to="0" class="active">
                                <img src="images/m1.png" width="320" height="439" alt="">
                            </li>
                            <li data-target="#feedback" data-slide-to="1">
                                <img src="images/m2.png" width="320" height="439" alt="">
                            </li>
                            <li data-target="#feedback" data-slide-to="2">
                                <img src="images/m3.png" width="320" height="439" alt="">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!--News And Events-->
        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Latest News and Events</h1>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <a href="#"><img src="menu/newsandevents/events.png" width="350" height="262" alt=""></a>
                            <h3>Private Reception / August 27th- Friday</h3>
                            <p>Store Hours: 9:00am-12:30pm</p>
                            <p>‼️Please be advised‼️ <br>
                                #DavidsGrillbyBe4 will close at 12:30pm today, Friday - August 27th to accommodate a private event. We will see you again tomorrow on our regular business hours. 
                                <br>Thanks and God bless!</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <a href="#"><img src="menu/newsandevents/promo.jpg" width="350" height="262" alt=""></a>
                            <h3>📣 Promo Alert ‼</h3>
                            <p>B U Y  3️⃣  G E T  1️⃣  F R E E ! ! ! <br>
                            Since our day is short on Wednesdays, we wanted to treat you with a FREE MEDIUM OR LARGE DRINK WHEN YOU BUY ANY 3 DRINKS OF ANY SIZE.
                            <br> Please note our store hours today is only until 5pm, so COME AND HURRY to avail this PROMO! <br>
                            
                            #DavidsGrillbyBe4 <br>
                            #VenicesGardenbyBe4 <br>
                            #CoffeeAndMore</p>

                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <a href="#"><img src="menu/newsandevents/prevalentines.jpg" width="350" height="262" alt=""></a>
                            <h3>PRE-VALENTINES DINNER with your FOREVER</h3>
                            <p>We have a weekly date with our FOREVER, Sorry that we are closed on Valentines Day. #SundayisforJesus
                                BUT, for those of you who are trying to avoid the crowd tomorrow, WE ARE OPEN UNTIL 9PM tonight. <br>
                                Please make sure to call us to make your reservation for your PRE-VALENTINES DINNER with your FOREVER 😊 <br>

                                #DavidsGrillbyBe4 #CoffeeAndMore  <br>
                                #VeniceGardenbyBe4 #PreValentinewithus</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Get in Touch-->
        
        <section id="contactus" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <br>
                            <h1 >GET IN TOUCH</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                            <h1><span>D</span>avids <span>G</span>rill</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>providing you good service and food is our desire and job we would love to talk to you </p>
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
        <script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/class/menu.class.js"></script>
        <script src="js/menu.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
