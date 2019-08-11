

<?php


$user=$_POST["username"];
$pass=$_POST["password"];
// Create connection
include 'config.php';

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $qry="SELECT * FROM user_profile where user_id='$user'&& password='$pass'";
  $result = mysqli_query($con,$qry);
  $num = mysqli_num_rows($result);
  if($num==1){
    session_start();
    $_SESSION['user']=$user;
    header('location:index.php');
   
  }
  else{
    $_SESSION['message']='Wrong Username Or Password!';
    header('location:login.php');
    
  }
  mysqli_close($con);
  
?>