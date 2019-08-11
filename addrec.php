
<?php
    include 'config.php';
    session_start();
    $uid1=$_SESSION['user'];
    $categ=$_POST['category'];
    $cost=$_POST['amount'];
    $date=$_POST['dateof'];
    $place=$_POST['location'];  
    if (mysqli_connect_errno($con))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $qry10= "INSERT INTO expense(user_id,category,amount,date,location) values('$uid1','$categ','$cost','$date','$place')";
    $res = mysqli_query($con,$qry10);
    if($res)
    {
        header('location:index.php');
    }
    else{
        echo $qry10;
        echo $uid1;
        echo $categ;
        echo $cost;
        echo $date;
        echo $place;


        echo 'problem on insertion';
    }
    mysqli_close($con);
    
?>