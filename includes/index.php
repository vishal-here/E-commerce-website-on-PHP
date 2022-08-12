
<?php require 'common.php' ?>

	<?php $_SESSION['email'] = NULL; 

	if (isset($_SESSION['email'])) {
header('location: product.php');
}


	?>

<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<title>LifeStyle Store</title>
		
	</head>
	<body>
	<!-- 	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="header">
				<div class="inner-header">
					<div class="logo"> <h1>Lifestyle Store</h1> </div>
					<div class="header-link"> 
						<a href="./signup.php">    
							<button type="button" class="btn btn-secondary login"> <b> Sign Up </b></button>
						</a> </div>
						<div class="header-link"> 
							<a href="./login.php">  
								<button type="button" class="btn btn-secondary login"> <b> Login </b></button>
							</a>
						</div>
					</div>

				</div>
			</nav> -->

			<?php include 'header.php' ?>

			<div id="banner_image">

				<div class="container1">
					<div id="banner_content">
						<div>
							<h1>Welcome Again !!</h1><br>
						</div>
						<a class ="btn btn-danger btnlg active"href="./login.php" >
							<b>Shop Now </b>
						</a>
					</div>
				</div>

			</div>
			<div class="footer">
				<?php include 'footer.php' ?>
			</div>

		</body>
		</html>
