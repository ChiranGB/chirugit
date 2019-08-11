<?php
session_start();
$output= NULL;
include 'config.php';
$search = $_POST['category'];
$curuser= $_SESSION['user'];
$qry5="SELECT u.name,e.user_id, e.category,e.amount,e.location, e.date,e.expenseNo
FROM (user_profile as u NATURAL JOIN expense as e) where category = '$search' and  user_id = '$curuser'";
$result3 =mysqli_query($con,$qry5);
$num7 = mysqli_num_rows($result3);
  if($num7>0){
    header('location:view4.php');
    $_SESSION['cat']=$search;
  }
  else{
    $_SESSION['isfound'] = false;
    header('location:view.php');
  }

?>