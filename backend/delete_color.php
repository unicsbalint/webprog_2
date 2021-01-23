<?php
require_once 'dbFunctions.php';

if(!empty($_POST['color_id']))
{
$ID = $_POST['color_id'];
$query = "DELETE FROM brand_specific_color WHERE color_id=:ID";
$params = [
    ':ID' => $ID,
];

if (executeDML($query, $params))
{
    echo "<script>alert('The color has been deleted');</script>";
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
