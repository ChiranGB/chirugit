<?php
include 'config.php';
session_start();
$cost = $_POST['Cost'];
$item = $_POST['Item'];
$total = 0;
$query6="SELECT LAST(expenseNo) AS maximum FROM expense";
$result7= mysqli_query($con,$query6);
if($result7){
    $row= mysqli_fetch_assoc($result7);
    $maximum= $row['maximum'];
    echo $maximum;
}

 foreach($item AS $key => $value){
     $total= $total + $cost[$key];
     $query7 = "INSERT INTO categorytable(expenseNo, item, cost)
     VALUES ('$maximum+1','$value','$cost[$key]')
     ";
     $insert = mysqli_query($con,$query7);
     if(!$insert){
         echo $mysqli->error;
     }else{
         $_SESSION['total'] = $total;
         header('location:addrecform.php');
         
     }
 }


?>