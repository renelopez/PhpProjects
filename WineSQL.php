<?php
require("./MySQLConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <h3>&nbsp;Wine Store SQL Queries.</h3>
        <h4>&nbsp;Please select a query.</h4>
        <p><a href="WineSQL.php?option=1">&nbsp;&nbsp;&nbsp;1.- "How many bottles of wine exist in our inventory?"</a></p>
        <p><a href="WineSQL.php?option=2">&nbsp;&nbsp;&nbsp;2.- "From what countries are our customers?"</a></p>
        <p><a href="WineSQL.php?option=3">&nbsp;&nbsp;&nbsp;3.- "Show me a list of wineries with their associated regions, sorted by region name and then winery name."</a></p>
        <p><a href="WineSQL.php?option=4">&nbsp;&nbsp;&nbsp;4.- "How many orders have been placed where the total number of bottles of wine in the order have exceeded 10 bottles?"</a></p>
        <p><a href="WineSQL.php?option=5">&nbsp;&nbsp;&nbsp;5.- "Show me a list of wines (wine id, wine name, wine type, vintage year, winery name) made by wineries located in the Riverland region."</a></p>
        <p><a href="WineSQL.php?option=6">&nbsp;&nbsp;&nbsp;6.- "Which wine (wine id, wine name, wine type, vintage year, winery name, region name, number of bottles sold) has sold the most bottles?"</a></p>
        <p><a href="WineSQL.php?option=7">&nbsp;&nbsp;&nbsp;7.- "Show me a list of all inventory records with wine id, inventory id, wine name, wine type, vintage year, winery name, region name, amount on hand, cost, and date added, sorted by inventory id.  Order by wine id and then inventory id."</a></p>

        <div class="well" style="overflow:scroll;height:400px">
            <?php
            if (isset($_GET["option"])) {
                echo("Query:<br />");
                $query = "";
                $option = $_GET["option"];
                $conn = openConnection();
                switch ($option) {
                    case 1:
                        $query = "SELECT COUNT(wine.wine_id) as cnt FROM wine INNER JOIN inventory ON wine.wine_id = inventory.wine_id";
                        echo($query . "<br /><br />");
                        echo("Results:<br />");
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['cnt'];
                        break;
                    case 2:
                        $query = "SELECT DISTINCT countries.country FROM countries INNER JOIN customer ON countries.country_id = customer.country_id";
                        echo($query . "<br /><br />");
                        echo("Results:<br />");
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['country'];
                        }
                        break;
                    case 3:
                        $query = "SELECT winery.winery_name,region.region_name 
                                  FROM winery INNER JOIN region ON winery.region_id=region.region_id
                                  ORDER BY region.region_name AND winery.winery_name";
                        echo($query . "<br /><br />");
                        echo("Results:<br />");
                        $result = mysqli_query($conn, $query);
                        echo("<table>");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo "<td>".$row['winery_name']."</td><td>".$row['region_name']."</td>";
                            echo("</tr>");
                        }
                        echo("</table>");
                        break;
                }
            }
            ?>
        </div>

    </body>
</html>
