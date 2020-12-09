   <?php if (!IsUserLoggedIn()): ?>
        <a href="index.php?p=login">
    <div class="loginButton">
        <i class="fa fa-user-circle-o"></i> Log in
    </div>
    </a>
    <?php else: ?>
        <div class="user_panel">
            <div class="alignUsername"><i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>
            <hr/>
            <div class="logout_button"><a href="index.php?p=logout"><i class="fa fa-power-off"></i> Log out</a></div>
        </div>
    <?php endif; ?>
