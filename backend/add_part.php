<?php
require_once 'dbFunctions.php';

if(!empty($_POST['part']) && !empty($_POST['type']))
{
$part = $_POST['part'];
$fortype = $_POST['type'];

$query = "INSERT INTO carparts (part, for_type) VALUES (:part, :fortype)";
$params = [
    ':part' => $part,
    ':fortype' => $fortype,
];

if (executeDML($query, $params))
{
    echo "<script>alert('The car part successfully added');</script>";
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
