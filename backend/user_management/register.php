<div class="regContainer">
<form method="post" class="form_register">
    <div class="form_register_row">
        <label for="name"><b>Username</b></label>
        <input type="text" name="name" placeholder="Username" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="email"><b>E-mail</b></label>
        <input type="email" name="email" placeholder="E-mail" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" placeholder="Password" value="" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="password_confirm"><b>Confirm password</b></label>
        <input type="password" name="password_confirm" placeholder="re-type password" value="" class="regElements">
    </div>
    <div class="form_register_row">
        <input type="submit" name="register" value="Register" class="regButton">
    </div>
</form>
<div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $postData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'password1' => $_POST['password_confirm']
    ];

    if (empty($postData['name']) || empty($postData['email']) || empty($postData['password']) || empty($postData['password1'])) {
        echo "<script>alert('Missing details!');</script>";
    } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Wrong email format!');</script>";
    } else if ($postData['password'] != $postData['password1']) {
        echo "<script>alert('Passwords dont match!');</script>";
    } else if (strlen($postData['password']) < 8) {
        echo "<script>alert('The password have to be at least 8 characters long');</script>";
    } else if (!UserRegister($postData['email'], $postData['password'], $postData['name'])) {
        echo "<script>alert('Registration unsuccessful!');</script>";
    }

    $postData['password'] = $postData['password1'] = "";
}

?>