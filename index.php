<?php
session_start();
require_once 'backend/user_management/userManager.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/style.css " type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Webprog2</title>
</head>
<body>
<div>
    <header><?php include_once 'backend/header.php'; ?></header>
    <nav><?php require_once 'backend/nav.php'; ?></nav>
    <content><?php require_once 'backend/routing.php'; ?></content>
    <footer><?php include_once 'backend/footer.php'; ?></footer>
</div>
</body>
</html>