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
$q="select * from booking";
$result=mysqli_query($con,$q);
$result_rows=mysqli_fetch_array($result);
?>
</div>
<div class="col-6">
<div style="margin-left:70px;margin-top:40px;">
<table  align="right" border="4" width="180%" cellspacing="10px" cellpadding="10px">
<tr>
<th>BOOKING ID</th>
<th>PACKAGE ID</th>
<th>BOOKED BY</th>
<th>DATE</th>
<th>PERSONS</th>
<th>TOTAL</th>
<th>STATUS</th>
</tr>

<?php
do{
   ?>
   <tr>
<td><?php echo $result_rows[0];?></td>
<td><a href="viewplace.php?id=<?php echo $result_rows[1];?>"><?php echo $result_rows[1];?></a></td>
<td><a href="viewusers.php?id=<?php echo $result_rows[2];?>"><?php echo $result_rows[2];?></a></td>
<td><?php echo $result_rows[3];?></td>
<td><?php echo $result_rows[4];?></td>
<td><?php echo $result_rows[5];?></td>
<td><?php echo $result_rows[6];?></td>
</tr>
<?php
}
while($result_rows=mysqli_fetch_array($result))
	
?>

</div>
</div>
</table>
</body>
</html>