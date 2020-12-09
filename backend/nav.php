<?php 
if (empty($_GET['p']))
    $_GET['p'] = 'home';
?>

<div <?=$_GET['p']=='home'?"active":""?>>
    <a href="index.php?p=home"><i class="fa fa-home"></i> Home</a>
</div>
<div <?=$_GET['p']=='about_me'?"active":""?>>
    <a href="index.php?p=about_me"><i class="fa fa-address-card"></i> About me</a>
</div>
<div <?=$_GET['p']=='contact_me'?"active":""?>>
    <a href="index.php?p=contact"><i class="fa fa-envelope-open-o"></i> Contact me</a>
</div>

<?php if (IsUserLoggedIn()): ?>
    <div <?=$_GET['p']=='private'?"active":""?>>
    <a href="index.php?p=private"><i class="fa fa-envelope-open-o"></i> Private</a>
</div>
<?php endif; ?>