

<?php 

$id=0;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$query ="SELECT * from add_place where id='$id'";

$con=mysqli_connect('localhost','root',12345,'registration');
$result =mysqli_query($con,$query);
$resultrows= mysqli_fetch_array($result);


?>
<html>
<head>
<title>BOOK NOW</title>
<link rel="stylesheet" type="text/css" href="grid.css">
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
	if(!isset($_SESSION['email']) OR $_SESSION['userlevel']!="USER"){
    header('location:login.html');
}
    ?>
<div class="row">
<div class="col-3"style="border:1px solid #3bb9ff; margin-top:5%; ">
<center>

<form action="book.php" method="post" >
<table align="center"style="margin-top:10%">
<td>BOOKED BY &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp   <input type="text" name="user_name" placeholder="enter user_name" value="<?php echo $_SESSION['email'];?>" readonly><br><br></td></tr>
<tr>
<td>PACKAGE ID&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="text" value="<?php echo $resultrows[4];?>" readonly name="package">
<br><br></td></tr>
</tr>
<td>NO_OF_MEMBER &nbsp &nbsp  <input type="number" name="no_of_member" placeholder="no_of_member" min="1" max="100"><br><br></td></tr>
<tr>
<td>DATE &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <input type="date" name="date" 
placeholder="enter date" required><br><br></td></tr>
<input type="hidden" value="<?php echo $resultrows[3];?>" name="cost">
<tr>
<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp <input type="submit" value="Book Now" style="background-color:#3bb9ff;"></td></tr>

</table>
</form>
</table>
</center>

</div>
</div>
</div>
</body>
</html>