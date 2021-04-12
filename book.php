<?php
$name=$_POST['user_name'];
$package_no=$_POST['package'];
$cost=$_POST['cost'];
$no_of_member=$_POST['no_of_member'];

$date=$_POST['date'];
$total = $cost* $no_of_member;
$con=mysqli_connect('localhost','root',12345,'registration');
echo $q="INSERT INTO booking(packageid,bookedby,date,noofperson,total)VALUES('$package_no','$name','$date','$no_of_member','$total')";
$result=mysqli_query($con,$q);
if($result){
	header('location:mybooking.php');
}
else{
	header('location:travel.php');
}


?>
