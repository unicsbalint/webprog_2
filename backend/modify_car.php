<?php
require_once 'dbFunctions.php';

if(!empty($_POST['car_brand']) && !empty($_POST['car_type']) && !empty($_POST['car_hp']) && !empty($_POST['car_id']))
{
$brand = $_POST['car_brand'];
$type = $_POST['car_type'];
$horsepower = $_POST['car_hp'];
$car_id = $_POST['car_id'];
$query = "UPDATE car SET brand=:brand,type=:type,horsepower=:horsepower WHERE car_id = :car_id";
$params = [
    ':brand' => $brand,
    ':type' => $type,
    ':horsepower' => $horsepower,
    ':car_id' => $car_id
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car updated successfully');</script>";
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

