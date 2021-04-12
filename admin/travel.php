<?php
session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
    header('location:logincheck.html');
}
?>


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
include('header.php');
?>
















</div>
</body>
</html>














