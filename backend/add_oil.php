<?php
require_once 'dbFunctions.php';

if(!empty($_POST['car_brand']) && !empty($_POST['oil_brand']))
{
$carbrand = $_POST['car_brand'];
$oilbrand = $_POST['oil_brand'];
$query = "INSERT INTO oil (car_brand, recommended_oil_brand) VALUES (:car_brand,:oil_brand)";
$params = [
    ':car_brand' => $carbrand,
    ':oil_brand' => $oilbrand
];

if (executeDML($query, $params))
{
    echo "<script>alert('The oil added successfully');</script>";
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
