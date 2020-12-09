<?php 
if (empty($_GET['p']))
    $_GET['p'] = 'home';
?>

<div class="navbutton" <?=$_GET['p']=='home'?"active":""?>>
    <a href="index.php?p=home"><i class="fa fa-home"></i> Home</a>
</div>
<div class="navbutton" <?=$_GET['p']=='about_me'?"active":""?>>
    <a href="index.php?p=about_me"><i class="fa fa-address-card"></i> About me</a>
</div>
<div class="navbutton" <?=$_GET['p']=='contact_me'?"active":""?>>
    <a href="index.php?p=contact"><i class="fa fa-envelope-open-o"></i> Contact me</a>
</div>

<?php if (IsUserLoggedIn()): ?>
    <div class="navbutton" <?=$_GET['p']=='private'?"active":""?>>
    <a href="index.php?p=private"><i class="fa fa-envelope-open-o"></i> Private</a>
</div>
<?php endif; ?>

<div class="navbutton">
<?php if (!IsUserLoggedIn()): ?>
        <a href="index.php?p=login">
    <div>
        <i class="fa fa-user-circle-o"></i> Log in
    </div>
    </a>
    <?php else: ?>        
            <div class="navbutton"><a href="index.php?p=logout"><i class="fa fa-power-off"></i> Log out</a></div>
    <?php endif; ?>
</div>
<?php if (IsUserLoggedIn()): ?>
<div class="navbutton">
        <div><i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>
</div>
<?php endif; ?>