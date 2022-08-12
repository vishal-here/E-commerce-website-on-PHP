<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	<div class="header">
		<div class="inner-header">
			<div class="logo">
			 <h1>Lifestyle Store</h1> 
			</div>

<?php 
			if (isset($_SESSION['email'])) {

			?>
	<form action = "logout.php">
					<div class="header-link"> 
				<a href="./login.php">    
					<button type="submit" class="btn btn-secondary login"> <b> Logout </b></button>
				</a>
			</div>
		</form>
			<div class="header-link"> 
				<a href="./contact.php">  
					<button type="button" class="btn btn-secondary login"> <b> Setting </b></button>
				</a>
			</div>
			<div class="header-link"> 
				<a href="./cart.php">    
					<button type="button" class="btn btn-secondary login"> <b> Cart </b></button>
				</a> 
			</div>


				
			

	<?php  	} 	
		else {
		 ?>
		<div class="header-link">
					<a href="signup.php">    
						<button type="button" class="btn btn-secondary login"> <b> Sign Up </b></button>
					</a>
				</div>
				
				<div class="header-link"> 
					<a href="login.php">  
						<button type="button" class="btn btn-secondary login"> <b> Login </b></button>
					</a>
				</div>

	<?php 	} ?>
	</div>

</div>
</nav>