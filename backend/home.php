   

<?php if (IsUserLoggedIn()): ?>
    <div class="box">
    Welcome back <?php echo $_SESSION['name'] ?>!
    </div>
<?php endif; ?>

<div class="box">
<h1>Hello there!</h1>
<p> This is the hand-in project for Webprogramming 2 subject,
In this project my task will be to show that I can create a user register system in Php, and I can connect to a database via it. </p>
<h2>I think I got it! Have fun watching my page :) </h2>
<p>If you did not registered yet, click <a href="index.php?p=register">here</a> to register, and you can access an additional page only 
available for registered useres.</p>
<p>If you don't want to Register, the included database already contains a dummy user, the details: <br>
<h3>e-mail: admin@admin.com<h3>
<h3>password: admin123<h3>
</p>
</div>


