<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Create HIGH SCORES TABLE</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$tableName = "high_scores";

$query = "CREATE TABLE high_scores (
  id INT AUTO_INCREMENT,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  name VARCHAR(32),
  score INT,
  screenshot VARCHAR(64),
  approved TINYINT(1) DEFAULT 0,
  PRIMARY KEY (id),
  KEY name (name)
)";
 
if (mysqli_query ($dbc, $query)) {
    echo "<h3 class='success'>The query, CREATE TABLE $tableName, was successfully executed!</h3>";
} else {
 	echo "The query, CREATE TABLE $tableName, could not be executed! " . mysqli_error($dbc);
} 
mysqli_close($dbc);
?>
</body>
</html>)