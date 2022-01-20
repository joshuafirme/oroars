<!doctype html>
<?php
include'includes/connect.php';
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ORORS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylereserve.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <style>
            #menu_add,#menu_select{
                list-style:none;

            }
            #menu_add li,#menu_select li{
                border: 1px solid #dee9ff;
                padding:1em;
                margin-bottom:0.25em;
            }
        </style>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li  class="active"><a href="reservation.php">Book a Reservation</a></li>
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
            <br>
        </header>


        <!--Search Section-->
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
        </section>



        <!--Reservation-->
        <section class="reserv-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>Reservation</h1>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <br> <br>
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                        <div class = "container-time">
                    <h2 class = "heading"> Time Open</h2>
                    <h3 class="headingdays">Monday - Friday</h3>
                    <p>7am - 11am (Breakfast)</p>
                    <p>11am - 10pm (Lunch/Dinner)</p>

                    <h3 class="headingdays">Saturday</h3>
                    <p>9am - 11am (Breakfast)</p>
                    <p>11am - 10pm (Lunch/Dinner)</p>

                    <h3 class="headingdays">Sunday</h3>
                    <p>We are close on Sunday.</p>
                    <p>Sunday is for Jesus</p>

                    <hr>
                     <h4 class="headingphone"> Call Us : 09975242698</h4>
                </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <form name="reservation" class="contact-form">
                            <div class="row">
                            <h2 class="heading heading-yellow"> Reservation Online </h2> 
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <p>Name</p>
                                        <input type="text" id="name" name="name" class="form-control" id="name" placeholder="Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <p>Contact number</p>
                                        <input ttype="tel" name="cnum" class="form-control" id="cnum" placeholder="0999-000-0000" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <p>Date</p>
                                        <input type="date" class="form-control" id="rdate" require autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <p>Time</p>
                                        <input type="time" class="form-control" id="rtime" require autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <p>How many people</p>
                                     <select name= "selectnumberofpeople" id="selectnumberofpeople"  class="form-control" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="16">18</option>
                                        <option value="19">19</option>
                                        <option value="20+">20+</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <p>Type of Reservation</p>
                                        <select name= "selectreservation" id="select_reservation"  class="form-control" required>
                                        <option value="1">Table Reservation</option>
                                        <option value="2">Table and Food Reservation</option>
                                    </select>

                                    </div>
                                </div>
                            </div>
                            <div id="menu_reserve" class="row" style="border:3px dashed rgb(0, 45, 141);margin-bottom:1em;display:none;">
                                <div class="col-md-6">
                                        <p><strong> Available Menu </strong></p>
                                        <ul id="menu_add">
                                            
                                        </ul>
                                </div>
                                <div class="col-md-6">
                                        <p><strong> Menu selected for reservation </strong></p>
                                        <ul id="menu_select">
                                            
                                        </ul>
                                        <div class="row d-flex ">
                                            <h4><span>Total Price <small style="color:#bc1414">(*VAT INCLUDED*)</small>:</span><span style="font-weight:bolder" id="price_fix">0.00</span></h4>
                                        </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea  autocomplete="off" name="" id="text_instruction" class="form-control" cols="30" rows="5" placeholder="Please state your other concerns regarding to your reservation.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p style="margin-top:1em;text-align:center;color:#bc1414;text-transform:uppercase;font-size:18px;">reservations are non-refundable</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="submit" id="btn_res_submit" class="contact-submit" value="Submit" />
                                        <input type="submit" class="contact-submit" value="Cancel" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


