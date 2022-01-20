<!DOCTYPE html>
<?php
include'includes/auth.php';
include'includes/connect.php';
?>
<html lang="en">
<head>
  <title>OROARS | Dashboard</title>
  <?php include'includes/head.php';?>
  <style>
      .form-select{
	  display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
	background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
	}
	.form-select:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
	}
    /*---------------Pop up css------------*/ 
		#css-only-modals { 
		position:fixed; 
		pointer-events:none;
		left:0;
		top:0;
		right:0;
		bottom:0;
		z-index:10000000;
		text-align:center;
		white-space:nowrap;
		height:100%;
		}
		#css-only-modals:before {
		content:'';
		display:inline-block;
		height:100%;
		vertical-align:middle;
		margin-right:-.25em;
		}
		.css-only-modal-check {
		pointer-events:auto;
		display:none;
		}
		.css-only-modal-check:checked ~ .css-only-modal {
		opacity:1;
		pointer-events:auto;
		}
		.css-only-modal {
		width: 700px;
		background:#fff;
		z-index:1;
		display:inline-block;
		position:relative;
		pointer-events:auto;
		padding:25px;
		text-align:center;
		border-radius:4px;
		white-space:normal;
		display:inline-block;
		vertical-align:middle;
		opacity:0;
		pointer-events:none;
		max-width: 90%;
		}
		.css-only-modal h2 {
		text-align:center;
		}
		.css-only-modal p {
		text-align:center;
		}
		.btn-primary:hover {
		color:#fff;
		background-color:#999;
		border-color:#999;
		}
		.btn-primary {
		color:#fff;
		background-color:#777;
		border-color:#777;
		border-radius: 4px;
		padding: 6px 12px;
		}
		.css-only-modal-check:checked ~ #screen-shade {
		opacity:.5;
		pointer-events:none;
		}
		#modal1 { display: none; }
		#screen-shade {
		opacity:0;
		background:#000;
		position:absolute;
		left:0;
		right:0;
		top:0;
		bottom:0;
		pointer-events:none;
		transition:opacity .8s;
		}
		/*------------End pop up css------*/ 

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
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <?php include 'includes/leftnav.php';?>
  <?php include 'includes/topnav.php';?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/images/logo.png" alt="OROARS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Davids Grill</span>
    </a>

    <!-- Sidebar -->
  <?php include'includes/sidebaruser.php' ?>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <?php include 'includes/sidemenu.php'?>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cashiering</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cashiering</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Payment</h3>
  </div>
    
  <div class="card-body">
      <h2 id="total_value" class="mb-5"></h2>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="cash-tab" data-toggle="tab" href="#cash" role="tab" aria-controls="cash" aria-selected="true">Cash</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="false">Card</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="cash" role="tabpanel" aria-labelledby="cash-tab">
                                        <p style="color:#9f9f9f;font-weight:500;font-style: italic;margin-top:2em;">Payment</p>
                                            <hr>
                                            <div class="form-group row px-3">
                                                    <label for="inputCardNumber">Cash Amount</label>
                                                    <input type="text" class="form-control" id="inputCash" aria-describedby="emailHelp" placeholder="Enter amount without the currency" required  autocomplete="off">
                                                
                                            </div>
                                        <div class="col-sm-12">
                                            <p style="margin-top:1em;float:left"><button type="submit" class="btn btn-outline-primary" id="btn_SumbitPaymentCash"><i class="fas fa-check-circle"></i> Submit</button></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="card" role="tabpanel" aria-labelledby="card-tab">
                                        <p style="color:#9f9f9f;font-weight:500;font-style: italic;margin-top:2em;">Card information</p>
                                            <hr>
                                            <div class="form-group row px-3">
                                                    <label for="inputCardNumber">Card Number</label>
                                                    <input type="text" class="form-control" id="inputCardNumber" aria-describedby="emailHelp" placeholder="Enter card number" required  autocomplete="off">
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Expiration</label>
                                                        <div class="input-group row col-sm">
                                                            <input type="text" class="form-control" id="inputExpMonth" placeholder="Month" maxlength="2"  required  autocomplete="off">
                                                            <input type="text" class="form-control" id="inputExpYear" placeholder="Year" maxlength="2"  required  autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="inputCardNumber">Security CVV</label>
                                                        <div class="col-sm">
                                                            <input type="password" class="form-control" id="inputSecurity" placeholder="CVV" required  autocomplete="off">
                                                            <small id="emailHelp" class="form-text text-muted">Found in the back of the credit card.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                           
                        
                                            <div class="col-sm-12">
                                                <p style="margin-top:1em;float:left"><button type="submit" class="btn btn-outline-primary" id="btn_SumbitPayment"><i class="fas fa-check-circle"></i> Submit</button></p>
                                            </div>
                        
                                    </div>
  </div>
  <div class="card-footer">
  </div>
 
  


