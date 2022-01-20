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
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
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
<!--Header again-->

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
                            <li ><a href="gallery.php">Gallery</a></li>
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

        <section class="search-section">
            <div class="container">
                <div class="row subscribe-from">
                    <div class="col-md-12">
                        <form class="form-inline col-md-12 wow fadeInDown animated">
                            <div class="form-group">
                                <input type="email" class="form-control subscribe" id="" placeholder="Search...">
                                <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                            </div>
                        </form><!-- end /. form -->
                    </div>
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <!--Nagiislide-->  

<!--Gallery-->
<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-menu">
                    <ul class="button-group sort-button-group">
                        <li class="button active" data-category="all">All<span>4</span></li>
                        <li class="button" data-category="cat-1">Customer<span>1</span></li>
                        <li class="button" data-category="cat-2">Restaurant<span>1</span></li>
                        <li class="button" data-category="cat-3">Employees<span>1</span></li>
                        <li class="button" data-category="cat-4">Events<span>1</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured isotope">
    
            <!--Beef tapa-->
            <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/GalleryForEvent_Employee_ETC/GCustomer.png" class="img-responsive" width="255" height="322" alt="">
                </div>
            </div>

            <!--Restaurnat-->
            <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/GalleryForEvent_Employee_ETC/GPlace.png" class="img-responsive" width="255" height="322" alt="">
                </div>
            </div>

            <!--Employees-->
            <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/GalleryForEvent_Employee_ETC/GEmployee.png" class="img-responsive" width="255" height="322" alt="">
                </div>
            </div>
            <!--Evnets-->
            <div class="col-md-3 col-sm-6 col-xs-12 cat-4 featured-items isotope-item">
                <div class="product-item">
                    <img src="menu/GalleryForEvent_Employee_ETC/GEvent.png" class="img-responsive" width="255" height="322" alt="">
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


        <!--Get in Touch-->
        <section id="contactus" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Feedback and Suggestion</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                            <h1><span>D</span>avids <span>G</span>rill</h1>
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
                        <form action="app/client/feedback.php" method="POST" class="contact-form" name="suggestion_form" id="suggestion_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="subject" name="subj" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea id="comment" class="form-control" name="comment" cols="30" rows="5" placeholder="Your Message..." form="suggestion_form" required></textarea>
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
        <script>
            var form  = $("#suggestion_form")[0]
            $("#suggestion_form").submit(function(event){
                event.preventDefault()
                var data = new FormData(form)
                fetch('app/client/feedback.php',{method:"POST",body:data})
                .then(data => data.json())
                .then(data =>{
                    if(data.response){
                        $("#subject").val("")
                        $("#fullname").val("")
                        $("#email").val("")
                        $("#phone").val("")
                        $("#comment").val("")
                    }
                    alert(data.message)
                })
            })
        </script>
    </body>
</html>