<?php require 'common.php' ; 


$dbemail = $_POST['useremail'] ;
$dbpass = $_POST['userpassword']   ;
echo "Checking in database .........." ;
echo "<br><br> Email entered :  ".$dbemail ;
echo "<br> Password entered :  ".$dbpass ;
$sql = "SELECT * FROM users WHERE email = '$dbemail' AND passwords = '$dbpass' ";
$result = mysqli_query($con, $sql) or die("Bad query : $sql") ;


if (mysqli_num_rows($result) > 0) {
  // output data of row
   $row = mysqli_fetch_assoc($result) ;
    $_SESSION['user_id'] = $row["id"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['name'] = $row["name"] ;
?>

  

  <?php  
   
    header('location: product.php') ;
    $message = "Logged in successfully";
echo "<script type='text/javascript'>alert('$message');</script>";

  }
 else {

  ?>

  <?php   echo " <br><strong>Please enter a valid email and password !!  : (</strong><br>";
          echo "<br>if you are a new customer please sign up first !!! " ;
}




?>

