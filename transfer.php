<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
//mysqli_select_db($con,'test');
$q="select name from users";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>View User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            wnameth:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            wnameth:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body background="img/s.jpg" style="background-size: 1450px 750px; background-repeat: no-repeat;">
     <form action="checktransfer.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <center><strong>Transfer Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div></center>
        </form>

        
    </body>
</html>
