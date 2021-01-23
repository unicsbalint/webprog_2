<?php
require_once 'dbFunctions.php';

if(!empty($_POST['oil_id']))
{
$ID = $_POST['oil_id'];
$query = "DELETE FROM oil WHERE oil_id=:ID";
$params = [
    ':ID' => $ID,
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car part deleted');</script>";
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
