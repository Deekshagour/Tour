<?php
session_start();
$con=mysqli_connect('localhost','root',12345,'registration');

$username=$_POST['username'];
$password=$_POST['password'];

$q="select * from admin where username='$username' and password='$password'";

$result=mysqli_query($con,$q);
$numrows=mysqli_num_rows($result);

if($numrows==1)
{
   $_SESSION['username']= $username;
   $_SESSION['userlevel'] = 'ADMIN';
   header('location:travel.php');
    
}

else{

      header('location:logincheck.html');}
?>
