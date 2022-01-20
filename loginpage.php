<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>ROARS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <link rel="icon" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


</head>
<body>

	
<script>
	 function r(id){
		window.location.href = 'registration.php'
	 }
</script>
<section>
	
</section>
 <div class="container">
 	<div class="header">
		 <img src="images/logo.jpeg" width="120" height="110" alt="">
 		<h1>Login</h1>
 	</div>
 	<div class="main">
 		<form>
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Username" name="username">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="Password" name="pw">
 			</span><br>
 				<button type="submit"> <a href="index.html"></a> Sign in</button>
				
 		</form>
		 <button id="signup" onclick="r(this)">Sign Up</button>
		 <br>
		 <br>
 	</div>
 </div>
 <script type="text/javascript">
		var form = document.querySelector("form");
			form.addEventListener("submit", function(event) {
			var data = new FormData(form);
			
			fetch('app/client/auth.secure.php',{method:"POST",body:data})
			.then(data => data.json())
			.then(data => {
				if(data.response){
					document.cookie=`username=${data.user.username};`
					document.cookie=`fullname=${data.user.name};`
					document.cookie=`user_id=${data.user.ID};`
					document.cookie=`validated=${data.user.validated};`
					return window.location.href ="index.php"
				}
				return alert(data.message)
			})
			event.preventDefault();
			}, false);
</script>

</body>
</html>