<?php
session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
    header('location:logincheck.html');
}
?>


<html>
<head>
<title>view Place</title>
<link rel="stylesheet" type="text/css" href="grid.css">
        <style>
a:link{
text-decoration:none;


}
a.service:visited{color:black;}
a:visited {color:e55451;}
a.nav:hover{background-color:#151b54;color:white;}
</style>
</head>
<body>


<div class="container">
<?php
include('header.php');
?>
    
    
<div class="row">
<div class="col-1"style="padding-right:20px;">
<?php
$con=mysqli_connect("localhost","root",12345,"registration");

$id=0;
if(isset($_GET['id'])){
    $id=$_GET['id'];
	$q="select * from add_place where id='$id'";
}else{

$q="select * from add_place";
}
$result=mysqli_query($con,$q);
$result_rows=mysqli_fetch_assoc($result);
?>
</div>
<div class="col-6">
<div style="margin-left:70px;margin-top:40px;">
<table  align="right" border="4" width="180%" cellspacing="10px" cellpadding="10px">
<tr>
<th>PACKAGE ID</th>
<th>PLACE NAME</th>
<th>PACKAGE NAME</th>
<th>DETAIL</th>
<th>COST PER PERSON</th>
<th>ACTION</th>
</tr>

<?php
do{
   ?>
   <tr>
   <td><?php echo $result_rows['id'];?></td>
<td><?php echo $result_rows['place_name'];?></td>
<td><?php echo $result_rows['package_name'];?></td>
<td><?php echo $result_rows['detail'];?></td>
<td><?php echo $result_rows['cost_per_person'];?></td>
<td><a href="edit_place.php?id=<?php echo $result_rows['id'];?>">EDIT PLACE</td>
</tr>

<?php
}
while($result_rows=mysqli_fetch_assoc($result))
	
?>

</div>
</div>
</table>
</body>
</html>