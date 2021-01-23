<?php
require_once 'dbFunctions.php';

if(!empty($_POST['brand']) && !empty($_POST['color_name']) && !empty($_POST['color_code']))
{
$brand = $_POST['brand'];
$colorname = $_POST['color_name'];
$colorcode = $_POST['color_code'];
$query = "INSERT INTO brand_specific_color(brand, basic_color_name, color_code) VALUES (:brand,:color_name,:color_code)";
$params = [
    ':brand' => $brand,
    ':color_name' => $colorname,
    ':color_code' => $colorcode
];

if (executeDML($query, $params))
{
    echo "<script>alert('The color added successfully');</script>";
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
