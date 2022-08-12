<?php 

$get_id = $_GET['id'] ;

include 'common.php' ;
$usr = $_SESSION['user_id'] ;
$sql = "INSERT INTO users_items(user_id, item_id, status) VALUES('$usr', '$get_id', 'Added to cart')" ;
$result = mysqli_query($con, $sql) or die("Bad query : $sql") ;

header('location: product.php') ;
 ?>