<?php
include 'config.php';
session_start();
$_SESSION['redirect']= 4;
$curuser= $_SESSION['user'];
if(!isset($_SESSION['user'] ))
     {
        header('location:login.php');
     }
date_default_timezone_set("Asia/Kathmandu");
$qry7="SELECT u.name,e.user_id, e.category,e.amount,e.location, e.date,e.expenseNo
FROM (user_profile as u NATURAL JOIN expense as e) where e.category='Rent' and user_id = '$curuser'";
$result4 =mysqli_query($con,$qry7);
?>
<html>
    <head>
        <title>View Data</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
    <div class = "header" >
    <h2>Personal Expense Management</h2>
    </div>
    <div class="navbar">
        <ul>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="view1.php">Last 7 Days</a></li>
            <li><a href="view2.php">Last 1 month</a></li>
            <li><a href="view3.php">Rent Expenses</a></li>
            <li><form class="search" method="POST" action="search.php">
            <select name="category">
            <option value="Shopping">Shopping</option>
            <option value="Cosmetics">Cosmetics</option>
            <option value="Day to Day">Day to Day</option>
            <option value="Rent">Rent</option>
            <option value="Snacks">Snacks</option>
            <option value="Gadgets">Gadgets</option>
            <option value="Others">Others</option>
            </select>
            <input type="submit" name="submit" value="Search"/>
                </form></li>
            <li><a href="view5.php">More than 10k</a></li>
            <li><a href="view6.php">Expense Timeline</a></li>
            <li><a href="view7.php">Category Pie</a></li>
            <li><a href="view8.php">Location Bar</a></li>
        </ul>
    </div>
    <div class='subheader'><h3 style = "text-align:center;">My Rental Expense Records</h3>
    </div>
    <table>
        <tr>
        <th>Expense no.</th>
            <th>Date</th>
            <th>Expense Category</th>
            <th>Amount</th>
            <th>Expense Location</th>
            <th>Delete  </th>
            <th>Update</th>
        </tr>
        <?php
        while($rows = mysqli_fetch_assoc($result4)){
            ?>
            <tr>
            <td><?php echo $rows['expenseNo']; ?> </td>
                <td><?php echo $rows['date']; ?> </td>
                <td><?php echo $rows['category']; ?> </td>
                <td><?php echo $rows['amount']; ?> </td>
                <td><?php echo $rows['location']; ?> </td>
               
                <td><a href="delete.php?id=<?php echo $rows['expenseNo']?>" 
                onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                <td><a href="edit.php?id=<?php echo $rows['expenseNo']
                ?>">Update</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </body>
</html>