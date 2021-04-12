<?php
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];

$password=$_POST['password'];
$con=mysqli_connect('localhost','root',12345,'registration');

$select = "select * from tourism where email='$email'";
$numrows =mysqli_num_rows(mysqli_query($con,$select));
if($numrows==0){

$q="INSERT INTO tourism(name,mobile_no,email,password)VALUES('$name','$mobile_no','$email','$password')";
$result=mysqli_query($con,$q);
if($result){
	header('location:login.html');
}
    
else{
	header('location:register.php');
}
}else{
    header('location:emailexist.php');
}
	

?>
