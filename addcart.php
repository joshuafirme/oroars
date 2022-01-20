<!doctype html>
<html class="no-js" lang="en">

    <!--Header towsss-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ORORS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylecart.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
      </head>

    <!--Body-->
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

<!--Header section-->
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
                            <li><a href="menu.php">Menu</a></li>
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
            
        <!--Search Section to -->  
        <section class="search-section">
          <div class="container">
              <div class="row subscribe-from">
                  <div class="col-md-12">
                      <form class="form-inline col-md-12 wow fadeInDown animated">
                          <div class="form-group">
                              <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                              <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                          </div>
                      </form><!-- end /. form -->
                  </div>
              </div><!-- end of/. row -->
          </div><!-- end of /.container -->
      </section><!-- end of /.news letter section -->


        <!--Cart Section-->
        <div class="cart">
        
                <div class="shopping-cart">
                
                    
                  <!-- Title -->
                  <div class="title">
                    Cart
                  </div>
                  <!--Title head of the cart-->
                  <div class= "titleheadcart">
                    <div class="checkboxtitle">
                      Add
                    </div>
                    <div class="producttitlehead">
                      Product
                    </div>
                    <div class="productdesctitlehead">
                      Description
                    </div>
                    <div class = "pricetitlehead">
                      Price
                    </div>
                    <div class="quantitytitlehead">
                      Quantity
                    </div>
                    <div class = "totalpricetitlehead">
                      Total Price
                    </div>
                  </div>
                  <div id="cart_container"></div>
                  <div class="remove_checkout"> 
                      <div>
                          <h2>Order Price : &#8369 <span id="total_order_price">0.00</span></h2>
                      </div>
                    <div style="text-align:right">
                        <button><a href="#" class= "removebutton removebutton-primary">Remove</a></button>
                        <button><a href="checkout.php" class= "checkoutbutton checkoutbutton-primary">Checkout</a></button>
                    </div>
                  </div>
                </div>
              </div>
 <!--Get in Touch-->
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
                            <h1><span>D</span>avids<span> G</span>rill</h1>
                            <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                            <div class="contact-info">
                                <p><b>Main Office:</b> 396 Brgy. Santol</p>
                                <p><b>Phone:</b> 1.555.555.5555</p>
                                <p><b>Email:</b> resto@gmail.com</p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
                        <p class="center"> <a href="" target="_blank">Terms and condition</a> <br><a href="" target="_blank">    Privacy and Policy</a></p>
                    </div>
                    <br>
                </div>
            </div>
        </footer>
        

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/class/cart.class.js"></script>
        <script src="js/cart_list.js"></script>
        <script>
            if(!getCookie('user_id')){
                window.location.href="loginpage.php"
            }
            
        </script>
                    
    </body>
</html>