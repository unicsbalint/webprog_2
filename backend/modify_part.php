<?php
require_once 'dbFunctions.php';

if(!empty($_POST['part']) && !empty($_POST['type']))
{
$id = $_POST['part_id'];
$part = $_POST['part'];
$for_type = $_POST['type'];

$query = "UPDATE carparts SET part=:part, for_type=:for_type WHERE id=:id";
$params = [
    ':id' => $id,
    ':part' => $part,
    ':for_type' => $for_type
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car part successfully modified');</script>";
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