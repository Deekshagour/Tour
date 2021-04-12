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
    ?>
    
    <?php
    $con=mysqli_connect('localhost','root',12345,'registration');
    $q="select * from add_place";
    $result=mysqli_query($con,$q);
    $resultrows=mysqli_fetch_array($result);
    ?>
    
    
    <div class="row">
        <div class="col-12">
            
            <table style="margin-left:50px;margin-top:20px;%;">
                <?php
                do{
                    ?>
                <tr style="color:#3bb9ff;"> <td>Place Name: <?php echo $resultrows[0] ?> <br>
                                            Package Name: <?php echo $resultrows[1] ?><br>
                                            Detail: <?php echo $resultrows[2] ?> <br>
                                            Cost per Person:<?php echo $resultrows[3] ?><br><br>
                                           <a href='booknow.php?id=<?php echo $resultrows[4] ?>' style="background-color:#3bb9ff;color:white;padding:2px;">Book Now</a><br><br></td></tr>
                <?php }while($resultrows=mysqli_fetch_array($result)) ; ?>
            </table>
        </div>
    </div>
    
    
    
    
</div>
    </body>
</html>