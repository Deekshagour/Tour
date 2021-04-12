<?php
session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
    header('location:logincheck.html');
}
?>
<?php
$id=0;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$con = mysqli_connect('localhost','root',12345,'registration');
$q = "select * from add_place where id='$id'";
$result = mysqli_query($con,$q);
$resultrows = mysqli_fetch_array($result);
?>






<html>
<head>
<title>add place</title>
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
<div class="col-3"style="border:1px solid #3bb9ff; margin-top:5%; ">
<center>

<form action="updateplace.php" method="post" >
    <input type="hidden" value="<?php echo $id;?>" name="id">
<table align="center" style="margin-top:10%">

<h3 style="margin-bottom:-20%;">UPDATE PLACE</h3>

<tr><td>PLACE_NAME</td> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <td><input type="text" name="place_name" value="<?php echo $resultrows[0]; ?>">

 </td></tr>
<tr>
<td>PACKAGE NAME  </td><td><input type="text" name="package" value="<?php echo $resultrows[1]; ?>">
</td></tr>


<tr>
<td>DETAIL </td><td>&nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="detail" value="<?php echo $resultrows[2]; ?>"></td></tr>
<tr>
<td>COST_PER_PERSON </td><td><input type="text" name="cost_per_person" value="<?php echo $resultrows[3]; ?>"></td></tr><br><br>
<tr>
<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp <input type="submit" value="Update Place"></td></tr>

</table>
</form>
</center>

</div>
</div>
</div>
</body>
</html>