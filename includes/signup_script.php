 <?php 
 require 'common.php' ;

 $dbemail = $_POST['newemail'] ;
 $sql = "select * from users where email = '$dbemail' " ;
 $result = mysqli_query($con,$sql) or die("Bad query !!") ;

 $count = mysqli_num_rows($result) ;

 if($count){
    echo "<br><br><strong>This email is already in use </strong>" ;
}
else{
    $dbname = $_POST['newname'] ;
    $dbpass = $_POST['newpass'] ;
    $dbaddress = "Sikkim" ;
    $dbcity = "Kolkata" ;
    $query = "INSERT INTO `users` ( `name`, `email`, `passwords`, `contact`, `city`, `address`) VALUES ('$dbname', '$dbemail', '$dbpass', '89*******2', '$dbcity', '$dbaddress')" ;
    $res = mysqli_query($con,$query) ;

    $sql = "select * from users where email = '$dbemail' AND passwords ='$dbpass'" ;
    $result = mysqli_query($con,$sql) or die("Bad query !!") ;

    $row = mysqli_fetch_assoc($result) ;
    $_SESSION['user_id'] = $row["id"];
    $_SESSION['email'] = $row["email"];
     $_SESSION['name'] = $row["name"] ;

    header('location: product.php') ;
    $message = "Logged in successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>