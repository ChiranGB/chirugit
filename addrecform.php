<html>
<head>
    <title>Add record</title>
    <link rel="stylesheet" href="style.css">
    <script src = "form.js" type = "text/javascript"></script>
</head>
<body>
    <?php
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
    <h2>Add expense record</h2>
    <form method='post' action='addrec.php'>
        <fieldset>
        Category:
        <select name='category' class="loginfield">
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
        <input type="number" name='amount' class="loginfield" id= "total_amount" required >
        </fieldset>
        <fieldset>
        Date of expense:
        <input type='date' name='dateof' class="loginfield" value="<?php echo date("Y-m-d"); ?>" required>
        </fieldset>
        <fieldset>
        Location of the expense :
        <input type='text' name='location' class="loginfield">
        </fieldset>
        <input type="submit" class="but" value="Add Record"/>
        </form>
    </div>
    
</body>
</html>
