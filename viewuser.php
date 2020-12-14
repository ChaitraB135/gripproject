<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>View User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body background="img/o.jpg" style="background-size: cover;">
    <div class="view">
        <h1>Select name for transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="Transfer"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>