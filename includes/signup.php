
<?php require 'common.php' ?>

<?php if(isset($_SESSION['email'])){
header('location:product.php') ;


}

else{ ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<title>
		Sign Up
	</title>
</head>
<body>



<!-- 	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<div class="header">
			<div class="inner-header">
				<div class="logo"> <h1>Lifestyle Store</h1> </div>
				<div class="header-link"> 
					<a href="#">    
						<button type="button" class="btn btn-secondary login"> <b> Sign Up </b></button>
					</a> </div>
					<div class="header-link"> 
						<a href="./login.html">  
							<button type="button" class="btn btn-secondary login"> <b> Login </b></button>
						</a>
					</div>
				</div>

			</div>
		</nav> -->
<?php include 'header.php' ?>
		<div id="banner_image">

			<div class="loginbody">

				<div class="loginbg">

					<div class="card text-dark bg-light mb-3 logincard" >
						<div class="card-body">
							<h1 class="card-title">Create an account</h1>
						</div>
					</div>
					<div class="innerlogin">
						<form method="post" action="signup_script.php">
						<div class="nameplate">
							<div class="firstnamediv">
								<div class="mb-3">
									<label  class="form-label mylabel">First Name</label>
									<input type="text" name = "newname" aria-label="First name" class="form-control" placeholder="Enter First Name" required>
								</div>

							</div>
							<div class="secondnamediv">
								<div class="mb-3">
									<label  class="form-label mylabel">Last Name</label>
									<input type="text" aria-label="Last name" class="form-control" placeholder="Enter Last Name">
								</div>

							</div>



						</div>
						<div class="nameplate">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label mylabel">Email address</label>
								<input type="email" name ="newemail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
							</div>
						</div>

						<div class="nameplate">
							
							<div class="firstnamediv">
								<div class="mb-3">
									<label  class="form-label mylabel">Password</label>
									<input type="password" name= "newpass" class="form-control" id="password"placeholder="Enter Password">
								</div>

							</div>

							<div class="secondnamediv">
								<div class="mb-3">
									<label  class="form-label mylabel">Confirm Password</label>
									<input type="password" class="form-control" id="confirm_password" placeholder="Re-enter Password">
								</div>

							</div>
						</div>
						
						<div class="nameplate">
							<a href="./product.php"> <button onclick="validatePassword()" type="submit" class="btn btn-primary createaccountbutton " >
								Create my Account !
							</button>

						</a></div>
						
						</form>



					</div>



					<div class="card text-dark bg-light mb-3 logincard" >
						<div class="card-body">
							<a href="./login.html" class="signuplink" >	<h6 class="card-title">Have an account ? Go to Log in ! </h6> </a>
						</div>
					</div>


				</div>

			</div>
		</div>
		<div class="footer">
			<h5 class="footercontent">Copyright © Lifestyle Store. All Rights Reserved    &nbsp &nbsp &nbsp &nbsp Contact Us: +91 90000 00000</h5>

		</div>


		<script type="text/javascript">
				
				
				
				function validatePassword(){

				console.log(" it's working !! ") ;
				var password = document.getElementById("password") ;
				var confirm_password = document.getElementById("confirm_password") ;

				console.log(password.value) ;
				console.log(confirm_password.value) ;

					if(password.value != confirm_password.value){
						console.log(" don't match !! ") ;
						confirm_password.setCustomValidity("Passwords don’t match!");
						
					}
				else {
					console.log(" matched!!") ;
					confirm_password.setCustomValidity('');
				
			}

		}

			password.onchange = validatePassword();

			confirm_password.onkeyup = validatePassword();
	</script>
</body>
</html>

<?php }  ?>
