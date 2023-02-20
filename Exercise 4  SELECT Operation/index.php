<?php

$pdo = require("connect.php");


$sql = 'SELECT * FROM COMPANY';

$statement = $pdo->query($sql);

while ($row = $statement->fetchAll(PDO::FETCH_ASSOC)) {
  echo "ID: " . $row['ID'] . " | NAME: " . $row['NAME'] . " | AGE: " . $row['AGE'] . " | ADDRESS: " . $row['ADDRESS'] . " | SALARY: " . $row['SALARY'] . "<br>";
}

$pdo = null;
?>
