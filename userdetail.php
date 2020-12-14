<?php 
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>View User</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
    <body background="img/k.jpg" style="background-size: 1450px 750px; background-repeat: no-repeat;">
    <div class="view">
        <center><h2>User Details</h2></center>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Balance</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="viewuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text">Back</p>
                 <div class="css-button-inner">
                 <a href="selectuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Back</p>
               </div></a>
               </div>
               </div>
               


    </body>
</html>