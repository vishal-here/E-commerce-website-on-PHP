<?php  
session_start() ;


$server = "localhost" ;
$user = "root" ;
$password = "" ;
$database = "store" ;
$con = mysqli_connect($server,$user, $password, $database) ;

if(!$con){
	die("connection to this database failed due to ".mysql_error()) ;
} 


?>