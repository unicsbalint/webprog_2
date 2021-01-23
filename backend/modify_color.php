<?php
require_once 'dbFunctions.php';

if(!empty($_POST['brand']) && !empty($_POST['color_name']) && !empty($_POST['color_code']) && !empty($_POST['color_id']))
{
$brand = $_POST['brand'];
$color_id = $_POST['color_id'];
$colorname = $_POST['color_name'];
$colorcode = $_POST['color_code'];
$query = "UPDATE brand_specific_color SET brand=:brand,basic_color_name=:color_name,color_code=:color_code WHERE color_id=:color_id";
$params = [
    ':brand' => $brand,
    ':color_name' => $colorname,
    ':color_code' => $colorcode,
    ':color_id' => $color_id
];

if (executeDML($query, $params))
{
    echo "<script>alert('The color modified successfully');</script>";
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
