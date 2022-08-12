<?php 
include 'common.php' ;

$getid = $_GET['id'] ;
echo $getid;
$usr = $_SESSION['user_id'] ;

$sql = "DELETE FROM users_items WHERE item_id = '$getid' AND user_id = '$usr' ;" ;
$res = mysqli_query($con, $sql) or die("Bad Query : $sql") ;

 header('location: cart.php') ;

 ?>