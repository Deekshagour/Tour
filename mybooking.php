

<html>
<head>
<title>travel</title>
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
    include('topmenu.php');
	$con=mysqli_connect("localhost","root",12345,"registration");
$username=$_SESSION['email'];$q="select * from booking where bookedby='$username'";
$result=mysqli_query($con,$q);
$result_rows=mysqli_fetch_array($result);
    ?>
    
    <div class="col-6">
<div style="margin-left:70px;margin-top:40px;">
<table  align="right" border="4" width="180%" cellspacing="10px" cellpadding="10px">
<tr>

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
<td><?php echo $result_rows[1];?></td>
<td><?php echo $result_rows[2];?></td>
<td><?php echo $result_rows[3];?></td>
<td><?php echo $result_rows[4];?></td>
<td><?php echo $result_rows[5];?></td>
<td><?php echo $result_rows[6];?></td>

</tr>
<?php
}
while($result_rows=mysqli_fetch_array($result))
	
?>
</table>
</div>
</div>
</body>
   </html>