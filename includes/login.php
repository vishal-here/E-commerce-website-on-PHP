
<?php require 'common.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<title>
		Login
	</title>
</head>
<body>

	<?php $_SESSION['email'] = NULL; ?>

<!-----------
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<div class="header">
			<div class="inner-header">
				<div class="logo"> <h1>Lifestyle Store</h1> </div>
				<div class="header-link"> 
					<a href="signup.html">    
						<button type="button" class="btn btn-secondary login"> <b> Sign Up </b></button>
					</a> </div>
					<div class="header-link"> 
						<a href="#">  
							<button type="button" class="btn btn-secondary login"> <b> Login </b></button>
						</a>
					</div>
				</div>

			</div>
		</nav> 
 ---->

 <?php include 'header.php' ?>
		<div id="banner_image">

			<div class="loginbody">

				<div class="loginbg">

					<div class="card text-dark bg-light mb-3 logincard" >
						<div class="card-body">
							<h1 class="card-title">Log in</h1>
						</div>
					</div>
					<div class="innerlogin">
						

			<form method="post" action="login_submit.php">


				<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label mylabel" >Email address</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" name="useremail" placeholder="name@example.com">
						</div>

						<div class="mb-3">
							<label  class="form-label mylabel">Password</label>
							<input type="password" class="form-control" id="inputPassword" name="userpassword" placeholder="Enter you password">
						</div>

						<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label mylabel" for="flexCheckDefault">
							Remember Password
						</label>

					</div>

					<div class="signinbox">
						<div class="leftkey">
							<a href="#" class="signuplink"> Forgot Password ?</a> 
						</div>
						<div class="rightkey">
							<a href="./product.php"> 
								<button type="submit" class="btn btn-primary ">
								 <b> Login </b>
								</button>
							</a> 
							
						</div>
					</div>



						</form>
		

					</div>



					<div class="card text-dark bg-light mb-3 logincard" >
						<div class="card-body">
							<a href="./signup.php" class="signuplink" >	<h6 class="card-title">Need an account ? Sign Up ! </h6> </a>
						</div>
					</div>


				</div>

			</div>
		</div>
			<!-- <div class="footer">
				<h5 class="footercontent">Copyright © Lifestyle Store. All Rights Reserved    &nbsp &nbsp &nbsp &nbsp Contact Us: +91 90000 00000</h5>

			</div> -->
			<?php include 'footer.php'  ?>
		</body>
		</html>