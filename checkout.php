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
        <!-- <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKEGwhMZ_UXrD0mlU3RCkCrE03CgVtAFA&callback=initMap">
        </script> -->
        <script>
            
        </script>
        <style>
            .item{
                justify-content: center;
                height:auto;
            }
            .item:nth-child(odd) {background-color: #f2f2f2;}
            #cart_container{margin-bottom:0}
            #map {
                width: 50%;
                height: 350px;
                margin: 0 auto;
            }
             #three-ds-container {
            width: 550px;
            height: 450px;
            line-height: 200px;
            position: fixed;
            top: 25%;
            left: 40%;
            margin-top: -100px;
            margin-left: -150px;
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
            z-index: 11; /* 1px higher than the overlay layer */
        }
        </style>
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
    
         <?php include('./search_option.php') ?>


        <!--Cart Section-->
        <div class="cart">
            <div class="shopping-cart">
            <div id="location"></div>
                <!-- Title -->
                <div class="title">
                Order Summary
                </div>
                <div style="border-bottom:1px solid teal;"><div style="margin:10px auto;width:50%;display:flex;flex-direction:row;justify-content:space-between;align-items:center"><h2>Address</h2><span id="address_complete" style="width:45%"></span></div></div>
                <div style="margin:10px auto;width:50%;display:flex;flex-direction:row;align-items:center"><input id="search_address" type="text" class="form-control" autocomplete="off" placeholder="Search Address"/><button onclick="codeAddress()" style="padding:5px 20px;">Search</button></div>
                <!-- <div><iframe width="100%;" height="300" id="ifrMaps" src=""></iframe></div>  -->
                <div id="map"></div>

                <div style="margin-top:1em"><button style="width:50%;padding:1em;display:block;margin:0 auto" id="btnLocation"><a href="#">reset location</a></button></div>
                <div style="margin-top:1em"><button style="width:50%;padding:1em;display:block;margin:0 auto" id="btnDeliveryAdd"><a href="#">set location as delivery address</a></button></div>
                <!--Title head of the cart-->
                <div style="border-top:1px solid teal;margin-top:1em"><h2 style="margin:10px auto;width:50%">Delivery fee</h2></div>
                <div style="display: flex;width: 50%;margin: 0 auto;justify-content: space-between;">
                    <p id="delivery_details"></p><p id="delivery_fee"></p>
                </div>
                <div style="border-top:1px solid teal;margin-top:1em"><h2 style="margin:10px auto;width:50%">Product</h2></div>
                <ul id="cart_container"></ul>
                
                <div style="display:flex;justify-content:center;flex-direction:column;align-items:center"> 
                    <div style="width:100%;background-color:#b5ebed;text-align:center;">
                        <h2>Order Price : &#8369 <span id="total_order_price">0.00</span></h2>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;">
                    <!-- <small>GCASH is the only payment of method allowed</small> -->
                    <div style="border-top:1px solid teal"><h2 style="margin:10px auto;width:50%">Select Payment Method</h2></div>
                    <div style="width:50%;margin:0 auto;">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" value="cash" checked>
                    <label class="form-check-label" for="cash">
                        CASH ON DELIVERY
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" value="gcash">
                    <label class="form-check-label" for="gcash">
                        GCASH
                    </label>
                    </div>
                    </div>
                </div>
                <div style="width:50%;margin:10px auto">
                    <button style="width:100%;padding:1em;display:block;" id="btnPayment">Make Payment and Place Order</button>
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
                        <p class="center"> <a href="" target="_blank">Terms and condition</a> <br><a href="" target="_blank">    Privacy and Policy</a></p>
                    </div>
                    <br>
                </div>
            </div>
        </footer>
    <div id="three-ds-container" style="display: none;">
        <iframe height="450" width="550" id="sample-inline-frame" name="sample-inline-frame"> </iframe>
    </div>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        
        <script src="js/class/cart.class.js"></script>
        <script src="js/checkout.js"></script>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKEGwhMZ_UXrD0mlU3RCkCrE03CgVtAFA&libraries=geometry&callback=initMap"
        async
        ></script>
    </body>
</html>