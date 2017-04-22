<?php
include_once 'config.php';
$problem[] = $_POST["lols"];
$fuel = $_POST["fuel"];
$other = $_POST["other"];
echo $fuel;
echo $other;
print_r($problem);

//mysqli_query($conn,"INSERT INTO repair VALUES ('$fuel','$problem','$other');");

 ?>
