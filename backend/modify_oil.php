<?php
require_once 'dbFunctions.php';

if(!empty($_POST['car_brand']) && !empty($_POST['oil_brand']) && !empty($_POST['oil_id']))
{
$carbrand = $_POST['car_brand'];
$oilbrand = $_POST['oil_brand'];
$oilid = $_POST['oil_id'];
$query = "UPDATE oil SET car_brand=:car_brand,recommended_oil_brand=:oil_brand WHERE oil_id = :oil_id";
$params = [
    ':car_brand' => $carbrand,
    ':oil_brand' => $oilbrand,
    'oil_id' => $oilid
];

if (executeDML($query, $params))
{
    echo "<script>alert('The oil modified successfully');</script>";
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
