<?php
session_start();
include 'config.php';
$id=$_GET['id'];
$categ2=$_POST['category'];
$cost2=$_POST['amount'];
$date2=$_POST['dateof'];
$place2=$_POST['location'];
$qry7= "UPDATE expense SET category = '$categ2', amount = '$cost2' , date = '$date2', location = '$place2' WHERE expenseNo = '$id' ";
mysqli_query($con,$qry7);
$session=$_SESSION['redirect'];
if($session== 1){
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