<!--ContactUs--->
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
                                        <input type="text" class="form-control" id="" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="Website URL">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

        <script>

            class Inventory{
                items = Array()
                
                addItems(item = {}){
                    this.items.push(item);
                }

                reducequantity(id){
                    var current = this.items.find(x => x.id == id)
                    
                    if(current.quantity == 1){
                        return this.removeitem(current.id)
                    }
                    this.items.find(x => x.id === current.id ).quantity--;
                    console.log(this.items)
                }

                addquantity(id){
                    var current = this.items.find(x => x.id == id)
                    current.quantity += 1
                    console.log(this.items)
                }

                removeitem(id){
                    this.items = this.items.filter(function(ele){
                        return ele.id != id
                    })
                }

                getTotal(){
                return this.items.reduce((curr,a) => curr + a.price * a.quantity,0)
                }

            }

            var inventory = new Inventory()
            var $total_price = 0.00;
            function generateUUID() { // Public Domain/MIT
                var d = new Date().getTime();//Timestamp
                var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now()*1000)) || 0;//Time in microseconds since page-load or 0 if unsupported
                return 'xxxxxxxx'.replace(/[xy]/g, function(c) {
                    var r = Math.random() * 16;//random number between 0 and 16
                    if(d > 0){//Use timestamp until depleted
                        r = (d + r)%16 | 0;
                        d = Math.floor(d/16);
                    } else {//Use microseconds since page-load if supported
                        r = (d2 + r)%16 | 0;
                        d2 = Math.floor(d2/16);
                    }
                    return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
                });
            }
            $(document).ready(function(){
                    if(!getCookie("username")){
                        return window.location.href = "loginpage.php"
                    }
                        
                    let searchParams = new URLSearchParams(window.location.search)
                    if(searchParams.has('payment')){
                        if(searchParams.get('payment') === "success"){
                            var source = getCookie("source")
                            if(source){
                                checkSource(source)
                            }
                        }
                        if(searchParams.get('payment') === "failed"){
                            return alert('Payment has not been authorized! Please Try again or use a different payment')
                        }
                        }
            })
                    
                    function checkSource(src){
                            getSource(src).then((data)=>{
                                if(data.data.attributes.status === "pending"){
                                    checkSource(src)
                                }
                                if(data.data.attributes.status === "chargeable"){
                                    chargePayment(src)
                                    .then(data =>{
                                        saveReservation()
                                        // data = {
                                        //     ref : `TN_-${generateUUID()}`,
                                        //     payment_ref : data.data.id,
                                        //     status : "pending",
                                        //     coord_lat : marker.position.lat(),
                                        //     coord_long : marker.position.lng(),
                                        //     total_amount : parseFloat($("#total_order_price").text()),
                                        //     payment_type : $('input[name="payment_type"]:checked').val(),
                                        //     quantity : quantity,
                                        //     user_id : getCookie('user_id')
                                        // }
                                        // var option = createRequestOption("POST",data)
                                        // requestURL(`app/client/transactions.php?request=place_order`,option)
                                        // .then(data => {
                                        //     if(data.response){
                                        //         alert (data.message)
                                        //         return window.location.href="addcart.php"
                                        //     }
                                        // })
                                    })
                                }
                            })
                    }

                    async function chargePayment(id){
                        let headers = createHeaders("sk_test_nY9ijCLWys58NrMk5KgP5TkF");
                        raw = {
                            data : {
                                attributes : {
                                    amount : 15000,
                                    source : {
                                        id : id,
                                        type : "source"
                                    },
                                    currency : "PHP"
                                }
                            }
                        }
                        let data = createRequestOption("POST",raw,headers);
                        const pm = await requestURL("https://api.paymongo.com/v1/payments",data);
                        return await pm;
                    }
                    async function getSource(id){
                        
                        let headers = createHeaders("sk_test_nY9ijCLWys58NrMk5KgP5TkF");
                        let data = createRequestOption("GET",null,headers);
                        const pm = await requestURL("https://api.paymongo.com/v1/sources/" + id,data);
                        return await pm;
                    }

                    /*helpers*/
                    async function requestURL(url,requestOptions){
                        const action = await fetch(url,requestOptions)
                        .then(response=> response.json())
                        .then(data => data);
                        return action;
                    }

                    function createHeaders(key){
                        var myHeaders = new Headers();
                        myHeaders.append("Authorization", `Basic ${btoa(key)}`);
                        myHeaders.append("Content-Type", "application/json");
                        return myHeaders;
                    }

                    function createRequestOption(method,data = null,header = null){
                        var requestOptions = {
                            method: method
                        }
                        if(data !== null)
                        requestOptions = {
                            method: method,
                            redirect: "follow",
                            body : JSON.stringify(data)
                        };

                        requestOptions['headers'] = header !== null ? header : null;
                        
                        let requestOpt = removeEmpty(requestOptions);

                        return requestOpt;
                    }

                    function removeEmpty(obj) {
                        return Object.fromEntries(Object.entries(obj).filter(([_, v]) => v != null));
                    }

                    let key = "sk_test_nY9ijCLWys58NrMk5KgP5TkF"
                    let headers = createHeaders(key);
                
            
            $("#select_reservation").change(function(){
                if($(this).val() == 1){
                    $("#menu_reserve").hide()
                    console.log("hello")
                }
                if($(this).val() == 2){
                    $("#menu_reserve").show()
                }
            })

            function updateTotal(){
                $("#price_fix").text(`Php ${parseFloat(inventory.getTotal()).toFixed(2)}`)
            }

            function addQuantity(id){
                var curr_val = $(`#quantity_val_${id}`).text()
                $(`#quantity_val_${id}`).text(parseInt(curr_val) + 1)
                
                inventory.addquantity(id)
                $(`#price_point_${id}`).text(function(){
                    let data = inventory.items.filter(item => item.id == id)
                    return 'unit total : Php ' + data[0].quantity * data[0].price
                })
                updateTotal()
            }

            function reduceQuantity(id){
                var curr_val = $(`#quantity_val_${id}`).text()
                $(`#quantity_val_${id}`).text( function () {
                    if(parseInt(curr_val) === 1) {
                        $(`#menu_select_${id}`).remove()
                        $(`#menu_add_${id}`).show()
                    }
                    inventory.reducequantity(id)
                    $(`#price_point_${id}`).text(function(){
                    let data = inventory.items.filter(item => item.id == id)
                    return 'unit total : Php ' + data[0].quantity * data[0].price
                    })
                    updateTotal()
                    return parseInt(curr_val) - 1
                    
                })

                
            }

            function addMenu(id,photo,product,price){
                inventory.addItems({id:id,quantity:1,price:price});
                $("#menu_select").append(`<li id="menu_select_${id}" style="display:flex;justify-content:space-between;align-item:center"><div><img src="${photo}" style="width:40%; height:auto" /> <p style="max-width:150px;font-weight:bold;margin-top: 2em;overflow-wrap: break-word;"> ${product} <br> Price : Php ${price} <br> <span id="price_point_${id}">unit total : Php ${price}</span></p></div><div><input type="button" value ="+" onclick="addQuantity(${id})" style="padding:0.25em 1em;"/> <h2 style="text-align:center" id="quantity_val_${id}">1</h2><input type="button" value ="-" onclick="reduceQuantity(${id})" style="padding:0.25em 1em;"/></div> </li>`)
                $(`#menu_add_${id}`).hide()
                updateTotal()
            }

            fetch('app/client/menu.php')
            .then(data => data.json())
            .then(data =>{
                if(data.hasOwnProperty("list")){
                    data.list.map(item =>{
                        $("#menu_add").append(`<li id="menu_add_${item.ID}" style="display:flex;justify-content:space-between;align-item:center"><div><img src="${item.photo}" style="width:40%; height:auto" /> <strong style="max-width:50px;wrap:break-word;">${item.ProductName} <br> Price : Php ${item.SRP}</strong></div><div><input type="button" value =">>" onclick="addMenu(${item.ID},'${item.photo}','${item.ProductName}','${item.SRP}')" style="padding:0.25em 1em;" /></div> </li>`)
                    })
                }
            })

			var form = document.querySelector("form[name='reservation']");
			form.addEventListener("submit",async function (event) {
            event.preventDefault();
                if(!confirm(`Are you sure you want to submit reservation (We Will Charge you ${$("#select_reservation").val() == 1 ? `Php 50 as reservation fee` : `Half the price of your order` })?`)){
                    return
                }
                if(getCookie('validated') === "0"){
                    return alert("You cannot make this reservation yet! Please wait for your account to be validated.")
                }

                var forms_data = new FormData(form);
            
                let ref = `RES-${generateUUID()}`;
                forms_data.append("res_date", $("#rdate").val())
                forms_data.append("name", $("#name").val())
                forms_data.append("cnum", $("#cnum").val())
                forms_data.append("selectnumberofpeople", $("#selectnumberofpeople").val())
                forms_data.append("res_time", $("#rtime").val())
                forms_data.append("text_instruction", $("#text_instruction").val())
                forms_data.append("payment_method", "gcash")
                forms_data.append("card_details", "N/A")
                forms_data.append("ref", ref)
                forms_data.append("total_amount",inventory.getTotal())
                forms_data.append("user_id", getCookie("user_id"))
                let searchParams = new URLSearchParams(window.location.search)
                let request_type = $("#select_reservation").val() == 1 ? "single_res" : "food_res" 
                request_type === "food_res" ? forms_data.append("foods", JSON.stringify(inventory.items)) : null
                forms_data.append("status", "PENDING")
                    fetch(`app/client/reservation.php?request=${request_type}`,{method:"POST",body:forms_data})
                    .then(data => data.json())
                    .then(async (data) => {
                        if(data.response){
                            let raw =  {
                                "data": {
                                    "attributes" : {
                                        type: "gcash",
                                        amount : 15000,
                                        currency : "PHP",
                                        redirect : {
                                            success : `http://localhost:81/oroars/reservation.php?payment=success&type=${request_type}&ref=${ref}`,
                                            failed : `http://localhost:81/oroars/reservation.php?payment=failed`
                                        }
                                    }
                                    
                                }
                            };
                        
                            let data = createRequestOption("POST",raw,headers);
                            const pm = await requestURL("https://api.paymongo.com/v1/sources",data);
                            //window.open(pm.data.attributes.redirect.checkout_url,'sample-inline-frame');  display authentication link for user to enter password
                            // document.querySelector('#three-ds-container').setAttribute("style","display:block"); 
                            document.cookie = `source=${new URL(pm.data.attributes.redirect.checkout_url).searchParams.get('id')}; expires=Fri, 31 Dec 9999 23:59:59 GMT`
                            window.location.href = pm.data.attributes.redirect.checkout_url;
                        }
                })
                
            })
            
            function saveReservation(){
                let searchParams = new URLSearchParams(window.location.search)
                let ref =''
                if(searchParams.has('ref')){
                    ref = searchParams.get('ref')
                }

                fetch(`app/client/reservation.php?request=update_res&ref=${ref}&status=RESERVED`)
                .then(data => data.json())
                .then(data =>{
                    if(data.hasOwnProperty("list")){
                        alert(data.list);
                        window.location.href="reservation.php"
                    }
                })
			};

		
			const isNumericInput = (event) => {
				const key = event.keyCode;
				return ((key >= 48 && key <= 57) || // Allow number line
					(key >= 96 && key <= 105) // Allow number pad
				);
			};

			const isModifierKey = (event) => {
				const key = event.keyCode;
				return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
					(key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
					(key > 36 && key < 41) || // Allow left, up, right, down
					(
						// Allow Ctrl/Command + A,C,V,X,Z
						(event.ctrlKey === true || event.metaKey === true) &&
						(key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
					)
			};

			const enforceFormat = (event) => {
				// Input must be of a valid number format or a modifier key, and not longer than ten digits
				if(!isNumericInput(event) && !isModifierKey(event)){
					event.preventDefault();
				}
			};

			const formatToPhone = (event) => {
				if(isModifierKey(event)) {return;}

				const input = event.target.value.replace(/\D/g,'').substring(0,11); // First ten digits of input only
				const areaCode = input.substring(0,4);
				const middle = input.substring(4,7);
				const last = input.substring(7,11);

				if(input.length > 6){event.target.value = `${areaCode} ${middle}-${last}`;}
				else if(input.length > 3){event.target.value = `${areaCode} ${middle}`;}
				else if(input.length > 0){event.target.value = `${areaCode}`;}
			};

			const inputElement = document.getElementById('cnum');
			inputElement.addEventListener('keydown',enforceFormat);
			inputElement.addEventListener('keyup',formatToPhone);
		</script>
    </body>
</html>
