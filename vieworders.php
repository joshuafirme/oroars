<!doctype html>
<html class="no-js" lang="en"></html>

    <!--Header towsss-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ORORS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/accstyle.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
        <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <style>
            .nameacc .account_info{
                margin:0 auto;
                width:50%;
            }    
            .nameacc{ padding:50px;height:auto;}
            .account_wrapper{background-color: #fff;padding:10px 25px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;}
        </style>
        <script src="https://kit.fontawesome.com/7262583124.js" crossorigin="anonymous"></script>
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
                        <a class="navbar-brand" href="#"><b>D</b>avids<b> G</b>rill</a>
                    </div>
<!--Navigation bar-->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li ><a href="reservation.php">Book a Rservation</a></li>
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

    <!-- <section class="acc-section">
    <div class="container">
        <div class="row">
            <div class="orders">
                <a href="#">View all orders></a>
            </div>
            <div class="col-sm-3 col-sm-6 " >
                <div class="service-item">
                    <i><img src="https://img.icons8.com/ios-glyphs/64/000000/wallet.png"/></i>
                    <h3>To Pay</h3>
                </div>
            </div>
            <div class="col-sm-3 col-sm-6 " >
                <div class="service-item">
                    <i><img src="https://img.icons8.com/material-outlined/64/000000/cardboard-box.png"/></i>
                    <h3>To Ship</h3>
                     </div>
            </div>
            <div class="col-sm-3 col-sm-6 " >
                <div class="service-item">
                    <i><img src="https://img.icons8.com/material-outlined/64/000000/truck.png"/></i>
                    <h3>To Recieve</h3>
                    </div>
            </div>
            <div class="col-sm-3 col-sm-6 " >
                <div class="service-item">
                    <i><img src="https://img.icons8.com/material-outlined/64/000000/purchase-order.png"/></i>
                    <h3>To Review</h3>
                     </div></div>
            </div>


            <div class="status">
                    <div class="image-status">
                      <img src="menu/cart/porktocino.png" />
                        <span>DELIVERED</span>
                            <span>dsuigewidhasidhewiyfjsvusddgfduieugu</span>
                      </div>
            </div> 
        </div>
    </div>-->
 

    </section>
        
        <section class="nameacc">
         <div class="account_info" style="justify-content: flex-start">
            <div class="orders" style="justify-content:flex-start">
                <a href="order_history.php">< Back</a>
            </div>
            <div class="account_wrapper">
                <h3>Order Summary</h3>
                <div id="order_summary"></div>
            </div>
         </div>
        </section>

<!--My Account Section-->





 <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center">Made with <i class="fa fa-heart"></i> by <a href="" target="_blank">Zunigarodelyn</a>. All Rights Reserved</p>
                        
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
        <script>
            $(document).ready(() =>{
              fetch(`app/client/transactions.php?request=view_all_order&user_id=${getCookie('user_id')}`)
              .then(data => data.json())
              .then(data =>{
                 if(data.hasOwnProperty("list")){
                  const urlParams = new URLSearchParams(window.location.search);
                  const myParam = urlParams.get('id');
                  var fil_data = data.list.filter(x => x.ID === myParam );
                   if(fil_data.length > 0){
                     const { ID, totalamount, status , payment_ref,payment_method,date_created } = fil_data[0]
                     
                     $("#order_summary").html(`<h2 style="text-align:center"> Order Number : ${ payment_ref.replace("pay_","")} </h2><p style="font-size:62px;text-align:center">${ status === "delivery" ? '<i class="fas fa-truck"></i>' : status === "pending" ? '<i class="fas fa-utensils"></i>' : '<i class="fas fa-flag-checkered"></i>' }</p>
                     <p style="text-align:center;font-size:32px;"><span>${status === "delivery" ? 'For Delivery' : status === "pending" ? 'Processing Order' : 'Order Completed'}</span></p>
                     <p style="text-align:center">Date Ordered : ${new Intl.DateTimeFormat('en', { month:'short', day:'numeric',year: 'numeric',hour: '2-digit',minute : '2-digit', second: '2-digit' }).format(new Date(date_created))}</p>
                     <p style="text-align:center">Method of payment : ${payment_method}</p>
                     <h4 style="width:300px;margin:0 auto">Order<hr><h4>
                     <div id="order_item_list"></div>
                     <h2 style="text-align:center;display:block;background:#9ed7e5;padding-top:10px;border-radius:5px"> Php ${parseFloat(totalamount).toFixed(2)}</h2>`)

                     fetch(`app/client/cart.php?request=list&user_id=${getCookie('user_id')}&status=purchased`)
                     .then(data => data.json())
                     .then(data => {
                         let filter = data.list.filter(x => x.transaction_id == myParam);
                         if(filter.length > 0){
                                $("#order_item_list").html("")
                              filter.map((item) =>{
                                    $("#order_item_list").append(`<p style="display:flex;justify-content:space-between;width:300px;margin:0 auto"><span>${item.ProductName} (Php ${item.SRP}) x ${item.quantity} </span><span>Php ${parseFloat((item.SRP) * (item.quantity)).toFixed(2)}</span> </p>`)
                              })
                         }
                     })
                   }
                 }
              })
            })
        </script>
    </body>
</html>