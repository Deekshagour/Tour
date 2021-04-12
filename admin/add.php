<?php
$place_name=$_POST['place_name'];
$package=$_POST['package'];
$detail=$_POST['detail'];
$cost_per_person=$_POST['cost_per_person'];

$con=mysqli_connect('localhost','root',12345,'registration');

$q="INSERT INTO add_place(place_name,package_name,detail,cost_per_person)VALUES('$place_name','$package','$detail','$cost_per_person')";
$result=mysqli_query($con,$q);
if($result){
	header('location:travel.php');
}

	

?>