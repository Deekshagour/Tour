<?php
$place_name=$_POST['place_name'];
$package=$_POST['package'];
$detail=$_POST['detail'];
$cost_per_person=$_POST['cost_per_person'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root',12345,'registration');
$updatequery="update add_place set place_name='$place_name',package_name='$package',detail='$detail',cost_per_person='$cost_per_person'where id='$id'";
$result = mysqli_query($con,$updatequery);
if($result){
    header('location:viewplace.php');
}else{
    echo 'Something went wrong. cannot update at this moment ';
}