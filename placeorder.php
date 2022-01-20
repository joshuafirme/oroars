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
        <link rel="stylesheet" href="css/placeorder.css">
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
                    <a class="navbar-brand" href="#"><b>D</b>ine<b> f</b>ine</a>
                </div>
    
    <!--Navigation bar-->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="menu.php">Menu</a></li>
                                <li><a href="reservation.php">Book a Rservation</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
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
                <div class="place-cart">
                  <!-- Title -->
                  <div class="title">
                    checkout
                  </div>
                  <!--Title head of the cart-->
                  <div class= "titleheadcart">
                    <div class="producttitlehead">
                      Product
                    </div>
                    <div class="productdesctitlehead">
                      Description
                    </div>
                    <div class="quantitytitlehead">
                      Quantity
                    </div>
                    <div class = "totalpricetitlehead">
                      Total Price
                    </div>
                  </div>
                  <!-- Product #1 -->
                  <div class="item">
            
                    <div class="image">
                      <img src="menu/cart/porktocino.png" alt="Pork tocino" />
                    </div>
            
                    <div class="description">
                      <span>Pork Tocino</span>
                      <span>Price: &#8369 99.00</span>
                    </div>
            
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                      </button>
                      <input type="text" name="name" value="1">
                      <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                      </button>
                    </div>
                    <div class="total-price">&#8369 99.00 </div>
                  </div>
            
                  <!-- Product #2 -->
                  <div class="item">
            
                    <div class="image">
                      <img src="menu/cart/porktapa.png" alt="PorkTapa"/>
                    </div>
            
                    <div class="description">
                      <span>PorkTapa</span>
                      <span>Price: &#8369 89.00</span>
                    </div>
            
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                      </button>
                      <input type="text" name="name" value="1">
                      <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                      </button>
                    </div>
                    <div class="total-price">&#8369 89.00</div>
                  </div>
            
                  <!-- Product #3 -->
                  <div class="item">
            
                    <div class="image">
                      <img src="menu/cart/Beeftapa.png" alt="Beef Tapa" />
                    </div>
            
                    <div class="description">
                      <span>BeefTapa</span>
                      <span>Price: &#8369 125.00</span>
                    </div>
            
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                      </button>
                      <input type="text" name="name" value="1">
                      <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                      </button>
                    </div>
                    <div class="total-price">&#8369 125.00</div>
                  </div>
                </div>
                
                <!---Summary of order-->
                <div class="sum">
                  <div class= "sumtitlehead">
                  <h1>Order Summary</h1>
                  </div>
                  <div class= "subtotaltitlehead">
                    Subtotal (3 dishes)
                    </div>
                   
               
                    <div class= "shippingtitlehead">
                      <p>Shipping Fee</p>
                      </div>

                      <div class="voucher">
                        <input type="text" placeholder="Enter Voucher" name="voucher" id="voucher">
                          <button><a href="#" class= "applycode applycode-primary">Apply</a></button>
                      </div>
                  <div class="totalbill">
                    Total: <input type="text" name="total" id="total">
                  </div>
                </div>
                <div class="paymethod">
                  <p>Select Payment Method</p>
                  <a href="#">View all methods></a>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <div class="pm_btn">
                    <button type="" class="cod-btn" style="height:40px; width:50px">COD</button>
                    <button type="" class="ccv-btn" style="height:40px; width:50px">CCV</button>
                    <button type="" class="gcash-btn" style="height:40px; width:90px">GCash</button>
                  </div>

                 
                  </div>


                <div class="p_button">
                  <button><a href="#" class= "pbutton pbutton-primary">Place Order</a></button>
                </div>
                <!--Checkout button-->

        </div>

                <script type="text/javascript">
                  $('.minus-btn').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $this.closest('div').find('input');
                    var value = parseInt($input.val());
            
                    if (value > 1) {
                      value = value - 1;
                    } else {
                      value = 0;
                    }
            
                    $input.val(value);
            
                  });
            
                  $('.plus-btn').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $this.closest('div').find('input');
                    var value = parseInt($input.val());
            
                    if (value < 100) {
                      value = value + 1;
                    } else {
                      value =100;
                    }
            
                    $input.val(value);
                  });
            
                  $('.like-btn').on('click', function() {
                    $(this).toggleClass('is-active');
                  });
                </script>
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center">Made with <i class="fa fa-heart"></i> <a href="" target="_blank">Group3</a>. All Rights Reserved</p>
                    </div>
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

        
    </body>
</html>