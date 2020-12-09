<?php

if (!array_key_exists('p', $_GET) || empty($_GET['p']))
    $_GET['p'] = 'home';

switch ($_GET['p']) 
{
    case 'home': require_once 'backend/home.php'; break;
    case 'about_me': require_once 'backend/about_me.php'; break;
    case 'contact': require_once 'backend/contact.php'; break;
    case 'login': require_once 'backend/user_management/login.php'; break;
    case 'register': require_once 'backend/user_management/register.php'; break; 
    case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break; 
    case 'private': if(IsUserLoggedIn())
    {
        require_once 'backend/private.php';
    }   break; 
}
?>