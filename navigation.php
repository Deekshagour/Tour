<?php
session_start();
?>

<div class="row">
<div class="col-5">
<img src="p/x.jpg"style="padding-right:210%;">
</div>

<div class="col-1">
<p style="color:151b54; padding-top:-10px;margin-bottom:-6px;"><a class="nav" href="travel.php">HOME</a></p>
</div>


<div class="col-1">
<p style="color:e55451;padding-left:0%;margin-bottom:-6px;"><a class="nav" href="viewall.php">PACKAGES</a> </p>
</div>


<div class="col-1">
<p style="color:348017;margin-bottom:-6px;"><a class="nav" href="news.php">SERVICES</a></p>
</div>

<?php 
if(isset($_SESSION['email'])){
	?>
<div class="col-1">
<p style="color:e55451;padding-left:0%;margin-bottom:-6px;"><a class="nav" href="profile.php">MY PROFILE</a> </p>
</div>
<div class="col-1">
<p style="color:e55451;padding-left:0%;margin-bottom:-6px;"><a class="nav" href="mybooking.php">MY BOOKING</a> </p>
</div>
   <div class="col-1">
<p style="color:ee9a4d;margin-bottom:-6px;"><a class="nav" href="logout.php">LOGOUT</a></p>
</div> 
<?php
}else{?>
<div class="col-1">
<p style="color:ee9a4d;padding-left:50%;margin-bottom:-6px;"><a class="nav" href="registration.php">REGISTRATION</a></p>
</div>


<div class="col-2">
<p style="color:c12869;padding-left:70%; margin-bottom:-6px;"><a class="nav" href="login.html">LOGIN</a></p>
</div>
<?php
}
?>

</div>