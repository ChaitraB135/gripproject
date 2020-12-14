<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select balance from users where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['balance'];
$from=$_SESSION['name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['name'];
$q1="select balance from users where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['balance'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update users set transfer='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update users set transfer='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'home.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'home.php';

}
?>