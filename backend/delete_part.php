<?php
require_once 'dbFunctions.php';

if(!empty($_POST['part_id']))
{
$ID = $_POST['part_id'];
$query = "DELETE FROM carparts WHERE id=:ID";
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
