


<html>
<head>
<title>travel</title>
<link rel="stylesheet" type="text/css" href="grid.css">
<style>
a:link{
text-decoration:none;


}

a:visited {color:e55451;}
a.nav:hover{background-color:#151b54;color:white;}
</style>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-12" style="background-color:#3bb9ff;">
<h1 style="color:yellow;font-size:50px;padding-left:40px;padding-bottom:-20px;margin-bottom:-2px;">TRAVEL <font color="white">& </font><font color="yellow">
TOURISM </font><br><font size="3px"color="white"><u>_________YOUR TOUR GUIDE</u></font></</h1>
</div>
</div>

<?php
    include('navigation.php');
	
	

$con=mysqli_connect('localhost','root',12345,'registration');
$username =$_SESSION['email'];
$q="select * from tourism where email='$username'";
$result=mysqli_query($con,$q);
$resultrows=mysqli_fetch_array($result);
?>

   
	
	<div class="row">
	<div class="col-12">
	<center>
	<table>
	<tr><td>Name:</td><td> <?php echo $resultrows[0] ?> </td></tr>
	<tr><td>Mobile No.:</td><td><?php echo $resultrows[1] ?> </td></tr>
	<tr><td>Email:</td><td><?php echo $resultrows[2] ?> </td></tr>
	</table>
	</center>
	<br><br><br><br><br><br><br><br><br><br>
	</div>
	</div>
	
	
	<div class="row">
<div class="col-12">
<h3 align="center" style="background-color:#3bb9ff;padding-top:10px;padding-bottom:10px;"> Project by Damini mourya </h3>

</div></div>
