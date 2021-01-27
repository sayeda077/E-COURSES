<?php

session_start();



$con= mysqli_connect('localhost','root');
if($con){
	echo "connection successful ";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'project');

$email=$_POST['email'];
$pass=$_POST['password'];

$q="select * from admin where email='$email' && password= '$pass'";

$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1){
	
    $_SESSION['email']= $email;
    header('location:index4.php');

}else{
	header('location:index.php');
}

?>