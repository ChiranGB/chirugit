<html>
<head>
    <title>Add record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'config.php';
    $id=$_GET['id'];
    $qry7= "SELECT * from expense WHERE expenseNo = ".$id;
    $result2 = mysqli_query($con, $qry7);
    if($result2){
        $row = mysqli_fetch_assoc($result2);
        $categ1 = $row['category'];
        $cost1 = $row['amount'];
        $date1 = $row['date'];
        $place1 = $row['location'];
    }
    session_start();
    date_default_timezone_set("Asia/Kathmandu");
     if(!isset($_SESSION['user'] ))
     {
        header('location:login.php');
     }
    
    
    ?>

    <div class = "header" >
        <h2>Personal Expense Management</h2>
    </div>
    <div class='loginreg'>
    <h2>Update expense record</h2>
    <form method='POST' action='update.php?id=<?php echo $id?>'>
        <fieldset >
        Category:
        <select name='category' class="loginfield" >
            <option><?php global $categ1; echo $categ1  ?></option>
            <option value="Shopping">Shopping</option>
            <option value="Cosmetics">Cosmetics</option>
            <option value="Day to Day">Day to Day</option>
            <option value="Rent">Rent</option>
            <option value="Snacks">Snacks</option>
            <option value="Gadgets">Gadgets</option>
            <option value="Others">Others</option>
            </select>
        </fieldset>
        <fieldset>
        Total amount paid:
        <input type="number" name='amount' class="loginfield" value = "<?php global $cost1; echo $cost1?>" required >
        </fieldset>
        <fieldset>
        Date of expense:
        <input type='date' name='dateof' class="loginfield" value="<?php global $date1; echo $date1  ?>" required>
        </fieldset>
        <fieldset>
        Location of the expense :
        <input type='text' name='location' class="loginfield" value="<?php global $place1; echo $place1  ?>" required>
        </fieldset>
        <input type='hidden' name='id' id= 'id' value = "<?php global $id; echo $id?>" required>
        <input type="submit" class="but" value="Update Record"/>
    </form>
    </div>
</body>
</html>
