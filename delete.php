<?php
session_start();
include 'config.php';
$id=$_GET['id'];
$qry3="DELETE FROM expense WHERE expenseNo = $id";
$outcome= mysqli_query($con,$qry3);
$session=$_SESSION['redirect'];
if($session == 1){
    header('location:view.php');
}
else if($session== 2)
{
    header('location:view1.php');
}
else if($session == 3)
{
    header('location:view2.php');
}
else if($session == 4)
{
    header('location:view3.php');
}
else if($session == 5)
{
    header('location:view4.php');
}
else if($session == 6)
{
    header('location:view5.php');
}
?>