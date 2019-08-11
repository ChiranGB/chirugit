<?php
    session_start();
     if(!isset($_SESSION['user'] ))
     {
        header('location:login.php');
     }
 ?>


<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="style.css">
<body>

    <div class = "header" >
        <h2>Personal Expense Management</h2>
        <div class="welc">
        <h3 >Welcome
        <?php
        if($_SESSION['user'])
        {
            echo $_SESSION['user'];
        }
        ?>
        !
        </h3>
    </div>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="addrecform.php">ADD EXPENSE RECORDS</a></li>
            <li>
                <div class="dropdown">
                    <a href="view.php">VIEW RECORDS</a>
                </div>
            </li>
                <li><a href="logout.php" id="logout">LogOut</a></li>
        </ul>
    </div>
        <table>
            <tr><th colspan='2'>Project Members</th><tr>
                <tr><th>Name</th><th>Roll.no</th></tr>
                <tr><td>Bijay Pandey</td><td>072-BEX-410</td></tr>
                <tr><td>Bipan Chhetri</td><td>072-BEX-412</td></tr>
                <tr><td>Chiranjibi Pandey</td><td>072-BEX-415</td></tr>
    </table>
</body>
</html>
