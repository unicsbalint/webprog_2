<?php
require_once 'dbFunctions.php';

if(!empty($_POST['car_brand']) && !empty($_POST['car_type']) && !empty($_POST['car_hp']))
{
$brand = $_POST['car_brand'];
$type = $_POST['car_type'];
$horsepower = $_POST['car_hp'];
$query = "INSERT INTO car (brand, type, horsepower) VALUES (:brand, :type, :horsepower)";
$params = [
    ':brand' => $brand,
    ':type' => $type,
    ':horsepower' => $horsepower
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car added successfully');</script>";
    header ('Location: ../index.php?p=private');
}
else
{
   header ('Location: ../index.php?p=private');
}
}
else{   
    header ('Location: ../index.php?p=private');
}
?>
