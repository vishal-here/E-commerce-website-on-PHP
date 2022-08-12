
<?php require 'common.php' ?>


<?php 

if(isset($_SESSION['user_id']))
{
$usr = $_SESSION['user_id'] ;

$sql1 = "SELECT users_items.user_id , users_items.item_id, items.name , items.price FROM items INNER JOIN users_items ON items.id = users_items.item_id WHERE user_id = '$usr' " ;

$res = mysqli_query($con,$sql1) or die("Bad query : $sql1") ;
$count = mysqli_num_rows($res) ;


if($count){

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
    <title>myCart</title>
  </head>
  <body>
 

    <?php include 'header.php' ?>


    <div id="banner_image2">

<div class="container1">
  <div class="containercontent">
    <div class="welcome">
      <br><h1>
        <strong>ORDER SUMMARY</strong>
      </h1>
    </div>
  </div>
  
</div>
<div class="container">
  <div class="cartbg">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item ID</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Confirmation</th>
    </tr>
  </thead>
<?php $i = 1 ;
while($i <= $count){
  $row = mysqli_fetch_assoc($res) ;
    $itemid = $row['item_id'];
    $itemname = $row['name'] ;
    $itemprice = $row['price']
    
?>
  

 <tbody>
    <tr>
      <th scope="row"><?php echo $itemid ; ?></th>
      <td><?php echo $itemname  ;?></td>
      <td> <?php echo $itemprice ; ?></td>

      <td><a href="cart-remove.php?id= <?php echo $itemid ?>" class="btn btn-danger">Remove Item</a></td>
    </tr>


<?php 
  $i++ ;
}
 ?>
 
<!--  
    <tr>
      <th scope="row">2</th>
      <td>Shirt 2</td>
      <td>Rs. 5000</td>
     <td><a href="#" class="btn btn-danger">Remove Item</a></td>
    </tr>
   <tr>
      <th scope="row">3</th>
      <td> Watch 3</td>
      <td>Rs. 8000</td>
      <td><a href="#" class="btn btn-danger ">Remove Item</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Shirt 4</td>
      <td>Rs. 2000</td>
     <td><a href="#" class="btn btn-danger ">Remove Item</a></td>
    </tr>
    <tr> -->
        <td></td>
        <td></td>
        <td></td>
     <td><a href="./success.php" class="btn btn-primary ">Confirm Order</a></td>
    </tr>

  </tbody>
</table>
  </div>

  <?php include 'footer.php' ; ?>

<!-- 
</div>
    </div>

    <div class="footer">
     <h5 class="footercontent">Copyright © Lifestyle Store. All Rights Reserved    &nbsp &nbsp &nbsp &nbsp Contact Us: +91 90000 00000</h5>

   </div>
 -->


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
else {
  echo "Add items to cart first !!!" ;
}
?> 



<?php 
}

else{
  header('location: login.php') ;

}
 ?>
