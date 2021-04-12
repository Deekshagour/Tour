<?php
session_start();
$con=mysqli_connect('localhost','root',12345,'registration');

$email=$_POST['email'];
$password=$_POST['password'];

echo $q="select * from tourism where email='$email' and password='$password'";

$result=mysqli_query($con,$q);
$numrows=mysqli_num_rows($result);
if($numrows==1){
    $_SESSION['email']=$email;
	$_SESSION['userlevel']="USER";
	header('location:travel.php');
}
else{
	header('location:login.html');
}
?>
