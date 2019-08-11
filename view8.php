<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['user'] ))
     {
        header('location:login.php');
     }
     $curuser= $_SESSION['user'];
$qry8 = "SELECT location, sum(amount) FROM expense group by location ";
$res = mysqli_query($con,$qry8);




?>



<html>
  <head>
  <title>View Data</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Categroy', 'Expense'],
          <?php 
            while($row=$res->fetch_assoc()){
                echo "['".$row['location']."',".$row['sum(amount)']."],";
            }

            ?>

        ]);

        var options = {
          title: 'Location-wise Expense Record Bar Graph'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
        chart.draw(data, options);
       
      }
    </script>
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
    <div id= 'piechart' style="width: 900px; height: 500px; margin-left:180px;"></div>
  </body>
</html>