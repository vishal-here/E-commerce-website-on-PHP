<?php require 'common.php' ?>

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



    <?php include 'header.php' ;
          include 'check-if-added.php' ;

$yourname = $_SESSION['name'] ;
          ?>


    <div id="banner_image2">

      <div class="container">
        <div class="containercontent">
          <div class="welcome">
            <br><br> <h1>Hello <?php echo $yourname." !" ?> <br>Welcome to our LifeStyle Store </h1><br>
            <h6>No need to hunt around everywhere. We have all at one place.</h6><br><br>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="rows">
          <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?camera" class="card-img-top" alt="camera1">
              <div class="welcome">
                <br><h2 class="card-title">Camera 1</h2>
                <p class="card-text">Price : Rs.35000</p>

                <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(1,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=1" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>

       

             <!--    <a href="./cart.php" class="btn btn-primary createaccountbutton">Add to cart</a> -->
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?cAmera" class="card-img-top" alt="camera2">
              <div class="welcome">
                <br><h2 class="card-title">Camera 2</h2>
                <p class="card-text">Price : Rs.32000</p>
                
 <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(2,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=2" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
  ?>

              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?cAMera" class="card-img-top" alt="camera3">
              <div class="welcome">
                <br><h2 class="card-title">Camera 3</h2>
                <p class="card-text">Price : Rs.30000</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(3,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=3" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?cAMEra" class="card-img-top" alt="camera4">
              <div class="welcome">
                <br><h2 class="card-title">Camera 4</h2>
                <p class="card-text">Price : Rs.28000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(4,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=4" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
        </div>
         <div class="rows">
          <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?wristwatch" class="card-img-top" alt="watch1">
              <div class="welcome">
                <br><h2 class="card-title">Watch 1</h2>
                <p class="card-text">Price : Rs.5000</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php?" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(5,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=5" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?wristwatcH" class="card-img-top" alt="watch2">
              <div class="welcome">
                <br><h2 class="card-title">Watch 2</h2>
                <p class="card-text">Price : Rs.10000</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(6,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=6" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?wristwatCH" class="card-img-top" alt="watch3">
              <div class="welcome">
                <br><h2 class="card-title">Watch 3</h2>
                <p class="card-text">Price : Rs.3000</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(7,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=7" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?wristwaTCH" class="card-img-top" alt="watch4">
              <div class="welcome">
                <br><h2 class="card-title">Watch 4</h2>
                <p class="card-text">Price : Rs.8000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(8,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=8" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
        </div>
         <div class="rows">
          <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?Shirt" class="card-img-top" alt="shirt1">
              <div class="welcome">
                <br><h2 class="card-title">Shirt 1</h2>
                <p class="card-text">Price : Rs.3000</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(9,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=9" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?ShirT" class="card-img-top" alt="shirt2">
              <div class="welcome">
                <br><h2 class="card-title">Shirt 2</h2>
                <p class="card-text">Price : Rs.5000</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(10,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=10" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?ShIRT" class="card-img-top" alt="shirt3">
              <div class="welcome">
                <br><h2 class="card-title">Shirt 3</h2>
                <p class="card-text">Price : Rs.30000</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

if (check_if_added_to_cart(11,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=11" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
            <div class="card">
              <img src="https://source.unsplash.com/200x200/?ShiRT" class="card-img-top" alt="shirt4">
              <div class="welcome">
                <br><h2 class="card-title">Shirt 4</h2>
                <p class="card-text">Price : Rs.28000</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="./login.php" class="btn btn-primary createaccountbutton">Buy Now </a></p>
<?php
} else {

  if (check_if_added_to_cart(12,$_SESSION['user_id'])) { 
echo '<a href="./cart.php" class="btn btn-primary createaccountbutton disabled">Add to cart</a>';
} 

else {
?>
<a href="./cart-add.php?id=12" class="btn btn-primary createaccountbutton">Add to cart</a>
<?php
}
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="footer">
     <h5 class="footercontent">Copyright © Lifestyle Store. All Rights Reserved    &nbsp &nbsp &nbsp &nbsp Contact Us: +91 90000 00000</h5>

   </div>



   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>
