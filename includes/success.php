
<?php require 'common.php' ?>

<?php 
if(isset($_SESSION['email'])){

$usr = $_SESSION['user_id'] ;
 $sql = "UPDATE users_items SET status = 'Confirmed'  WHERE user_id = $usr AND status = 'Added to cart' " ;
 $res = mysqli_query($con,$sql)  or die ("Bad Query : $sql");


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
    <title>success</title>
  </head>
  <body>
  <?php include 'header.php' ; ?>

   <div id="banner_image">

    <div class="container1">
      <div id="banner_content">
        <h1>
          Order Placed Successfully !!
        </h1><br>
        <a class ="btn btn-success btnlg active" href="./product.html" >
          <b>Shop More !! </b>
        </a>
      </div>
    </div>

</div>
<?php include 'footer.php' ; ?>



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


<?php
}
else{
header('location: index.php') ;
}
 ?>
}
