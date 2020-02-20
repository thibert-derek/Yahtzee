<!DOCTYPE html>
<html>
<head>
    <title>Yatzy Tables</title>
    <link type="text/css" rel="stylesheet" href="style_table.css" />
    </head>
    <body>
    <div id="head">
        <p><a href="yatzyIndex.php">To Index</a></p>
        </div>
    <div id="content">
        
        <h2>Yatzy TABLE</h2>
        
        <div id="yatzy">
        
            <?php
            require_once('connectvars.php');
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            
            $query = "SELECT * from high_scores ORDER BY score DESC, date ASC";
            $result = mysqli_query ($dbc, $query) or die ("Error querying database " .mysqli_error($dbc));
            
            echo "<h3>High Score Table</h3>";
            echo "<table>";
            echo "<tr>";
            echo "<th>ID*</th>";
            echo "<th>DATE</th>";
            echo "<th>NAME</th>";
            echo "<th>SCORE</th>";
            echo "<th>SCREENSHOT</th>";
            echo "<th>Approved</th>";
            echo "</tr>";
            
        while ($Row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>$Row[id]</td>";
            echo "<td>$Row[date]</td>";
            echo "<td>$Row[name]</td>";
            echo "<td>$Row[score]</td>";
            echo "<td>$Row[screenshot]</td>";
            echo "<td>N/A</td>";
            echo "<tr/>";
        }
            echo "</table>";
        
        echo "</div>";
            
        mysqli_close ($dbc);
        ?>
            <div id="footer">
            <p>End of TABLES</p>
            </div>
            
        </div>
        </div>
    </body>
</html>