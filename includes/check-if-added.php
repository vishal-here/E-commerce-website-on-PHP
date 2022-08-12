<?php 



function check_if_added_to_cart($item_id,$user_id) {



$server = "localhost" ;
$user = "root" ;
$password = "" ;
$database = "store" ;
$con = mysqli_connect($server,$user, $password, $database) ;



 $sql = " SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart' " ;
$result = mysqli_query($con,$sql)  ;
$count = mysqli_num_rows($result) ;

if($count == 0){
	return 0 ;
}
else{
return 1 ;
}
}
 ?>