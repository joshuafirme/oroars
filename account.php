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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <style>
            .nameacc .account_info{
                margin:0 auto;
                width:50%;
            }    
            .nameacc{ padding:50px;height:auto;}
            .account_wrapper{background-color: #fff;padding:10px 25px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;}
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
        <?php include('./search_option.php') ?>


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
         <div class="account_info">
            <div class="orders">
                <a href="order_history.php">View all orders></a>
            </div>
            <div class="account_wrapper">
                <h3>My Account</h3>
                <p><label class="col-sm-5">Full name : </label><span id="displayfullname"></span></p>
                <p><label class="col-sm-5">Username : </label><span id="displayusername"></span></p>
                <p><label class="col-sm-5">Address : </label><span id="displayaddress"></span></p>
                <p><label class="col-sm-5">Contact Number :  </label><span id="displaycontact"></span></p>
                <p><label class="col-sm-5">Email : </label><span id="displayemail"></span></p>
                <p><label class="col-sm-5">Date Joined : </label><span id="displayjoined"></span></p>

                <h3 style="margin-top:3em">Reservations</h3>
                <p>
                    <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Reservation Date</th>
                              <th scope="col">Reservation Number </th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody id="res_container">

                      </tbody>
                  </table>
                </p>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        <script>
            $(document).ready(() =>{
                fetch(`app/client/auth.secure.php?request=myaccount&user_id=${getCookie('user_id')}`)
                .then(data => data.json())
                .then(data => {
                    if(data.response){
                        $("#displayfullname").text(`${data.list.fname} ${data.list.mname} ${data.list.lname}`)
                        $("#displayusername").text(data.list.username)
                        $("#displayaddress").text(`${data.list.street_add} ,${data.list.city_add} ${data.list.zip_add}`)
                        $("#displaycontact").text(data.list.contact)
                        $("#displayemail").text(data.list.email)
                        $("#displayjoined").text(data.list.date_created)
                    }
                })

                fetch(`app/client/reservation.php?request=get_account_res&user_id=${getCookie('user_id')}`)
                .then(data => data.json())
                .then(data => {
                    var container =  document.querySelector("#res_container");
                    if(data.response){
                        container.innerHTML = "";
                        const requestcontent = data.list.map(item =>{
                            return `<tr>
                                        <td>${new Intl.DateTimeFormat('en', { month:'short', day:'numeric',year: 'numeric' }).format(new Date(item.reservation_date))}</td>
                                        <td>${item.reservation_ref}</td>
                                        <td>${item.status.toUpperCase()}</td>
                                        <td><a href="#">View</a></td>
                                    </tr>`
                        })

                        if(requestcontent.length < 1){
                            return container.innerHTML = `<tr><td colspan='7' style="text-align:center">No Result Found</td></tr>`
                        }

                        requestcontent.forEach(el=>{
                            container.innerHTML += el
                        })
                        return
                        
                    }
                    return container.innerHTML = `<tr><td colspan='7' style="text-align:center">No Result Found</td></tr>`
                })
            })
        </script>
    </body>
</html>