</div>


    </section>
    <!-- /.content -->
  </div>
  <div id="three-ds-container" style="display: none;">
        <iframe height="450" width="550" id="sample-inline-frame" name="sample-inline-frame"> </iframe>
    </div>
  <!-- /.content-wrapper -->
 <?php include'includes/footer.php'?>
 <script type="text/javascript">
     class Card{
            amount = 0;
            payment_method_allowed = ["card"];
            payment_method_options = {"card": { "request_three_d_secure": "any"}}
            currency;
            type;
            card_num;
            exp_month = 0;
            exp_year = 0;
            cvc;

            constructor(currency = "PHP",type = "card") {
                this.currency = currency;
                this.type = type;
            }

            getIntentAttributes(){
                let data = {
                    "data": {
                            "attributes" : {
                            "amount": this.amount,
                            "payment_method_allowed": this.payment_method_allowed,
                            "payment_method_options": this.payment_method_options,
                            "currency" : this.currency
                            }
                    }
                }
                return data;
            }

            getPMAttributes(){
                let data = {
                    "data": {
                        "attributes" : {
                            type: this.type,
                            details : {
                                card_number : this.card_num,
                                exp_month: parseInt(this.exp_month),
                                exp_year : parseInt(this.exp_year),
                                cvc: this.cvc
                            }
                        }
                    }
                }
                return data;

            }
            }
    var url = new URL(window.location.href);
    var searchParams = new URLSearchParams(url.search);
    $("#total_value").text(`TOTAL : Php ${searchParams.get('total')}`)
    $("#btn_SumbitPaymentCash").click(function(){ 
      if(!confirm('Submit Payment ?')){
          return
      }
      let params = {
          payment : "CASH",
          stat : "PAID",
          card_details : null,
          trans:searchParams.get('ref')
      };
      fetch(`includes/app/cashier.php?request=update_status`,{method:"POST",body:JSON.stringify(params)})
      .then(data => data.json())
      .then(data => {
        
          if(data.response){
            if(data.hasOwnProperty("message")){
               alert(data.message)
               window.location.href ="cashiering.php"
            }
          }
      }) 
    });

    const card = new Card();
    var $payment_source,$discount_id = 0,$discount_value = 0, cash=0;
    $("#btn_SumbitPayment").click(async function(event){

        event.preventDefault()
        if(!confirm('Submit Payment ?')){
          return
        }

        card.card_num = $("#inputCardNumber").val()
        card.exp_month = $("#inputExpMonth").val();
        card.exp_year = $("#inputExpYear").val();
        card.cvc = $("#inputSecurity").val()


        card.amount = searchParams.get('total') < 10000 ? 10000 : parseFloat(searchParams.get('total')).toFixed(2);
    
        const pKey = "sk_test_nY9ijCLWys58NrMk5KgP5TkF";
        
        const paymentID = await createPaymentIntent(pKey);
        const client_id = paymentID.data.attributes.client_key;
        const paymentMethod = await createPaymentMethod(pKey);
        const pm_id = paymentMethod.data.id;
        /*********CHANGES *********************/
        const response = await sendCardInfo(pKey,client_id,pm_id);
        var paymentIntent = response.data;
        verifyRequest(paymentIntent); // last step check if payment succeeded

        //pag nireturn ulit yung messege from window form
        window.addEventListener(
        'message',
        async (ev) => {
            if (ev.data === '3DS-authentication-complete') {
            // 3D Secure authentication is complete. You can requery the payment intent again to check the status.
            
            var paymentIntentId = client_id.split('_client')[0];
            await requestURL(`https://api.paymongo.com/v1/payment_intents/${paymentIntentId}?client_key=${client_id}`,
                {
                headers: {
                    // Base64 encoded public PayMongo API key.
                    Authorization: `Basic ${window.btoa(pKey)}`
                }
                }
            ).then(function(response) {
                var paymentIntent = response.data;
                verifyRequest(paymentIntent)
            })
            }
            
        },
        false
        );
    })

    
    /*******************************************************************************************************************/



    /*first process on obtaining paymentID*/
    async function createPaymentIntent(key,pword = null){

    let headers = createHeaders(key);
    var raw = card.getIntentAttributes();
    let data = createRequestOption("POST",raw,headers);
    const id = await requestURL("https://api.paymongo.com/v1/payment_intents",data);
    return await id; //contains json with client key;
    }

    /*card info will be stored here*/
    async function createPaymentMethod(key){

    let headers = createHeaders(key);
    let raw = card.getPMAttributes();
    let data = createRequestOption("POST",raw,headers);
    const pm = await requestURL("https://api.paymongo.com/v1/payment_methods",data);
    return await pm;

    }

    async function getSource(id){
      
      let headers = createHeaders("sk_test_nY9ijCLWys58NrMk5KgP5TkF");
      let data = createRequestOption("GET",null,headers);
      const pm = await requestURL("https://api.paymongo.com/v1/sources/" + id,data);
      return await pm;
    }

    /*attach payment method and payment intent id */
    async function sendCardInfo(pkey,client_id,pm_id){
        var paymentIntentId = client_id.split('_client')[0];
        let raw = {
            data:{
            attributes :{
                client_key :client_id,
                payment_method : pm_id,
                }
            }
        }
        let data = createRequestOption("POST",raw,createHeaders(pkey));
        const res = await requestURL(`https://api.paymongo.com/v1/payment_intents/${paymentIntentId}/attach`,data)
        return await res;
    }

    function saveDetails(pay){
        let params = {
          payment : "CARD",
          stat : "PAID",
          card_details : pay.attributes.payments[0].attributes.source.last4,
          trans:searchParams.get('ref')
      };
      fetch(`includes/app/cashier.php?request=update_status`,{method:"POST",body:JSON.stringify(params)})
      .then(data => data.json())
      .then(data => {
        
          if(data.response){
            if(data.hasOwnProperty("message")){
               alert(data.message)
               window.location.href ="cashiering.php"
            }
          }
      }) 
    }

    function verifyRequest(paymentIntent){
        
        if (paymentIntent.attributes.status === 'awaiting_next_action') {
            // Render your modal for 3D Secure Authentication since next_action has a value. You can access the next action via paymentIntent.attributes.next_action.
            
            window.open(paymentIntent.attributes.next_action.redirect.url,'sample-inline-frame'); // display authentication link for user to enter password
            var redirect_url = new URL(paymentIntent.attributes.next_action.redirect.url);
            $payment_source = new URLSearchParams(redirect_url.search).get('id');
            document.querySelector('#three-ds-container').setAttribute("style","display:block"); 
        } else if (paymentIntent.attributes.status === 'succeeded') {
            // You already received your customer's payment. You can show a success message from this condition.
            document.querySelector('#three-ds-container').setAttribute("style","display:none"); 
            saveDetails(paymentIntent)
        } else if(paymentIntent.attributes.status === 'awaiting_payment_method') {
            // The PaymentIntent encountered a processing error. You can refer to paymentIntent.attributes.last_payment_error to check the error and render the appropriate error message.
            getSource($payment_source)
            .then(data =>{
              if(data.data.attributes.status === "failed"){
                document.querySelector('#three-ds-container').setAttribute("style","display:none");
                alert("Payment Failed! Please try again later or use a different card.")
              }
            })
        }  else if (paymentIntent.attributes.status === 'processing'){
            // You need to requery the PaymentIntent after a second or two. This is a transitory status and should resolve to `succeeded` or `awaiting_payment_method` quickly.
        }else if (paymentIntent.attributes.status === 'failed'){
            alert("Payment failed!")
        }
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

        </script>
</body>
</html>
