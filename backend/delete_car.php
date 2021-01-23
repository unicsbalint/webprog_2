<?php
require_once 'dbFunctions.php';

if(!empty($_POST['car_id']))
{
$ID = $_POST['car_id'];
$query = "DELETE FROM CAR WHERE car_id=:ID";
$params = [
    ':ID' => $ID,
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car deleted');</script>";
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
