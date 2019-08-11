<?php
     session_start();
    include 'config.php';
    $name=$_POST['name'];
    $uid=$_POST['uid'];
    $pass=$_POST['password'];
    $pass1=$_POST['password1'];
    $errors=array();
    if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
    if($pass!=$pass1)
    {
        array_push($errors,"password do not match!");
        header('location:registerpage.php');
    }
    else{
    $qry="SELECT * FROM user_profile where user_id='$uid'";
    $result=mysqli_query($con,$qry);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        header('location:registerpage.php');
    }
    else{
       
        $qry1= "INSERT into user_profile(name,user_id,password) values('$name','$uid','$pass')";
        mysqli_query($con,$qry1);
        $_SESSION['user']=$uid;
        header('location:index.php');
    }
    }}
        mysqli_close($con);
    ?>