<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>ORORS</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.png">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleregistration.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<link rel="stylesheet" href="css/styleregistration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
	<style>
		body{
			background-color: #D4F1F4;
		}
		.reg{
			padding:0 4em;
			width:75%;
			margin:0 auto;
			background-color:#87d3db
		}
		.regcontainer{
			background:#fff3f3;
			border-radius:5px;
		}
		.regcontainer input[type='text'],.regcontainer input[type='tel'],.regcontainer input[type='password']{
			border:1px solid #ddd;
			background:#ddd;
		}
		.flex{
			display:flex;
		}
		.flex-column{
			flex-direction: column;
		}
		.flex-row{
			flex-direction: row;
		}
		.header_register{
			background-image: url("pics/uhhhu.jpg");
			width:100%;
			background-size: cover;
			background-position: bottom;
			background-repeat: no-repeat;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			height:300px;
			flex-direction: column;
			justify-content: center;
			margin-bottom:1em;
		}	
		.header_text{
			width:90%;
			margin:0 auto;
		}
		.header_text h1, .header_text p{
			color:#f1f1f1;
			margin:0;
			padding:0;
		}
		.header_text--inner {
			padding:1em;
			padding-right:2em;
			background:#3333337d;
			display:inline-block;
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
	@media (max-width:767px){
		.reg{
			width:100%;
			padding:0 1em;
		}
		.header_text--inner .flex.flex-row{
			flex-direction: column;
			align-items: center;
		}
		.header_text--inner .flex.flex-row h1,p{
			margin-top:1em;
			text-align: center;
		}
		.header_text--inner .flex.flex-row div{
			margin-left:0px!important;
		}
	}
	</style>
    
</head>
<body>
	<div class="reg">
 
	<div class="header_register flex" style="padding-bottom:1em;">
		<div class="header_text">
			<div class="header_text--inner">
				<div class="flex flex-row">
					<img src="images/logo.jpeg" width="90" height="90"  alt="">
					<div style="margin-left:20px;">
						<h1>Register</h1>
						<p>Please fill in this form to create an account.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
                   
	<form>
		<div class="regcontainer">
			
			<label for="name"><b>Full Name</b></label><br>
			<input type="text" placeholder="First Name" name="firstname" id="name" style="width:40%;display:inline-block;margin-right:1em;"  required autocomplete="off">
			<input type="text" placeholder="Last Name" name="lastname" id="name" style="width:40%;display:inline-block;margin-right:1em;" required autocomplete="off">
			<input type="text" placeholder="Middle Name" name="middlename" id="name" style="width:16%;display:inline-block;" required autocomplete="off"><br>

			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" id="username"  required autocomplete="off"><br>


			<label for="address"><b>Complete Address</b></label>
			<input type="text" placeholder="Street Address" name="regstreet" id="regstreet" required autocomplete="off"><br>
			<input type="text" placeholder="City" name="regcity" style="width:49%;display:inline-block;margin-right:1em;" id="regcity" required autocomplete="off">
			<input type="text" placeholder="Zip Code" name="regzip" style="width:49%;display:inline-block;margin:0;" id="regzip" required autocomplete="off"><br>
			
			<label for="gender"><b>Gender</b></label> <br> <br>
			<input type="radio" name="gender" id="gender_male" value="1"><label for="gender_male" style="margin-left:1em"> Male</label>
			<input type="radio" name="gender" id="gender_female" value="0" style="margin-left:1em"> <label for="gender_female" style="margin-left:1em"> Female</label><br> <br><br>

			<label for="Contactnumber"><b>Contact Number</b></label>
			<input type="tel" placeholder="0999-999-9999" name="cnum" id="cnum"  required autocomplete="off">
			<br>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email" required autocomplete="off"><br>

			<label for="imageid"><b>Please submit a valid ID</b> <p>This is for identificatiion purpose only.</p> </label><br>
			<label class="registerbtn" style="width:25%;text-align:center" for="modal1">Capture photo</label><br><br>
			<input type="hidden" style="display:none;" id="hidden-image" name="image" class="image-tag"/>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" id="psw" required autocomplete="off">
		
			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required autocomplete="off">
			<br>
			<hr>

			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
			

			<p><button type="submit" class="registerbtn">Register</button></p>
			<!-- Modal -->
			<div id="css-only-modals"><input class="css-only-modal-check" id="modal1" type="checkbox" />
			<div class="css-only-modal">
			<label class="css-only-modal-btn btn btn-danger btn-lg" for="modal1" style="padding:5px 10px;float:right">X</label>
			<h2>Photo will be submitted for Account Validation</h2>
				<div id="camera" style="height:auto;width:auto; text-align:center;margin:0 auto"></div>
				<p id="snapShot"></p>
				<!--FOR THE SNAPSHOT-->
				<p><input type="button" class="btn btn-primary" value="Take a Snap" id="btPic" onclick="takeSnapShot()" /> 
				<input type="button" class="btn btn-warning" value="Retake Photo" style="display:none;" id="btClear" onclick="clearSS()" /> </p>
				<label class="css-only-modal-btn btn btn-primary btn-lg" id="btnEscape" for="modal1" style="display:none;" style="padding:5px 10px;float:right">OK</label>
			</div>
			<div id="screen-shade"> </div>
			</div>
		  </div>
		
		  <div class="" style="text-align:center;padding:0em .25em;padding-bottom:2em;">
			<h3>Already have an account? <a href="loginpage.php">Sign in</a>.</h3>
		  </div>
		</form>


		<script>
			var form = document.querySelector("form");
			form.addEventListener("submit", function(event) {
			var data = new FormData(form);
			
			fetch('app/client/registration.php',{method:"POST",body:data})
			.then(data => data.json())
			.then(data => {
				if(data.response){
					alert('Registration Submitted and will be Validated by our administrators')
					window.location.href ="index.php"
				}
				if(!data.response){
					if(data.hasOwnProperty("message")){
						alert(data.message);
					}
				}
			})
			event.preventDefault();
			}, false);

			// CAMERA SETTINGS.
			Webcam.set({
				width: 440,
				height: 380,
				image_format: 'jpeg',
				jpeg_quality: 100
			});
			Webcam.attach('#camera');

			// SHOW THE SNAPSHOT.
			takeSnapShot = function () {
				Webcam.snap(function (data_uri) {
					document.getElementById('snapShot').style="display:block;"
					document.getElementById('btClear').style="display:unset;"
					document.getElementById('btnEscape').style="display:unset;"
					document.getElementById('snapShot').innerHTML = 
						'<img src="' + data_uri + '" id="img-container" width="440px" height="340px" style="border:2px solid #fff;box-shadow: 10px 10px 5px #ccc;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;-khtml-box-shadow: 10px 10px 5px #ccc;"/>';
					document.getElementById('camera').style="display:none;"
					document.getElementById('btPic').style="display:none;"
					var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
					document.getElementById('hidden-image').value = raw_image_data
				});
			}

			clearSS = function () {
				document.getElementById('camera').style="display:unset;"
				document.getElementById('btPic').style="display:unset;"
				document.getElementById('snapShot').style="display:none;"
				document.getElementById('btClear').style="display:none;"
				document.getElementById('btnEscape').style="display:none;"
			}

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