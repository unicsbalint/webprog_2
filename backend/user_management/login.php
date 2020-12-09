<div class="regContainer">
<form class="login_form" method="post">   
        <label for="userEmail">E-mail</label>
        <input type="email" name="userEmail" id="userEmail" placeholder="Email" class="regElements"> 
        <label for="userPassword">Password</label>
        <input type="password" name="userPassword" id="userPassword" placeholder="Password" value="" class="regElements">        
        <input type="submit" name="loginSubmit" value="Login" class="regButton">
</form>

    <small>Don't have a user yet? <a href="index.php?p=register">Register</a> one.</small>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginSubmit'])) {
  $postData = [
    'email' => $_POST['userEmail'],
    'password' => $_POST['userPassword']
  ];

  if (empty($postData['email']) || empty($postData['password'])) {
    echo "<script>alert('Hiányzó adatok!');</script>";
  } else if (!UserLogin($postData['email'], $postData['password'])) {
    echo "<script>alert('Hibás felhasználónév vagy jelszó!');</script>";
  }

  $postData['password'] = "";
}
?>