<?php
function IsUserLoggedIn() {
    return $_SESSION != null;
}

function UserLogout() {
    session_unset();
    session_destroy();
    header('Location: index.php');
}

function UserLogin($email, $password) {
    $query = "SELECT id, name, email, password FROM users WHERE email = :email AND password = :password";
    $params = [
        ':email' => $email,
        ':password' => sha1($password)
    ];

    require_once 'backend/dbFunctions.php';
    $record = getRecord($query, $params);
    if (!empty($record)) {
        $_SESSION['name'] = $record['name'];
        $_SESSION['email'] = $record['email'];
 
        header('Location: index.php');
        echo "true";
    }
    return false;
}

function UserRegister($email, $password, $name) {
    $query = "SELECT id FROM users email = :email";
    $params = [ ':email' => $email ];

    require_once 'backend/dbFunctions.php';
    $record = getRecord($query, $params);
    if (empty($record)) {
        $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $params = [
            ':name' => $name,
            ':email' => $email,
            ':password' => sha1($password)
        ];

        if (executeDML($query, $params))
            header('Location: index.php?P=login');
    }
    return false;
}

?>